<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Group;

class Monkeys extends Group
{
    public function getName()
    {
        return 'Monkeys';
    }
}