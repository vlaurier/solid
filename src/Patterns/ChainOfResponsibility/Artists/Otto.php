<?php
namespace Solid\Patterns\ChainOfResponsibility\Artists;

use Solid\Patterns\ChainOfResponsibility\Handler;

class Otto extends Handler
{
    public function actYourPerformance($request)
    {
        if ($request == "ballon") {
            echo "Otto est très douée avec le ballon";

            return true;
        }

        return false;
    }
}