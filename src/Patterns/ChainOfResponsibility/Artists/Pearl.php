<?php
namespace Solid\Patterns\ChainOfResponsibility\Artists;

use Solid\Patterns\ChainOfResponsibility\Handler;

class Pearl extends Handler
{
    public function actYourPerformance($request)
    {
        if ($request == "ballon") {
            echo "Pearl est très douée avec le ballon";

            return true;
        }

        return false;
    }
}