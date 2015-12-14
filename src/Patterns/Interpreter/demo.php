<?php
namespace Solid\Patterns\Interpreter;

use Solid\Patterns\Interpreter\TerminalExpression\CircusAct;
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
                    new CircusAct('Solid'),
                    new CircusAct('Torp'),
                ]
            ),
            new AndExpr(
                [
                    new CircusAct('Pearl'),
                    new CircusAct('Zeita'),
                ]
            )
        ]
    );

echo $expression->interpret($context);
