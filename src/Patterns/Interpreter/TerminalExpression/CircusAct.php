<?php
// src/Patterns/Interpreter/TerminalExpression/circusAct.php
namespace Solid\Patterns\Interpreter\TerminalExpression;

use Solid\Patterns\Interpreter\AbstractExpression;
use Solid\Patterns\Interpreter\Context;

class CircusAct implements AbstractExpression
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
