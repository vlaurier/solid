<?php
namespace Solid\Patterns\Mediator2;

interface Mediator
{
    public function respondTo(Colleague $colleague):bool;
}
