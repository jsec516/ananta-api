<?php

namespace Qclinic\Console\Commands;

use Illuminate\Console\Command;

class SetupDummyData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'qclinic:setup-dummy-db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup dummy database for testing purpose';

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
        $this->info(date('Y-m-d') . ' Preparing Database tables ...');
        Artisan::call('migrate:refresh --seed');
        $this->info(date('Y-m-d') . ' Generating Dummy Data ...');
        Artisan::call('qclinic:create-data');       
    }
}
