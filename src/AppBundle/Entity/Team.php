<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Team
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     * @Assert\NotNull()
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "team.name.min",
     *      maxMessage = "team.name.max"
     * )
     */
    protected $name;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Team
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Team
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @ORM\OneToMany(targetEntity="Player", mappedBy="team")
     */
    private $players;

    /**
     * @return mixed
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @param $players
     */
    public function setPlayers($players)
    {
        $this->players = $players;
    }

    public function __construct()
    {
        $this->players = new ArrayCollection();
    }

    /**
     * @ORM\ManyToOne(targetEntity="Tournament", inversedBy="tournaments")
     */
    protected $tournament;

    /**
     * @return Tournament
     */
    public function getTournament()
    {
        return $this->tournament;
    }

    /**
     * @param Tournament $tournament
     * @return Team
     */
    public function setTournament(Tournament $tournament)
    {
        $this->tournament = $tournament;
        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Coach", inversedBy="coach")
     */
    protected $coach;

    /**
     * @return Coach
     */
    public function getCoach()
    {
        return $this->coach;
    }

    /**
     * @param Coach $coach
     * @return Team
     */
    public function setCoach(Coach $coach)
    {
        $this->coach = $coach;
        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="countries")
     */
    protected $country;

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country $country
     * @return Team
     */
    public function setCountry(Country $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Match", inversedBy="dates")
     */
    protected $date;

    /**
     * @return Match
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param Match $date
     * @return Team
     */
    public function setDate(Match $date)
    {
        $this->date = $date;
        return $this;
    }
}
