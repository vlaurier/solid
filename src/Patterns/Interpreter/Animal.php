<?php
// src/Patterns/Interpreter/Animal.php
namespace Solid\Patterns\Interpreter;

class Animal implements AbstractExpression
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function interpret(Context $context)
    {
        return $this->name ." make a performance with the ". $context->getNextItem();
    }
}
