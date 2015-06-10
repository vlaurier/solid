<?php
namespace Solid\Patterns\ChainOfResponsibility\Artists;

use Solid\Patterns\ChainOfResponsibility\Handler;

class Solid extends Handler
{
    public function actYourPerformance($request)
    {
        if ($request == "tabouret") {
            echo "Solid fait son numéro sur le tabouret";

            return true;
        }

        return false;
    }
}