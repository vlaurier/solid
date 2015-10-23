<?php
// src/Patterns/Interpreter/Animal.php
namespace Solid\Patterns\Interpreter;

interface AbstractExpression
{
    public function interpret(Context $context);
}