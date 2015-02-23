<?php
namespace Solid\Patterns\Command\Receivers;

class Torp
{
    public function comeOutOfTheDressingRoom()
    {
        echo "Torp comes out of the dressing room unhappy because it's his turn."."<br/>";
    }

    public function pickTheHoopsUp()
    {
        echo "He picks up the hoops and the rest of his stuff."."<br/>";
    }

    public function putThemAway()
    {
        echo "Then he puts them all away."."<br/><hr/>";
    }
}
