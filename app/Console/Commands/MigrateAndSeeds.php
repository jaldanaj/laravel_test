<?php

namespace App\Console\Commands;

use Artisan;
use Illuminate\Console\Command;

class MigrateAndSeeds extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Desplegardb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Despliega todas las tablas e inserta datos en ellas';

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
        Artisan::call('migrate');
        Artisan::call('db:seed');
    }
}
