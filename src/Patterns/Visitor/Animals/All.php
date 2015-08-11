<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Group;

class All extends Group
{
    public function getName()
    {
        return 'All';
    }
}