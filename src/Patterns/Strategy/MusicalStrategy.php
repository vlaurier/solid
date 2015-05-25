<?php
// src/Patterns/Strategy/MusicalStrategy.php
namespace Solid\Patterns\Strategy;

use Solid\Patterns\Strategy\CircusContext\Animal;

interface MusicalStrategy
{
    public function play(Animal $animal);
}