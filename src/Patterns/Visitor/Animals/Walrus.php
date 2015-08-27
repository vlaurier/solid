<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Animal;
use Solid\Patterns\Visitor\Visitor;

class Walrus extends Animal
{
    public function getName()
    {
        return 'Walrus';
    }

    public function makeYourPerformance()
    {
        echo "Le morse a un numéro similaire à l'otarie";
    }
}
