<?php
namespace Solid\Patterns\Visitor;

use Solid\Patterns\Visitor\Animals\Torp;
use Solid\Patterns\Visitor\Animals\Otto;
use Solid\Patterns\Visitor\Animals\Solid;

interface Visitor
{
    public function visitOtto(Otto $otto);
    public function visitTorp(Torp $torp);
    public function visitSolid(Solid $solid);
}
