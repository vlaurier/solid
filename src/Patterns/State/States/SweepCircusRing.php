<?php
namespace Solid\Patterns\State\States;

use Solid\Patterns\State\AbstractState;

class SweepCircusRing extends AbstractState
{
    public function openCurtain()
    {
        return new OpenedCurtain();
    }
}