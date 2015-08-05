<?php
namespace Solid\Patterns\State\States;

use Solid\Patterns\State\AbstractState;

class OpenedCurtain extends AbstractState
{
    public function switchingLightOn()
    {
        return new LightsOn();
    }
}