<?php
namespace Solid\Patterns\MediatorBasic\Mediators;

use Solid\Patterns\MediatorBasic\Mediator;
use Solid\Patterns\MediatorBasic\Colleague;
use Solid\Patterns\MediatorBasic\Colleagues\{Torp, Pearl, Solid};

class Gepetto implements Mediator
{
    public function respondTo(Colleague $sender):bool
    {
        if (!$sender->isReady()) {
            echo "Gepetto (à ".$sender."): Prépare toi d'abord s'il te plaît !";
            return false;
        }
        if ($sender instanceof Torp) {
            echo 'Gepetto (à Torp): Je vérifie à la billetterie.<br/>';
            echo '<em>Gepetto contacte Pearl</em><br/>';
            return $this->checkTicketCounter();
        }
        if ($sender instanceof Pearl) {
            echo 'Gepetto (à Pearl): Je vérifie du côté du chapiteau.<br/>';
            echo '<em>Gepetto contacte Solid</em><br/>';
            return $this->checkCircusTent();
        }
        if ($sender instanceof Solid) {
            echo "Gepetto (à Solid): Tu es prêt, donc le chapiteau aussi !<br/>";
            return true;
        }

        throw new \Exception("Situation non gérée par Gepetto");
    }

    private function checkTicketCounter()
    {
        if (!$pearl  = $this->lookFor('Pearl')) {
            print "Pearl n'est pas joignable!<br/>";
            return false;
        }
        $response = $pearl->canIOpen();
        ($response)
            ? print "Torp, la billetterie est prête. Ouvre le parc !<br/>"
            : print "Torp attend ! La billeterie n'est pas prête !<br/>";
        return $response;
    }

    private function checkCircusTent()
    {
        if (!$solid  = $this->lookFor('Solid')) {
            print "Solid n'est pas joignable!<br/>";
            return false;
        }
        $response = (new Solid($this))->canIOpen();
        ($response)
            ? print "Pearl, le chapiteau est prêt. Ouvre la billetterie !<br/>"
            : print "Pearl attend ! Le chapiteau n'est pas prêt !<br/>";
        return $response;
    }
}