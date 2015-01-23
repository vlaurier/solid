<?php
namespace Solid\Patterns\Command;


class Invoker
{

    private $command;// L'invocateur (Solid dans l'exemple) est porteur de la commande.

    /**
     * On peut donner à l'invocateur n'importe quelle commande !
     * D'où l'utilisation de l'interface.
     *
     * @param CommandInterface $command
     */
    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    /**
     * L'invocateur, en effectuant une certaine action déclenche l'execution de la commande.
     */
    public function slideThePaperUnderTheDoor()
    {
        $this->command->execute();
    }

    /**
     * @param Command $command
     * @return $this
     */
    public function setCommand(Command $command)
    {
        $this->command = $command;

        return $this;
    }
}
