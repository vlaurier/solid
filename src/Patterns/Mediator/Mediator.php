<?php
namespace Solid\Patterns\Mediator;

abstract class Mediator
{
    protected $colleagues = array();

    public function addColleague(Colleague $colleague)
    {
        $this->colleagues[$colleague->__toString()] = $colleague;
    }
    abstract public function respondTo(Colleague $colleague):bool;

    protected function lookFor($name)
    {
        if (!array_key_exists($name, $this->colleagues)) {
            return false;
        }

        return $this->colleagues[$name];
    }
}
