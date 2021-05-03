<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\Log_general;
use App\Models\Role_access;
use App\Models\User;
use App\Models\User_role;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   public $headers = [
        'Content-Type'=>'application/json',
        'Access-Control-Allow-Origin'=>'*',
        'Access-Control-Allow-Methods'=>'GET, POST, PUT, DELETE, OPTIONS',
        'Access-Control-Allow-Headers'=>'X-Requested-With, Content-Type, X-Token-Auth, Authorization'
    ];


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public static function sendError($error, $code = 404,$errorMessages = [])
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }

    /**
     * @param bool $error
     * @param int $code
     * @param string $status
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    public static function response($error=true, $code=Response::HTTP_NOT_FOUND, $status='404 Not Found', $data =array()){
      return response()->json([
        'error' => $error,
        'code' => $code,
        'status'=> $status,
        'data' => $data
        ], $code);
    }

    /**
     * @param $id_user
     * @param $method
     * @param $endpoint
     * @return bool
     */
    public static function validatePermissions($id_user, $method, $endpoint){
        $access_granted=false;
        $user_role= User_role::where('id_user','=',$id_user)
            ->first();
        $id_role=$user_role['cod_rol'];
        $access=Access::where('method','=',$method)
           ->where('endpoint','=',$endpoint)
            ->first();
        if(isset($access)) {
            $cod_access = $access['cod_access'];
            $access_granted = Role_access::where('cod_rol', '=', $id_role)
                ->where('cod_access', '=', $cod_access)
                ->where('active', '=', true)
                ->first();
        }
        if($access_granted){
            return true;
        }
       return false;
    }

    public function log($type,$logt,$origin,User $user=null){
        $log=[];
        if(!isset($_SERVER)){
            $log['user_agent']=$_SERVER['HTTP_USER_AGENT'];
            $log['ip']=$_SERVER['REMOTE_ADDR'];
        }
        $log['type']=$type;
        $log['log']=$logt;
        $log['origin']=$origin;

        if($user!=null){
            $log['id_user']=$user->id;
        }
        Log_general::create($log);
    }

}
