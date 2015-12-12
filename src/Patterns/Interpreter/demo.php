<?php
namespace Solid\Patterns\Interpreter;

use Solid\Patterns\Interpreter\TerminalExpression\MakeAPerformance;
use Solid\Patterns\Interpreter\NonTerminalExpression\AndExpr;
use Solid\Patterns\Interpreter\NonTerminalExpression\ThenExpr;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$context = new Context(['Solid', 'Torp', 'Pearl', 'Zeita'],['stool', 'hoop', 'ballon']);

$expression =
    new ThenExpr(
        [
            new AndExpr(
                [
                    new MakeAPerformance('Solid'),
                    new MakeAPerformance('Torp'),
                ]
            ),
            new AndExpr(
                [
                    new MakeAPerformance('Pearl'),
                    new MakeAPerformance('Zeita'),
                ]
            )
        ]
    );

echo $expression->interpret($context);
