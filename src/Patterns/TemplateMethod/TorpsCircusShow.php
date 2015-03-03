<?php
namespace Solid\Patterns\TemplateMethod;

class TorpsCircusShow extends GepettosCircusShow
{
    protected function beforeShow()
    {
        echo "Les projecteurs s'orientent vers le rideau qui va s'ouvrir...<br/>";
    }

    protected function actYourPerformance()
    {
        echo "Puis il s'élance pour bondir entre les cerceaux. Magnifique !<br/>";
    }

    protected function afterShow()
    {
        echo "Comme toujours, les confettis accompagnent sa sortie.<br/><hr/>";
    }
}

