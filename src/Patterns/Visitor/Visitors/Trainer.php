<?php
namespace Solid\Patterns\Visitor\Visitors;

use Solid\Patterns\Visitor\Visitor;
use Solid\Patterns\Visitor\Animals\Titou;
use Solid\Patterns\Visitor\Animals\Ringo;
use Solid\Patterns\Visitor\Animals\Zeita;
use Solid\Patterns\Visitor\Animals\Torp;
use Solid\Patterns\Visitor\Animals\Panther;
use Solid\Patterns\Visitor\Animals\Lion;
use Solid\Patterns\Visitor\Animals\Otto;
use Solid\Patterns\Visitor\Animals\Walrus;
use Solid\Patterns\Visitor\Animals\Solid;
use Solid\Patterns\Visitor\Animals\Hippo;

class Trainer implements Visitor
{
    public function visitTitou(Titou $titou)
    {
        echo "Dressage de Titou.<br/>";
    }
    public function visitRingo(Ringo $ringo)
    {
        echo "Dressage de Ringo.<br/>";
    }
    public function visitZeita(Zeita $zeita)
    {
        echo "Dressage de Zeita.<br/>";
    }
    public function visitTorp(Torp $torp)
    {
        echo "Dressage de Torp: toujours rester vigilent avec les fauves<br/>";
    }
    public function visitPanther(Panther $panther)
    {
        echo "Dressage de la panthère<br/>";
    }
    public function visitLion(Lion $lion)
    {
        echo "Dressage du lion<br/>";
    }
    public function visitOtto(Otto $otto)
    {
        echo "Dressage d'Otto: avec des poissons !<br/>";
    }
    public function visitWalrus(Walrus $walrus)
    {
        echo "Dressage du morse.<br/>";
    }
    public function visitSolid(Solid $solid)
    {
        echo "Le dressage de Solid fonctionne avec les cacahuètes...<br/>";
    }
    public function visitHippo(Hippo $hippo)
    {
        echo "Dressage de l'hippopotame.<br/>";
    }
}