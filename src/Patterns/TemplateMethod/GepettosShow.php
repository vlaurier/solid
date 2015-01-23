<?php

namespace Solid\Patterns\TemplateMethod;

abstract class GepettosShow
{
    // Faire un spectacle
    final public function giveAPerformance()
    {
        $this->makeYourEntry();// Faire son entrée. 
        $this->greetTheSpectators();// Saluer le public (to go around the stage: faire un tour de piste)
        $this->actYourPerformance(); // Faire son numéro
        $this->bow();
    }
    
    final public function makeYourEntry()
    {
        echo "Entrer et deposer son matos";
    }
    
    public function greetTheSpectators()
    {
        echo "Faire le tour de piste";
    }   
    
    abstract public function actYourPerformance();
            
    public function bow()
    {
        echo "Faire une révérence";
    }
}

