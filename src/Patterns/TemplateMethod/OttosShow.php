<?php
namespace Solid\Patterns\TemplateMethod;

use Solid\Patterns\TemplateMethod\GepettosShow;

class OttosShow extends GepettosShow
{
    public function greetTheSpectators()
    {
        echo "Otto Faire le tour de piste";
    }   
    
    public function actYourPerformance()
    {
        echo "Otto fait le spectacle";
    }
            
    public function bow()
    {
        echo "Faire une révérence";
    }
}

