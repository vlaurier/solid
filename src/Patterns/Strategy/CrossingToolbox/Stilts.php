<?php
namespace Solid\Patterns\Strategy\CrossingToolbox;

use Solid\Patterns\Strategy\CrossingStrategy;
use Solid\Patterns\Strategy\CircusContext\Animal;

class Stilts implements CrossingStrategy
{
    public function cross(Animal $animal)
    {
        return $animal->getName()." traverse sur des échasses<br/>";
    }
}