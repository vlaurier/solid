<?php
namespace Solid\Patterns\Mediator;

interface Mediator
{
    public function respondTo(Colleague $colleague):bool;
}
