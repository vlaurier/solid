<?php
namespace Solid\Patterns\Visitor\Visitors;

use Solid\Patterns\Visitor\Visitor;
use Solid\Patterns\Visitor\Animals\Otto;
use Solid\Patterns\Visitor\Animals\Torp;
use Solid\Patterns\Visitor\Animals\Solid;

class Tamer implements Visitor
{
    public function visitOtto(Otto $otto)
    {
        echo "Dressage d'Otto: avec des poissons !<br/>";
    }
    public function visitTorp(Torp $torp)
    {
        echo "Dressage de Torp: toujours rester vigilent avec les fauves<br/>";
    }
    public function visitSolid(Solid $solid)
    {
        echo "Le dressage de Solid fonctionne avec les cacahuètes...<br/>";
    }
}