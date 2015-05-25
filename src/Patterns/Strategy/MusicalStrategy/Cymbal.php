<?php
namespace Solid\Patterns\Strategy\MusicalStrategy;

use Solid\Patterns\Strategy\MusicalStrategy;
use Solid\Patterns\Strategy\CircusContext\Animal;

class Cymbal implements MusicalStrategy
{
    public function play(Animal $animal)
    {
        return $animal->getName()." joue des cymbales<br/>";
    }
}