<?php
namespace Solid\Patterns\State\States;

use Solid\Patterns\State\AbstractState;

class LightsOff extends AbstractState
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