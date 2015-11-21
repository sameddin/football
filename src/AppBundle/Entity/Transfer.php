<?php
namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Transfer
{
    /**
     * @ORM\Column(type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="date")
     * @var DateTime
     */
    protected $date;

    /**
     * @ORM\Column(type="decimal")
     */
    protected $sum;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="transfers")
     *
     * @var Player
     */
    private $player;

    /**
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="transfers")
     *
     * @var Team
     */
    private $team;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     * @return Transfer
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @param mixed $sum
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
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
     * @return self
     */
    public function setPlayer(Player $player)
    {
        $this->player = $player;
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
     * @return self
     */
    public function setTeam(Team $team)
    {
        $this->team = $team;
    }
}
