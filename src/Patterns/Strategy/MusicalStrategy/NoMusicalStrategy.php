<?php
namespace Solid\Patterns\Strategy\MusicalStrategy;

use Solid\Patterns\Strategy\MusicalStrategy;

class NoMusicalStrategy implements MusicalStrategy
{
    public function play()
    {
        return '';
    }
}
