<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Animal;
use Solid\Patterns\Visitor\Visitor;

class Zeita extends Animal
{
    public function getName()
    {
        return 'Zeita';
    }

    public function makeYourPerformance()
    {
        echo 'Zeita est experte au trapèze.';
    }
}
