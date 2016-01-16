<?php
namespace Solid\Patterns\Mediator;

interface Mediator
{
    public function canOpenPark();
    public function canOpenTicketCounter();
    public function canOpenCircusTent();
}