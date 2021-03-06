<?php
// src/Patterns/Command/Commands/PutTheBallsAway.php
namespace Solid\Patterns\Command\Commands;

use Solid\Patterns\Command\Command;
use Solid\Patterns\Command\Receivers\Pearl;

class PutTheBallsAway implements Command
{
    private $receiver;

    public function __construct(Pearl $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->comeOutOfTheDressingRoom();
        $this->receiver->pickTheBallsUp();
        $this->receiver->putThemAway();
    }
}
