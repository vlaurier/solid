<?php
namespace Solid\Patterns\Command\Commands;

use Solid\Patterns\Command\Command;
use Solid\Patterns\Command\Receivers\Zeita;

    class PutTheSkittlesAndUnicycleAway implements Command
    {
        private $receiver;

        public function __construct(Zeita $receiver)
        {
            $this->receiver = $receiver;
        }

        public function execute()
        {
            $this->receiver->pickTheSkittlesAndUnicycleUp();
        }
    }
