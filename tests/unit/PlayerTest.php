<?php
namespace Football;

use AppBundle\Entity\Player;
use DateTime;
use PHPUnit_Framework_TestCase;

class PlayerTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     * @dataProvider birthDateToAge
     */
    public function calculateAge($birthDate, $age)
    {
        $player = new Player();
        $player->setBirth(new DateTime($birthDate));
        $currentDate = new DateTime("2015-10-15");

        $this->assertEquals($age, $player->getAge($currentDate));
    }

    public function birthDateToAge() {
        return [
            ['1987-05-31', 28],
            ['1994-01-27', 21],
            ['1962-05-31', 53],
            ['1960-10-08', 55],
        ];
    }
}
