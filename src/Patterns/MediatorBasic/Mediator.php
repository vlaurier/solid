<?php
namespace Solid\Patterns\MediatorBasic;

interface Mediator
{
    public function respondTo(Colleague $colleague):bool;
}
