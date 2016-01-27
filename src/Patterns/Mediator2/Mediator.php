<?php
namespace Solid\Patterns\Mediator2;

abstract class Mediator
{
    protected $colleagues = array();

    public function addColleague(Colleague $colleague)
    {
        $this->colleagues[] = $colleague;
    }

    abstract public function respondTo(Colleague $colleague);
}
