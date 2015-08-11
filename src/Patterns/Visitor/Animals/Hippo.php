<?php
namespace Solid\Patterns\Visitor\Animals;

use Solid\Patterns\Visitor\Animal;
use Solid\Patterns\Visitor\Visitor;

class Hippo extends Animal
{
    public function getName()
    {
        return 'Hippo';
    }

    public function makeYourPerformance()
    {
        echo "Hippo n'a pas un numéro très spectaculaire... Gravir une pente à 10 degrés !";
    }
}
