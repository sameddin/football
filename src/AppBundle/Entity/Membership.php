<?php
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity
 * @Table(name="membership")
 */
class Membership
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
     * @ManyToOne(targetEntity="Player", inversedBy="memberships")
     *
     * @var Player
     */
    private $player;

    /**
     * @ManyToOne(targetEntity="Season", inversedBy="memberships")
     *
     * @var Season
     */
    private $season;

    /**
     * @ManyToOne(targetEntity="Team", inversedBy="memberships")
     *
     * @var Team
     */
    private $team;

    /**
     * @OneToMany(targetEntity="Transfer", mappedBy="membership")
     *
     * @var ArrayCollection
     */
    private $transfers;

    public function __construct()
    {
        $this->transfers = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Membership
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
     * @return Membership
     */
    public function setPlayer(Player $player)
    {
        $this->player = $player;
    }

    /**
     * @return Season
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param Season $season
     * @return Membership
     */
    public function setSeason(Season $season)
    {
        $this->season = $season;
    }

    /**
     * @return Team
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param Team $team
     * @return Membership
     */
    public function setTeam(Team $team)
    {
        $this->team = $team;
    }

    /**
     * @return ArrayCollection
     */
    public function getTransfers()
    {
        return $this->transfers;
    }

    /**
     * @param ArrayCollection $transfers
     */
    public function setTransfers($transfers)
    {
        $this->transfers = $transfers;
    }
}
