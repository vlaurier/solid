<?php
// src/Patterns/Command/Commands/PutAllTheRestAway.php
namespace Solid\Patterns\Command\Commands;

use Solid\Patterns\Command\Command;

class PutAllTheRestAway implements Command
{
    private $commands;

    public function __construct(array $commands)
    {
        foreach ($commands as $command) {
            if (!$command instanceof Command) {
                throw new \Exception('$commands should only contain commands');
            }
        }
        $this->commands = $commands;
    }

    public function execute()
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}
