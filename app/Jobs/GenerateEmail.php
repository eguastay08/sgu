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

class GenerateEmail extends Controller implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $user;
    private $role;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user,Role $role)
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
        $userc=new UserController();
        $log="The job GenerateEmail for user '".$this->user->id."' is dispatched.";
        $this->log('info',"$log",'cli',$this->user->id);
        $userc->generateEmail($this->user, $this->role);
    }
}
