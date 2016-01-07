<?php
namespace Solid\Patterns\Visitor;

use Solid\Patterns\Visitor\Animals\Torp;
use Solid\Patterns\Visitor\Animals\Pearl;
use Solid\Patterns\Visitor\Animals\Solid;

interface Visitor
{
    public function visitPearl(Pearl $pearl);
    public function visitTorp(Torp $torp);
    public function visitSolid(Solid $solid);
}
