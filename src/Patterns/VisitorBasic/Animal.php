<?php
namespace Solid\Patterns\Visitor;

interface Animal
{
    public function accept(Visitor $visitor);
}
