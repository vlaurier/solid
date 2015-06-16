<?php
namespace Solid\Patterns\Visitor\Circus\Categories\Fauves;

use Solid\Patterns\Visitor\Artist;
use Solid\Patterns\Visitor\Visitor;

class Torp extends Artist
{
    public function makeYourPerformance()
    {
        echo "Torp est l'as du cerceau";
    }

    public function accept(Visitor $visitor)
    {
        $visitor->visit($this);
    }
}