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
 * @Table(name="red_card")
 */
class RedCard
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
     * @ManyToOne(targetEntity="Player", inversedBy="redCards")
     *
     * @var Player
     */
    private $player;

    /**
     * @ManyToOne(targetEntity="Match", inversedBy="redCards")
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
     * @return RedCard
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
     * @return RedCard
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
     * @return RedCard
     */
    public function setMatch(Match $match)
    {
        $this->match = $match;
    }
}
