<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 */
class Tournament
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $tournament;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Tournament
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTournament()
    {
        return $this->tournament;
    }

    /**
     * @param mixed $tournament
     * @return Tournament
     */
    public function setTournament($tournament)
    {
        $this->tournament = $tournament;
        return $this;
    }

    /**
     * @ORM\OneToMany(targetEntity="Team", mappedBy="tournament")
     */
    private $tournaments;

    /**
     * @return mixed
     */
    public function getTournaments()
    {
        return $this->tournaments;
    }

    /**
     * @param $tournaments
     */
    public function setTournaments($tournaments)
    {
        $this->tournaments = $tournaments;
    }

    public function __construct() {
        $this->tournaments = new ArrayCollection();
    }
}
