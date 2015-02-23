<?php
namespace Solid\Patterns\Command\Commands;

use Solid\Patterns\Command\Command;
use Solid\Patterns\Command\Receivers\Titou;

class PutTheTrapezesAway implements Command
{
    private $receiver;

    public function __construct(Titou $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->putTheTrapezesInPlace();
    }
}
