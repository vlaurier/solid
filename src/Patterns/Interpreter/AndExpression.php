<?php
// src/Patterns/Interpreter/Animal.php
namespace Solid\Patterns\Interpreter;

class AndExpression implements AbstractExpression
{
    private $animals;

    public function __construct(array $animals)
    {
        $this->animals = $animals;
    }

    public function interpret(Context $context)
    {
        return implode(
            ' AND ',
            array_map(
                function ($animal) use ($context) {
                    return $animal->interpret($context);
                },
                $this->animals
            )
        );
//        foreach ($this->animals as $key => $animal) {
//            $animal->interpret($context);
//            if ($key != count($this->animals) - 1) {
//                echo " AND ";
//            }
//        }
    }
}