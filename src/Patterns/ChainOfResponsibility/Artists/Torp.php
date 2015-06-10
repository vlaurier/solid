<?php
namespace Solid\Patterns\ChainOfResponsibility\Artists;

use Solid\Patterns\ChainOfResponsibility\Handler;

class Torp extends Handler
{
    public function actYourPerformance($request)
    {
        if ($request == "cerceau") {
            echo "Torp saute à travers le cerceau";

            return true;
        }

        return false;
    }
}