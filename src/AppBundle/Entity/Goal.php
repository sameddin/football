<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity
 * @Table(name="goal")
 */
class Goal
{
    /**
     * @Column(type="bigint")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     *
     * @var int
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="Player", inversedBy="goals")
     *
     * @var Player
     */
    private $player;

    /**
     * @ManyToOne(targetEntity="Match", inversedBy="goals")
     *
     * @var Match
     */
    private $match;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Goal
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Player
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param Player $player
     * @return Goal
     */
    public function setPlayer(Player $player)
    {
        $this->player = $player;
    }

    /**
     * @return Match
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * @param Match $match
     * @return Goal
     */
    public function setMatch(Match $match)
    {
        $this->match = $match;
    }
}
