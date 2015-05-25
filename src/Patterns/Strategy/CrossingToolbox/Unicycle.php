<?php
namespace Solid\Patterns\Strategy\CrossingToolbox;

use Solid\Patterns\Strategy\CrossingStrategy;
use Solid\Patterns\Strategy\CircusContext\Animal;

class Unicycle implements CrossingStrategy
{
    public function cross(Animal $animal)
    {
        return $animal->getName()." traverse avec un monocycle<br/>";
    }
}