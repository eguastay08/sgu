<?php

namespace App\Http\Controllers;

use App\Jobs\CreateAccountLdap;
use App\Jobs\GeneratePassword;
use App\Jobs\SendPasswordEmail;
use App\Models\Role;
use Google\Exception;
use Google_Client;
use Google_Service_Directory;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Illuminate\Support\Str;
use App\Jobs\AddGroupWorkSpace;


class WorksSpaceController extends Controller
{

    protected $tokenPath;
    protected $scopes = [
        Google_Service_Directory::ADMIN_DIRECTORY_USER,
        Google_Service_Directory::ADMIN_DIRECTORY_GROUP,
        Google_Service_Directory::ADMIN_DIRECTORY_GROUP_MEMBER,
        Google_Service_Directory::ADMIN_DIRECTORY_ORGUNIT
    ];

    public function __construct()
    {
        $this->tokenPath=env('APP_LOCATION').'/storage/tokens/token_gsuite.json';
    }

    public function install()
    {
        if (!file_exists($this->tokenPath)) {
            $config = [
                'client_id' => env('WORKSPACE_CLIENT_ID'),
                'project_id' => env('WORKSPACE_PROJECT_ID'),
                'client_secret' => env('WORKSPACE_CLIENT_SECRET'),
                'auth_uri' => 'https://accounts.google.com/o/oauth2/auth',
                'token_uri' => 'https://oauth2.googleapis.com/token',
                'auth_provider_x509_cert_url' => 'https://www.googleapis.com/oauth2/v1/certs',
                'redirect_uris' => ["urn:ietf:wg:oauth:2.0:oob", "http://localhost"]
            ];
            $client = new Google_Client();
            $client->setApplicationName('G Suite Directory');
            $client->setScopes($this->scopes);
            $client->setAuthConfig($config);
            $client->setAccessType('offline');
            $client->setPrompt('select_account consent');
            $authUrl = $client->createAuthUrl();
            printf("Open the following link in your browser:\n%s\n", $authUrl);
            print 'Enter verification code: ';
            $authCode = trim(fgets(STDIN));

            // Exchange authorization code for an access token.
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
            $client->setAccessToken($accessToken);

            // Check to see if there was an error.
            if (array_key_exists('error', $accessToken)) {
                throw new Exception(join(', ', $accessToken));
            }
            if (!file_exists(dirname($this->tokenPath))) {
                mkdir(dirname($this->tokenPath), 0777, true);
            }
            file_put_contents($this->tokenPath, json_encode($client->getAccessToken()));
            return print "installation success\n";
        } else {
            return print "installation already exists\n";
        }

    }

    private function getClient()
    {
        if (file_exists($this->tokenPath)) {
            $config = [
                'client_id' => env('WORKSPACE_CLIENT_ID'),
                'project_id' => env('WORKSPACE_PROJECT_ID'),
                'client_secret' => env('WORKSPACE_CLIENT_SECRET'),
                'auth_uri' => 'https://accounts.google.com/o/oauth2/auth',
                'token_uri' => 'https://oauth2.googleapis.com/token',
                'auth_provider_x509_cert_url' => 'https://www.googleapis.com/oauth2/v1/certs',
                'redirect_uris' => ["urn:ietf:wg:oauth:2.0:oob", "http://localhost"]
            ];
            $client = new Google_Client();
            $client->setAuthConfig($config);
            $file=$contents = File::get($this->tokenPath);
            $accessToken = json_decode($file, true);
            $client->setAccessToken($accessToken);
            if ($client->isAccessTokenExpired()) {
                if ($client->getRefreshToken()) {
                    $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
                    if (!file_exists(dirname($this->tokenPath))) {
                        mkdir(dirname($this->tokenPath), 0777, true);
                    }
                    file_put_contents($this->tokenPath, json_encode($client->getAccessToken()));
                } else {
                    throw new Exception('unauthorized');
                }
            }
            return $client;
        } else {
            throw new Exception('uninstalled');
        }
    }

    public static function emailExist($email)
    {
        $domain=explode('@',$email);
        $domain=$domain[1];
        $client = (new static)->getClient();
        $httpClient = $client->authorize();
        $response = $httpClient->get("https://www.googleapis.com/admin/directory/v1/users?domain=$domain&query=email=$email");
        $result= (string)$response->getBody();
        $data = json_decode($result, true);
        if(!isset($data['users'])){
            return false;
        }
        return true;
    }

    public function addMemberGroup($email_membre,$id_group){
        $data=array (
            "email"=> "$email_membre",
            "role"=> "MEMBER"
        );
        $client = (new static)->getClient();
        $httpClient = $client->authorize();
        $response= $httpClient->post("https://admin.googleapis.com/admin/directory/v1/groups/$id_group/members",[RequestOptions::JSON=>$data]);
        //$response= $httpClient->post("http://127.0.0.1:8000/api/v1/demo",[RequestOptions::JSON=>$data]);
        $result= (string)$response->getBody();
        $data = json_decode($result, true);
        if(isset($data['error'])){
            throw new Exception('Error al general la solicitud');
        }
        return null;
    }

    public function createEmail(User $user,$new_email,Role $role){
        $new_password=str::random(8);

        $data=array (
            'primaryEmail' => $new_email,
            'name' =>
                array (
                    'givenName' => "$user->f_name $user->s_name",
                    'familyName' => "$user->f_surname $user->s_surname",
                ),
            'suspended' => false,
            'password' => sha1($new_password),
            'hashFunction' => 'SHA-1',
            'changePasswordAtNextLogin' => true,
            'ipWhitelisted' => false,
            'emails' =>
                array (
                    0 =>
                        array (
                            'address' => $new_email,
                            'type' => 'home',
                            'customType' => '',
                            'primary' => true,
                        ),
                ),
            'orgUnitPath' => $role->path_unit,
            'includeInGlobalAddressList' => true,
        );
        $client = (new static)->getClient();
        $httpClient = $client->authorize();
        $response = $httpClient->post('https://www.googleapis.com/admin/directory/v1/users',[RequestOptions::JSON=>$data]);
        //$response = $httpClient->post('http://127.0.0.1:8000/api/v1/demo',[RequestOptions::JSON=>$data]);
        $result= (string)$response->getBody();
        if($response->getStatusCode()==200) {
            $log = "The email $new_email is created from WorkSpace for the user '" . $user->id . "'";
            $this->log('info', "$log", 'cli');
            $dat_mail = [
                'name' => "$user->f_surname $user->s_surname $user->f_name $user->s_name",
                'email' => $user->email,
                'new_email' => $new_email,
                'password' => $new_password
            ];
            $for = [
                ['name' => "$user->f_name $user->s_name $user->f_surname $user->s_surname",
                    'email' => $user->email]
            ];
            SendPasswordEmail::dispatch($for, $dat_mail);
            $log = "The SendPasswordEmail  job is created from WorkSpace for user '" . $user->id . "'";
            $this->log('info', "$log", 'cli');
            AddGroupWorkSpace::dispatch($new_email, $role->group_email);
            $log = "The AddGroupWorkSpace job is created from WorkSpace for user '" . $user->id . "'";
            $this->log('info', "$log", 'cli');
            GeneratePassword::dispatch($user,$role);
            $log = "The GeneratePassword job is created from WorkSpace for user '" . $user->id . "'";
            $this->log('info', "$log", 'cli');
        }else{
            $this->log('critical',"$result",'cli');
            throw new Exception('Error al general la solicitud');
        }
    }
}



