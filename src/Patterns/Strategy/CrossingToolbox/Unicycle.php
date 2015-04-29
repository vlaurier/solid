<?php
namespace Solid\Patterns\Strategy\CrossingToolbox;

use Solid\Patterns\Strategy\CrossingStrategy;

class Unicycle implements CrossingStrategy
{
    public function cross($animal = null)
    {
        return $animal->getName()." cross with unicycle<br/>";
    }
}
