<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Faker\Factory as Faker;

class comando2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:comando2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cerca un elemento letto in ingresso in un vettore riempito random';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $faker = Faker::create('it_IT');
        $string = $this->ask("Inserisca la città in cercare in un array random");
        $random = [];

        for ($i = 0; $i < fake()->numberBetween(10, 50); $i++) {
            $random[] = $faker->state();
        }

        if (Arr::first($random, fn ($key) => strtolower($key) == strtolower($string))) {
            $this->line('La vostra città si trova nel array');
        } else {
            $this->line('Non abbiamo trovato la vostra cita nel array');
            $this->line('Le città nel array sono');
            $words = '';
            foreach ($random as $word) {
                $words .= $words == '' ? $word : ', ' . $word;
            }
            $this->line($words);
        }
    }
}
