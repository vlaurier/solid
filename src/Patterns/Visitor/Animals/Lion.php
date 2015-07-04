<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Animal;
use Solid\Patterns\Visitor\Visitor;

class Lion extends Animal
{
    public function getName()
    {
        return 'Lion';
    }
    public function makeYourPerformance()
    {
        echo 'Le lion se contente de rugir';
    }
}
