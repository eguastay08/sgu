<?php

namespace App\Jobs;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Mail\SendPasswordAccess;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class SendNewPassword  implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $for;
    private $dat_email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($for, $dat_email)
    {
        $this->for=$for;
        $dat_email['password']=$dat_email['password'];
        $this->dat_email=$dat_email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $log="The job SendNewPassword for email '".$this->dat_email['email']."' is dispatched.";
        $cr =new Controller();
        $cr->log('info',"$log",'cli');
        Mail::to($this->for)->send(new SendPasswordAccess($this->dat_email));
    }
}
