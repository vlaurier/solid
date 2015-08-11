<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Animal;
use Solid\Patterns\Visitor\Visitor;

class Ringo extends Animal
{
    public function getName()
    {
        return 'Ringo';
    }

    public function makeYourPerformance()
    {
        echo 'Ringo est le spécialiste des quilles.';
    }
}
