<?php
namespace Solid\Patterns\Visitor;

abstract class Animal
{
    public function accept(Visitor $visitor)
    {
        $method = 'visit'.$this->getShortClassName();
        $visitor->{$method}($this);
    }

    abstract public function getShortClassName();
}
