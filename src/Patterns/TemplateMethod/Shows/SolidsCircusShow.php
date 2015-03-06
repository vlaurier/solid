<?php
// src/Patterns/TemplateMethod/Shows/SolidsCircusShow.php
namespace Solid\Patterns\TemplateMethod\Shows;

use Solid\Patterns\TemplateMethod\CircusShow;

class SolidsCircusShow extends CircusShow
{
    protected function beforeShow()
    {
        echo "Les spectacteurs attendent impatiemment le dernier numéro.<br/>";
    }

    protected function greetTheSpectators()
    {
        echo "Il ne peut s'empêcher de faire un peu le pitre en saluant les spectacteurs.<br/>";
    }

    protected function actYourPerformance()
    {
        echo "Le clou du spectacle: le numéro du tabouret !<br/>";
    }

    protected function afterShow()
    {
        echo "Solid est toujours le dernier. C'est la star du cirque. Il disparaît sous la fanfare.<br/><hr/>";
    }
}
