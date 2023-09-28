<?php

namespace App\Esercizi;

class Exercise4
{
    private PrintText $text;
    private RandomNumber $number;
    private Sum $sum;

    public function __construct(PrintText $text, RandomNumber $number, Sum $sum)
    {
        $this->text = $text;
        $this->sum = $sum;
        $this->number = $number;
    }

    public function exec()
    {
        echo $this->text->print() . "\n";
        echo $this->sum->sum($this->number->getNumber(), $this->number->getNumber());

        ////////
        /// call with laravel tinker
        /// php artisan tinker
        /// $Exercise4 = app()->make(App\Esercizi\Exercise4::class)
        /// $Exercise4->exec()
    }
}
