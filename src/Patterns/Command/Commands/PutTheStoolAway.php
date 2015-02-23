<?php
namespace Solid\Patterns\Command\Commands;

use Solid\Patterns\Command\Command;
use Solid\Patterns\Command\Receivers\Ringo;

class PutTheStoolAway implements Command
{
    private $receiver;

    public function __construct(Ringo $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->pickTheStoolUp();
    }
}
