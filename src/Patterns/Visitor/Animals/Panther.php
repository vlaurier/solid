<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Animal;
use Solid\Patterns\Visitor\Visitor;

class Panther extends Animal
{
    public function getName()
    {
        return 'Panther';
    }
    public function makeYourPerformance()
    {
        echo 'La panthère grimpe de tabouret en tabouret';
    }
}
