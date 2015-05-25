<?php
// src/Patterns/Strategy/CrossingStrategy.php
namespace Solid\Patterns\Strategy;

use Solid\Patterns\Strategy\CircusContext\Animal;

interface CrossingStrategy
{
    public function cross(Animal $animal);
}