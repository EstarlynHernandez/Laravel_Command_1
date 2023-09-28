<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class comando4 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:comando4';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $Exercise4 = app()->make(\App\Esercizi\Exercise4::class);
        $Exercise4->exec();
    }
}
