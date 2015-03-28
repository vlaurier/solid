<?php

namespace Solid\Patterns\Observer;

class Solid implements \SplObserver
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function update(\SplSubject $subject)
    {
        if ($subject->getNumber() == $this->number) {
            echo "Le ". $subject->getNumber(). " est sorti, Solid a gagné !";
        } else {
            echo "Le ". $subject->getNumber(). " est sorti. Dommage, Solid devra retenter sa chance";
        }
    }
}
