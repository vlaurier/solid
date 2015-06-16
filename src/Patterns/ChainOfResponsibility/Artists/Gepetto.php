<?php
namespace Solid\Patterns\ChainOfResponsibility\Artists;

use Solid\Patterns\ChainOfResponsibility\Handler;

class Gepetto extends Handler
{
    public function actYourPerformance($request)
    {
        echo $request. "? Gepetto gére la situation !";

        return true;
    }
}
