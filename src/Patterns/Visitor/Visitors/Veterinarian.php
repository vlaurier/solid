<?php
namespace Solid\Patterns\Visitor\Visitors;

use Solid\Patterns\Visitor\Visitor;
use Solid\Patterns\Visitor\Animals\Titou;
use Solid\Patterns\Visitor\Animals\Ringo;
use Solid\Patterns\Visitor\Animals\Zeita;
use Solid\Patterns\Visitor\Animals\Torp;
use Solid\Patterns\Visitor\Animals\Panther;
use Solid\Patterns\Visitor\Animals\Lion;
use Solid\Patterns\Visitor\Animals\Pearl;
use Solid\Patterns\Visitor\Animals\Walrus;
use Solid\Patterns\Visitor\Animals\Solid;
use Solid\Patterns\Visitor\Animals\Hippo;

class Veterinarian implements Visitor
{
    public function visitTitou(Titou $titou)
    {
        echo "Inspection de l'état de santé de Titou.<br/>";
    }
    public function visitRingo(Ringo $ringo)
    {
        echo "Inspection de l'état de santé de Ringo.<br/>";
    }
    public function visitZeita(Zeita $zeita)
    {
        echo "Inspection de l'état de santé de Zeita.<br/>";
    }
    public function visitTorp(Torp $torp)
    {
        echo "Griffes, cros et pelage sont les centres d'attention pour Torp<br/>";
    }
    public function visitPanther(Panther $panther)
    {
        echo "Inspection de l'état de santé de la panthère.<br/>";
    }
    public function visitLion(Lion $lion)
    {
        echo "Inspection de l'état de santé du lion.<br/>";
    }
    public function visitPearl(Pearl $pearl)
    {
        echo "Chez Pearl, les nageoires et la dentition sont à surveiller<br/>";
    }
    public function visitWalrus(Walrus $walrus)
    {
        echo "Chez le morse, les défenses sont importantes.<br/>";
    }
    public function visitSolid(Solid $solid)
    {
        echo "Pour Solid il faut vérifier les défenses<br/>";
    }
    public function visitHippo(Hippo $hippo)
    {
        echo "Il faut surveiller la peau fragile de l'hippopotame.<br/>";
    }
}