<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Animal;
use Solid\Patterns\Visitor\Visitor;

class Pearl implements Animal
{
    public function accept(Visitor $visitor)
    {
        $visitor->visitPearl($this);
    }
}
