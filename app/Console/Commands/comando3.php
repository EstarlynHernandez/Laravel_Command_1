<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class comando3 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:comando3';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fa una Chiamata web ad https://laravel.com e stampa il contenuto del sito';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::get('https://example.com/');
        $this->line($response->body());
    }
}
