<?php
namespace Solid\Patterns\Strategy\MusicalStrategy;

use Solid\Patterns\Strategy\MusicalStrategy;
use Solid\Patterns\Strategy\CircusContext\Animal;

class NoMusicalStrategy implements MusicalStrategy
{
    public function play(Animal $animal)
    {
        return "";
    }
}