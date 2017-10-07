<?php

namespace App\Console\Commands;

use App\Http\Controllers\CoreController;
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

            if ($this->confirm('Do you wish to setup DB? [y|N]')){

                $DB_DATABASE = $this->ask('What is you DB NAME?');
                $DB_USERNAME = $this->ask('What is you DB USERNAME?');
                $DB_PASSWORD = $this->secret('What is your DB PASSWORD?');

                CoreController::changeEnvVariable('DB_DATABASE', 'homestead', $DB_DATABASE);
                CoreController::changeEnvVariable('DB_USERNAME', 'homestead', $DB_USERNAME);
                CoreController::changeEnvVariable('DB_PASSWORD', 'secret', $DB_PASSWORD);

                $this->info('Database successfully configured!');
            }

            if ($this->confirm('Do you wish to setup Email setting? [y|N]')){

                $MAIL_DRIVER = 'smtp';
                $MAIL_HOST = 'smtp.gmail.com';
                $MAIL_USERNAME = '2fsdevelopers@gmail.com';
                $MAIL_PASSWORD = $this->secret('What is your email PASSWORD?');
                $MAIL_ENCRYPTION = 'tls';

                CoreController::changeEnvVariable('MAIL_DRIVER', 'smtp', $MAIL_DRIVER);
                CoreController::changeEnvVariable('MAIL_HOST', 'smtp.mailtrap.io', $MAIL_HOST);
                CoreController::changeEnvVariable('MAIL_USERNAME', 'null', $MAIL_USERNAME);
                CoreController::changeEnvVariable('MAIL_PASSWORD', 'null', $MAIL_PASSWORD);
                CoreController::changeEnvVariable('MAIL_ENCRYPTION', 'null', $MAIL_ENCRYPTION);

                $this->info('Email successfully configured!');
            }

            $this->call('config:clear');
            $this->call('cache:clear');
            $this->call('migrate:install');
            $this->call('migrate:refresh');
            $this->call('migrate:status');
        }
        else{
            $this->info('exit');
        }
    }

}
