<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\AnimalsGroup;

class All extends AnimalsGroup
{
    public function getName()
    {
        return 'All';
    }
}