<?php
namespace Solid\Patterns\Mediator\Mediators;

use Solid\Patterns\Mediator\Mediator;
use Solid\Patterns\Mediator\Colleague;
use Solid\Patterns\Mediator\Colleagues\{Torp, Pearl, Solid};

class Gepetto implements Mediator
{
    public function respondTo(Colleague $sender):bool
    {
        if (!$sender->isReady()) {
            echo 'Gepetto (à '.$sender.'): Non, tu ne peux pas ouvrir. Prépare toi !';
            return false;
        }
        if ($sender instanceof Torp) {
            echo 'Gepetto (à '.$sender.'): Patiente, je vérifie que tout est bon à la billetterie.<br/>';
            echo '<em>Gepetto contacte Pearl</em><br/>';
            return $this->checkTicketCounter();
        }
        if ($sender instanceof Pearl) {
            echo 'Gepetto (à Pearl): Patiente, je vérifie que tout est prêt au chapiteau.<br/>';
            echo '<em>Gepetto contacte Solid</em><br/>';
            return $this->checkCircusTent();
        }
        if ($sender instanceof Solid) {
            echo "Gepetto (à Solid): C'est parfait tu es prêt, on va pouvoir ouvrir le chapiteau.<br/>";
            return true;
        }

        throw new \Exception("Gepetto n'est pas en mesure de gérer cette situation");
    }

    private function checkTicketCounter()
    {
        $response = (new Pearl($this))->canIOpen();
        ($response)
            ? print "Torp, La billetterie est prête, tu peux ouvrir le parc.<br/>"
            : print "La billeterie n'est pas prête, attend mon feu vert Torp !<br/>";
        return $response;
    }

    private function checkCircusTent()
    {
        $response = (new Solid($this))->canIOpen();
        ($response)
            ? print "Pearl, le chapiteau est prêt, tu peux ouvrir la billetterie<br/>"
            : print "La chapiteau n'est pas prêt, attend mon feu vert Pearl !<br/>";
        return $response;
    }
}