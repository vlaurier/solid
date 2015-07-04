<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\AnimalsGroup;

class BigCats extends AnimalsGroup
{
    public function getName()
    {
        return 'BigCats';
    }
}