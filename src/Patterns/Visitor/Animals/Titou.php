<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Animal;
use Solid\Patterns\Visitor\Visitor;

class Titou extends Animal
{
    public function getName()
    {
        return 'Titou';
    }

    public function makeYourPerformance()
    {
        echo 'Titou est très doué en jonglage.';
    }
}
