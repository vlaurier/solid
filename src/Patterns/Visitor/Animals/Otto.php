<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Animal;
use Solid\Patterns\Visitor\Visitor;

class Pearl extends Animal
{
    public function getName()
    {
        return 'Pearl';
    }

    public function makeYourPerformance()
    {
        echo 'Pearl est spécialiste des ballons';
    }
}
