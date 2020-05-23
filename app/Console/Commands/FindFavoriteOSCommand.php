<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FindFavoriteOSCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'queue:test-beanstalk';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test qeueue beanstalk';

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
        for ($i = 0; $i < 50; $i++) {
            \App\Jobs\FindFavoriteOS::dispatch();
        }

        return '50 Jobs dispatched!';
    }
}
