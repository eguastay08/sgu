<?php

namespace App\Jobs;

use App\Http\Controllers\Controller;
use App\Http\Controllers\WorksSpaceController;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateEmail extends Controller implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $new_email;
    protected $role;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user,$new_email,$role )
    {
        $this->user=$user;
        $this->new_email=$new_email;
        $this->role=$role;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $wsc=new WorksSpaceController();
        $log="The job to CreateEmail for user '".$this->user->id."' is dispatched.";
        $this->log('info',"$log",'cli');
        $wsc->createEmail($this->user,$this->new_email,$this->role);
    }
}
