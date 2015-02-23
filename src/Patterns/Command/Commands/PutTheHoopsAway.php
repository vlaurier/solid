<?php
namespace Solid\Patterns\Command\Commands;

use Solid\Patterns\Command\Command;
use Solid\Patterns\Command\Receivers\Torp;

class PutTheHoopsAway implements Command
{
    private $receiver;

    public function __construct(Torp $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->comeOutOfTheDressingRoom();
        $this->receiver->pickTheHoopsUp();
        $this->receiver->putThemAway();
    }
}
