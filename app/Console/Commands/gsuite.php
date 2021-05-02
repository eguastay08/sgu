<?php

namespace App\Console\Commands;

use App\Http\Controllers\WorksSpaceController;
use Illuminate\Console\Command;

class gsuite extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gsuite:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Configure access to gsuite';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $gsuite =new WorksSpaceController();
        return $gsuite->install();
    }
}
