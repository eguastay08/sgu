<?php

namespace App\Jobs;

use App\Http\Controllers\Controller;
use App\Mail\SendEmailAccess;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class SendPasswordEmail extends Controller implements ShouldQueue
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
        $this->user=$for;
        $dat_email['password']=Crypt::decryptString($dat_email['password']);
        $this->dat_email=$dat_email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $log="The job SendPasswordEmail for email '".$this->for['email']."' is dispatched.";
        $this->log('info',"$log",'cli');
        Mail::to($this->for)->send(new SendEmailAccess($this->dat_email));
    }
}
