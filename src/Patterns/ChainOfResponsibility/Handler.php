<?php

namespace Solid\Patterns\ChainOfResponsibility;


abstract class Handler
{
    private $successor;

    final public function handle($request)
    {
        if ($this->actYourPerformance($request)) {
            return true;
        }
        if ($this->successor instanceof self) {
            return $this->successor->handle($request);
        }

        return false;
    }

    /**
     * Retourne vrai si le numéro peut être réalisé, faux sinon.
     *
     * @param $request
     * @return boolean
     */
    abstract protected function actYourPerformance($request);

    public function setNext(self $handler)
    {
        $this->successor = $handler;
    }
}