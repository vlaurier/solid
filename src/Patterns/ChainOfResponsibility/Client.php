<?php
namespace Solid\Patterns\ChainOfResponsibility;

class Client
{
    /**
     * Demande à un gestionaire de gérer une requête.
     *
     * @param Handler $handler
     * @param $request
     * @return bool
     */
    public function handleRequest(Handler $handler, $request)
    {
        return $handler->handle($request);
    }
}
