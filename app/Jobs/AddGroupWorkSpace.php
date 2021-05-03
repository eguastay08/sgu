<?php

namespace App\Jobs;

use App\Http\Controllers\Controller;
use App\Http\Controllers\WorksSpaceController;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AddGroupWorkSpace implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $email_membre;
    private $id_group;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email_membre,$id_group)
    {
        $this->email_membre=$email_membre;
        $this->id_group=$id_group;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $wsc=new WorksSpaceController();
        $log="The job to AddGroupWorkSpace for email '".$this->email_membre."' is dispatched.";
        $cr =new Controller();
        $cr->log('info',"$log",'cli');
        $wsc->addMemberGroup($this->email_membre,$this->id_group);
    }
}
