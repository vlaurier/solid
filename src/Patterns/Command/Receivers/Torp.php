<?php
namespace Solid\Patterns\Command\Receivers;


class Torp
{
    public function comeOutOfTheDressingRoom()
    {
        echo "Torp sort de la loge pas très heureux que ce soit son tour."."</br>";
    }

    public function pickTheHoopsUp()
    {
        echo "Il ramasse les cerceaux et le reste de son matériel"."</br>";
    }

    public function putThemAway()
    {
        echo "Puis range le tout"."</br>";
    }
}
