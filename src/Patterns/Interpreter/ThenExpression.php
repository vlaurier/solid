<?php
// src/Patterns/Interpreter/Animal.php
namespace Solid\Patterns\Interpreter;

class ThenExpression implements AbstractExpression
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