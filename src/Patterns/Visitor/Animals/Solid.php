<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Animal;
use Solid\Patterns\Visitor\Visitor;

class Solid extends Animal
{
    public function getShortClassName()
    {
        return 'Solid';
    }
}
