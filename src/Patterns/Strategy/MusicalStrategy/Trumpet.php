<?php
namespace Solid\Patterns\Strategy\MusicalStrategy;

use Solid\Patterns\Strategy\MusicalStrategy;
use Solid\Patterns\Strategy\CircusContext\Animal;

class Trumpet implements MusicalStrategy
{
    public function play(Animal $animal)
    {
        return $animal->getName()." joue de la trompette<br/>";
    }
}