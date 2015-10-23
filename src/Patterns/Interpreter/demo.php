<?php
namespace Solid\Patterns\Interpreter;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$context = new Context('a', 'b', 'c');

$expression =
    new ThenExpression(
        array(
            new AndExpression(
                array(
                    new Animal('Solid', 'stool'),
                    new Animal ('Torp', 'hoop')
                )
            ),
            new AndExpression(
                array(
                    new Animal('Otto', 'ballon'),
                    new Animal ('Zeita', 'skittles')
                )
            )
        )
    );

$expression->interpret($context);