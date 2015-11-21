<?php
namespace Solid\Patterns\Interpreter;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$context = new Context(['Solid', 'Torp', 'Pearl', 'Zeita'],['stool', 'hoop', 'ballon', 'skittles']);

$expression =
    new ThenExpression(
        [
            new AndExpression(
                [
                    new MakeAPerformanceExpression('Solid'),
                    new MakeAPerformanceExpression('Torp'),
                ]
            ),
            new AndExpression(
                [
                    new MakeAPerformanceExpression('Pearl'),
                    new MakeAPerformanceExpression('Zeita'),
                ]
            )
        ]
    );

echo $expression->interpret($context);
