<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Animal;
use Solid\Patterns\Visitor\Visitor;

class Torp extends Animal
{
    public function getName()
    {
        return 'Torp';
    }
}
