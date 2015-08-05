<?php
namespace Solid\Patterns\Memento\Lighting;

use Solid\Patterns\Memento\LightingState;

class LightsOff extends LightingState
{
    public function switchingLightOn()
    {
        return new LightsOn();
    }

    public function sweepCircusRing()
    {
        return new SweepCircusRing();
    }
}