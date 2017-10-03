<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class App extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install The Application';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    /**
     *
     * Create a new instance.
     *
     * @var \Symfony\Component\Process\Process $process
     *
     * @return void
     */
    protected $process;


    /**
     * App constructor.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     * @link https://laravel.com/docs/5.2/artisan
     * @return mixed
     */
    public function handle()
    {
        if ($this->confirm('Do you wish to continue installation? [y|N]')) {
            $this->call('config:clear');
            $this->call('cache:clear');
            $this->call('migrate:install');
            $this->call('migrate:status');
        }
        else{
            $this->info('exit');
        }
    }

}
