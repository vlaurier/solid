<?php
// src/Patterns/Interpreter/Animal.php
namespace Solid\Patterns\Interpreter;

class MakeAPerformanceExpression implements AbstractExpression
{
    private $animal;

    public function __construct($animal)
    {
        $this->animal = $animal;
    }

    public function interpret(Context $context)
    {
        return $context->call($this->animal) ." make a performance with the ". $context->getNextItem();
    }
}
