<?php
namespace Solid\Patterns\Visitor\Visitors;

use Solid\Patterns\Visitor\Visitor;
use Solid\Patterns\Visitor\Animals\Pearl;
use Solid\Patterns\Visitor\Animals\Torp;
use Solid\Patterns\Visitor\Animals\Solid;

class Veterinarian implements Visitor
{
    public function visitPearl(Pearl $pearl)
    {
        echo "Chez Pearl, les nageoires et la dentition sont à surveiller<br/>";
    }
    public function visitTorp(Torp $torp)
    {
        echo "Griffes, cros et pelage sont les centres d'attention pour Torp<br/>";
    }
    public function visitSolid(Solid $solid)
    {
        echo "Pour Solid il faut vérifier les défenses<br/>";
    }
}