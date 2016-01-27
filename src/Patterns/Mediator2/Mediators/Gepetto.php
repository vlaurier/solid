<?php
namespace Solid\Patterns\Mediator2\Mediators;

use Solid\Patterns\Mediator2\Mediator;
use Solid\Patterns\Mediator2\Colleague;
use Solid\Patterns\Mediator2\Colleagues\Torp;
use Solid\Patterns\Mediator2\Colleagues\Pearl;
use Solid\Patterns\Mediator2\Colleagues\Solid;

class Gepetto extends Mediator
{
    public function respondTo(Colleague $sender):bool
    {
        if (!$sender->isReady()) {
            echo 'Gepetto (à '.$sender.'): Non, tu ne peux pas ouvrir. Prépare toi !';

            return false;
        }
        if ($sender instanceof Torp) {
            return $this->checkTicketCounter();
        }
        if ($sender instanceof Pearl) {
            return $this->checkCircusTent();
        }
        if ($sender instanceof Solid) {
            return true;
        }

        throw new \Exception("Gepetto n'est pas en mesure de gérer cette situation");
    }

    private function checkTicketCounter()
    {
        echo '<em>Gepetto essaie de joindre Pearl à la billetterie.</em><br/>';

        if ($pearl = $this->lookFor('Pearl')) {

            echo '<em>Pearl décroche</em><br/>';
            return $pearl->canIopen();
        }
        echo "<em>Pearl n'est pas joignable</em><br/>";

        return false;
    }

    private function checkCircusTent()
    {
        echo 'Gepetto: Je vais voir auprès de Solid sous le chapiteau.<br/>';

        if ($solid = $this->lookFor('Solid')) {
            return $solid->canIopen();
        }
        echo "Solid n'est pas joignable";

        return false;
    }

    private function lookFor($name)
    {
        $founded = array_filter(
            $this->colleagues,
            function($colleague) use ($name)
            {
                return $name == $colleague->__toString();
            }
        );

        if(empty($founded)) {
            return false;
        }

        return array_values($founded)[0];
    }
}