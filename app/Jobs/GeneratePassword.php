<?php

namespace App\Jobs;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Models\Role;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GeneratePassword implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private  $user;
    private $role;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, Role $role)
    {
        $this->user=$user;
        $this->role=$role;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $log="The job GeneratePassword for user '".$this->user->id."' is dispatched.";
        $cr =new Controller();
        $cr->log('info',"$log",'cli');
        $userc=new UserController();
        $userc->generatePassword($this->user, $this->role);
    }
}
