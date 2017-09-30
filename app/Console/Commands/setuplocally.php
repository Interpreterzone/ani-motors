<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class setuplocally extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:locally';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        // run bash setup script
        //$this->exec('ls -al');
        $process = new Process('bash setup.sh');
        $process->run();

        // executes after the command finishes
        //if (!$process->isSuccessful()) {
        //    throw new ProcessFailedException($process);
        //}

        echo $process->getOutput();
    }
}
