<?php

namespace Solid\Patterns\Observer;

class Player implements \SplObserver
{
    private $name;

    private $number;

    public function __construct($name, $number)
    {
        $this->name = $name;
        $this->number = $number;
    }

    public function update(\SplSubject $subject)
    {
        if ($subject->getNumber() == $this->number) {
            echo "Le ". $subject->getNumber(). " est sorti, ".$this->name." a gagné !<br/>";
        } else {
            echo "Le ". $subject->getNumber(). " est sorti. Dommage, ".$this->name." devra retenter sa chance.<br/>";
        }
    }
}
