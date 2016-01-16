<?php
namespace Solid\Patterns\Mediator\Mediators;

use Solid\Patterns\Mediator\Colleagues\Pearl;
use Solid\Patterns\Mediator\Colleagues\Solid;
use Solid\Patterns\Mediator\Colleagues\Torp;
use Solid\Patterns\Mediator\Mediator;

class Gepetto implements Mediator
{
    private $torp;
    private $pearl;
    private $solid;

    public function setColleagues(Torp $torp, Pearl $pearl, Solid $solid)
    {
        $this->torp = $torp;
        $this->pearl = $pearl;
        $this->solid = $solid;
    }

    public function canOpenPark()
    {
        if (!$this->torp->isReady()) {
            print "Torp, voyons, prépare-toi!<br/>";

            return false;
        }
        if (!$this->pearl->canIopenTicketCounter()) {

            return false;
        }

        print "C'est parti ! Ouverture du parc !";

        return true;
    }

    public function canOpenTicketCounter()
    {
        if (!$this->pearl->isReady())
        {
            print 'Allez Pearl, dépêche-toi de préparer la caisse !<br/>';

            return false;
        }
        if (!$this->canOpenCircusTent()) {

            return false;
        }

        print "La billeterie peut ouvrir.<br/>";

        return true;
    }

    public function canOpenCircusTent()
    {
        if (!$this->solid->isReady()) {
            print "Désolé, mais Solid n'est pas prêt pour son numéro.<br/>";

            return false;
        }
        print 'Le chapiteau peut ouvrir.<br/>';

        return true;
    }
}