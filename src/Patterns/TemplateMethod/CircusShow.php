<?php
// src/Patterns/TemplateMethod/CircusShow.php
namespace Solid\Patterns\TemplateMethod;

abstract class CircusShow
{
    final public function giveAPerformance()
    {
        if ($this->isDday()) {
            $this->beforeShow();
        }
        $this->makeYourEntry(); // placeTheArticle (déposer le matériel)
        $this->greetTheSpectators(); // TakeARoundOfTheStage (faire un tour de piste)
        $this->actYourPerformance();
        $this->bow();
        if ($this->isDday()) {
            $this->afterShow();
        } else {
            echo "La sortie se fait sous les applaudissements des autres animaux.<br/><hr/>";
        }
    }

    protected function beforeShow()
    {

    }

    final private function makeYourEntry()
    {
        echo $this->getCharacterName() . " entre et dépose son matériel.<br/>";
    }

    protected function greetTheSpectators()
    {
        echo $this->getCharacterName() . " fait le tour de piste en saluant de la main le public.<br/>";
    }
    
    abstract protected function actYourPerformance();
            
    final private function bow()
    {
        echo "Le spectacle se termine par une belle révérence dans les règles de l'art.<br/>";
    }

    protected function afterShow()
    {

    }

    /*------------- Some useful methods ---------------*/

    public function getCharacterName()
    {
        $shortClassNameWithAntiSlash = strrchr(get_class($this), "\\");
        return substr($shortClassNameWithAntiSlash, 1, strlen($shortClassNameWithAntiSlash) - 12);
    }

    public function isDday()
    {
        return date('N') == 6;
    }
}
