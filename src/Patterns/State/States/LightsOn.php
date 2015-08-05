<?php
namespace Solid\Patterns\State\States;

use Solid\Patterns\State\AbstractState;

class LightsOn extends AbstractState
{
    public function switchingLightOff()
    {
        return new LightsOff();
    }
}