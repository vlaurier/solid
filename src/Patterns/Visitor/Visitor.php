<?php
namespace Solid\Patterns\Visitor;

abstract class Visitor
{
    abstract public function visit(Artist $artist);
}
