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
        return implode(
            '<br/>THEN<br/>',
            array_map(
                function ($expression) use ($context) {
                    return $expression->interpret($context);
                },
                $this->expressions
            )
        );

    }
}