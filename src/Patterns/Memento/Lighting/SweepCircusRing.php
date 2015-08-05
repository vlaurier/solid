<?php
namespace Solid\Patterns\Memento\Lighting;

use Solid\Patterns\Memento\LightingState;

class SweepCircusRing extends LightingState
{
    public function lightOnCurtain()
    {
        return new LightOnCurtain();
    }
}