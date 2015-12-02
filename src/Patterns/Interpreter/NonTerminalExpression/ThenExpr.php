<?php
// src/Patterns/Interpreter/\NonTerminalExpression/ThenExpr.php
namespace Solid\Patterns\Interpreter\NonTerminalExpression;

use Solid\Patterns\Interpreter\AbstractExpression;
use Solid\Patterns\Interpreter\Context;

class ThenExpr implements AbstractExpression
{
    private $expressions;

    public function __construct(array $expressions)
    {
        $this->expressions = $expressions;
    }

    public function interpret(Context $context)
    {
        $expr = '';
        foreach ($this->expressions as $key => $expression) {
            $expr .= $expression->interpret($context);
            if ($key != count($this->expressions) - 1) {
                $expr .= "<br/>Then<br/>";
            }
        }
        return $expr;
    }
}