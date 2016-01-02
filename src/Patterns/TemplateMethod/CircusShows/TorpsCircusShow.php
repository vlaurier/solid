<?php
// src/Patterns/TemplateMethod/CircusShows/TorpsCircusShow.php
namespace Solid\Patterns\TemplateMethod\CircusShows;

use Solid\Patterns\TemplateMethod\CircusShow;

class TorpsCircusShow extends CircusShow
{
    protected function beforeShow()
    {
        echo "Les projecteurs s'orientent vers le rideau qui va s'ouvrir...<br/>";
    }

    protected function doAcrobatics()
    {
        echo "Puis il s'élance pour bondir entre les cerceaux. Magnifique !<br/>";
    }

    protected function afterShow()
    {
        echo "Comme toujours, les confettis accompagnent sa sortie.<br/><hr/>";
    }
}
