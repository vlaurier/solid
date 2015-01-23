<?php
namespace Solid\Patterns\Command\Commands;

use Solid\Patterns\Command\Command;
use Solid\Patterns\Command\Receivers\Otto;

    class PutTheBallsAway implements Command
    {
        private $receiver;

        public function __construct(Otto $receiver)
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
