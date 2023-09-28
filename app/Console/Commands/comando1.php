<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class comando1 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:comando1';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cerca la nella stringa inserita se si trova la parola pippo';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $stringa = $this->ask('Inserisca la stringa dove cercare la parola pippo');
        if (Str::contains($stringa, 'pippo', true)) {
            $this->line('si, in questa stringa si trova "pippo"');
        } else {
            $this->warn('no, in questa stringa non si trova "pippo"');
        }
    }
}
