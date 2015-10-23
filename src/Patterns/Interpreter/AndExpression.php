<?php
// src/Patterns/Interpreter/Animal.php
namespace Solid\Patterns\Interpreter;

class AndExpression implements AbstractExpression
{
    private $expressions;

    public function __construct(array $expressions)
    {
        $this->expressions = $expressions;
    }

    public function interpret(Context $context)
    {
        foreach ($this->expressions as $key => $expression) {
            $expression->interpret($context);
            if ($key != count($this->expressions) - 1) {
                echo "<br/>and<br/>";
            }
        }
    }
}