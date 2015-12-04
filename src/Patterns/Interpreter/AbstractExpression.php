<?php
// src/Patterns/Interpreter/AbstractExpression.php
namespace Solid\Patterns\Interpreter;

interface AbstractExpression
{
    public function interpret(Context $context);
}