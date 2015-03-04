<?php
// src/Patterns/TemplateMethod/Shows/OttosCircusShow.php
namespace Solid\Patterns\TemplateMethod\Shows;

use Solid\Patterns\TemplateMethod\GepettosCircusShow;

class OttosCircusShow extends GepettosCircusShow
{
    protected function beforeShow()
    {
        echo "Musique ! Lumières ! Le prochain artiste va apparaître...<br/>";
    }

    protected function greetTheSpectators()
    {
        echo "Elle salue les spectateurs par un tour de piste en envoyant des baisers.<br/>";
    }

    protected function actYourPerformance()
    {
        echo "Puis elle réalise son numéro avec les ballons, toujours aussi exceptionnel.<br/>";
    }

    protected function afterShow()
    {
        echo "Les confettis accompagnent la sortie de l'otarie.<br/><hr/>";
    }
}
