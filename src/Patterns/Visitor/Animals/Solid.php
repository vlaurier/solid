<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Animal;
use Solid\Patterns\Visitor\Visitor;

class Solid extends Animal
{
    public function getName()
    {
        return 'Solid';
    }

    public function makeYourPerformance()
    {
        echo 'Solid fait son fameux numéro d\'équilibre sur le tabouret';
    }
}
