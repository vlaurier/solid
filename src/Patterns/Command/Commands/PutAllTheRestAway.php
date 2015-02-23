<?php
namespace Solid\Patterns\Command\Commands;

use Solid\Patterns\Command\Command;

class PutAllTheRestAway implements Command
{
    private $commands;

    public function __construct(array $commands)
    {
        foreach ($commands as $command) {
            if (!$command instanceof Command) {
                throw new \Exception('All elements of $commands array should be instance of Command');
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
