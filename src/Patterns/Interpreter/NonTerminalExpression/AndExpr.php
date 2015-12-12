<?php
// src/Patterns/Interpreter/NonTerminalExpression/AndExpr.php
namespace Solid\Patterns\Interpreter\NonTerminalExpression;

use Solid\Patterns\Interpreter\AbstractExpression;
use Solid\Patterns\Interpreter\Context;

class AndExpr implements AbstractExpression
{
    private $makeAPerformanceExpressions;

    public function __construct(array $makeAPerformanceExpressions)
    {
        $this->makeAPerformanceExpressions = $makeAPerformanceExpressions;
    }

    public function interpret(Context $context)
    {
        return implode(
            ' AND ',
            array_map(
                function ($makeAPerformanceExpression) use ($context) {
                    return $makeAPerformanceExpression->interpret($context);
                },
                $this->makeAPerformanceExpressions
            )
        );
    }
}