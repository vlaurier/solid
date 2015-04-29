<?php
namespace Solid\Patterns\Strategy\CrossingToolbox;

use Solid\Patterns\Strategy\CrossingStrategy;

class Ballon implements CrossingStrategy
{
    public function cross($animal = null)
    {
        return $animal->getName()." cross with ballon<br/>";
    }
}
