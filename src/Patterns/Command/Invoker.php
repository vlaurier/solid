<?php
// src/Patterns/Command/Invoker.php
namespace Solid\Patterns\Command;

class Invoker
{
    private $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function slideThePaperUnderTheDoor()
    {
        $this->command->execute();
    }

    public function setCommand(Command $command)
    {
        $this->command = $command;

        return $this;
    }
}
