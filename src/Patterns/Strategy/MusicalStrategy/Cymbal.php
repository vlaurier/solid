<?php
namespace Solid\Patterns\Strategy\MusicalStrategy;

use Solid\Patterns\Strategy\MusicalStrategy;

class Cymbal implements MusicalStrategy
{
    public function play()
    {
        return "play cymbal<br/>";
    }
}
