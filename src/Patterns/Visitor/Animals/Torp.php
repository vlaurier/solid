<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Animal;
use Solid\Patterns\Visitor\Visitor;

class Torp implements Animal
{
    public function accept(Visitor $visitor)
    {
        $visitor->visitTorp($this);
    }
}
