<?php
// src/Patterns/Interpreter/NonTerminalExpression/AndExpr.php
namespace Solid\Patterns\Interpreter\NonTerminalExpression;

use Solid\Patterns\Interpreter\AbstractExpression;
use Solid\Patterns\Interpreter\Context;
use Solid\Patterns\Interpreter\TerminalExpression\CircusAct;

class AndExpr implements AbstractExpression
{
    private $circusActs;

    public function __construct(array $circusActs)
    {
        foreach ($circusActs as $circusAct) {
            if (!$circusAct instanceof CircusAct) {
                throw new \Exception('It should be a CircusAct');
            }
        }
        $this->circusActs = $circusActs;
    }

    public function interpret(Context $context)
    {
        return implode(
            ' AND ',
            array_map(
                function ($circusAct) use ($context) {
                    return $circusAct->interpret($context);
                },
                $this->circusActs
            )
        );
    }
}