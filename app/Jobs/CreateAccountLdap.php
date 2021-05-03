<?php

namespace App\Jobs;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LdapController;
use App\Models\Role;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Crypt;

class CreateAccountLdap extends Controller implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $user;
    private $password;
    private $role;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, $password, Role $role)
    {
        $this->user=$user;
        $this->password=Crypt::decryptString($password);
        $this->role=$role;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $userc=new LdapController();
        $log="The job to CreateAccountLdap for user '".$this->user->id."' is dispatched.";
        $this->log('info',"$log",'cli');
        $userc->createAccount($this->user,$this->password,$this->role);
    }
}
