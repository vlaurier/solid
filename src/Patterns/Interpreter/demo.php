<?php
namespace Solid\Patterns\Interpreter;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$context = new Context('stool', 'hoop', 'ballon', 'skittles');

$expression =
    new ThenExpression(
        [
            new AndExpression(
                [
                    new Animal('Solid'),
                    new Animal('Torp'),
                ]
            ),
            new AndExpression(
                [
                    new Animal('Otto'),
                    new Animal('Zeita'),
                ]
            )
        ]
    );

echo $expression->interpret($context);
