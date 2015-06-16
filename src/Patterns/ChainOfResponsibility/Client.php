<?php
namespace Solid\Patterns\ChainOfResponsibility;

class Client
{
    private $defaultHandler;

    public function __construct(Handler $defaultHandler)
    {
        $this->defaultHandler = $defaultHandler;
    }

    public function handleRequest(Handler $handler, $request)
    {
        if ($handler->handle($request)) {
            return true;
        }
        return $this->defaultHandler->handle($request);
    }
}
