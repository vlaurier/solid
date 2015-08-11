<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Group;

class BigCats extends Group
{
    public function getName()
    {
        return 'BigCats';
    }
}