<?php
namespace Solid\Patterns\Strategy\CrossingToolbox;

use Solid\Patterns\Strategy\CrossingStrategy;

class NoCrossingStrategy implements CrossingStrategy
{
    public function cross($animal = null)
    {
        return '';
    }
}
