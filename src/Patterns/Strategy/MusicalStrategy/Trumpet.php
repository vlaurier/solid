<?php
namespace Solid\Patterns\Strategy\MusicalStrategy;

use Solid\Patterns\Strategy\MusicalStrategy;

class Trumpet implements MusicalStrategy
{
    public function play($animal = null)
    {
        return $animal->getName()." play trumpet<br/>";
    }
}
