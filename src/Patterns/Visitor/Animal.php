<?php
namespace Solid\Patterns\Visitor;

abstract class Animal implements Artist
{
    public function accept(Visitor $visitor)
    {
        $method = 'visit'.$this->getName();
        $visitor->{$method}($this);
    }
}
