<?php
namespace Solid\Patterns\Strategy\CrossingToolbox;

use Solid\Patterns\Strategy\CrossingStrategy;

class Stilts implements CrossingStrategy
{
    public function cross($animal = null)
    {
        return $animal->getName()." walk on stilts<br/>";
    }
}
