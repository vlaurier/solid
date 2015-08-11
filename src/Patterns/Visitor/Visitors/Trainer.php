<?php
namespace Solid\Patterns\Visitor\Visitors;

use Solid\Patterns\Visitor\Animals\Panther;
use Solid\Patterns\Visitor\Animals\Lion;
use Solid\Patterns\Visitor\Visitor;
use Solid\Patterns\Visitor\Animals\Otto;
use Solid\Patterns\Visitor\Animals\Torp;
use Solid\Patterns\Visitor\Animals\Solid;

class Trainer implements Visitor
{
    public function visitTorp(Torp $torp)
    {
        echo "Dressage de Torp: toujours rester vigilent avec les fauves<br/>";
    }

    public function visitLion(Lion $lion)
    {
        echo "Dressage du lion<br/>";
    }

    public function visitPanther(Panther $panther)
    {
        echo "Dressage de la panthère<br/>";
    }

    public function visitOtto(Otto $otto)
    {
        echo "Dressage d'Otto: avec des poissons !<br/>";
    }

    public function visitSolid(Solid $solid)
    {
        echo "Le dressage de Solid fonctionne avec les cacahuètes...<br/>";
    }
}