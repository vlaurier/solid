<?php
// src/Patterns/TemplateMethod/CircusShows/OttosCircusShow.php
namespace Solid\Patterns\TemplateMethod\CircusShows;

use Solid\Patterns\TemplateMethod\CircusShow;

class OttosCircusShow extends CircusShow
{
    protected function beforeShow()
    {
        echo "Musique ! Lumières ! Le prochain artiste va apparaître...<br/>";
    }

    protected function greetTheSpectators()
    {
        echo "Elle salue les spectateurs par un tour de piste en envoyant des baisers.<br/>";
    }

    protected function doAcrobatics()
    {
        echo "Puis elle réalise son numéro avec les ballons, toujours aussi exceptionnel.<br/>";
    }

    protected function afterShow()
    {
        echo "Les confettis accompagnent la sortie de l'otarie.<br/><hr/>";
    }
}
