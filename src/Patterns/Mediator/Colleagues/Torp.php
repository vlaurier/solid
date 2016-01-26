<?php
namespace Solid\Patterns\Mediator\Colleagues;

use Solid\Patterns\Mediator\Colleague;

class Torp extends Colleague
{
    public function canIopenThePark():bool
    {
        return $this->mediator->openPark();
    }
}