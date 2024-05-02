<?php

//The class has a namespace App\Dice so it must be stored in src/Dice.
//The class name is Dice so it must be saved in the file Dice.php.

namespace App\Dice;


class Dice
{
    protected $value;

    public function __construct()
    {
        $this->value = null;
    }

    public function roll(): int
    {
        $this->value = random_int(1, 6);
        return $this->value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getAsString(): string
    {
        return "[{$this->value}]";
    }
}
