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
    private $id;

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
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Match")
     */
    private $match;
    /**
     * @ORM\ManyToOne(targetEntity="Tournament")
     */
    private $tournament;
    /**
     * @ORM\ManyToOne(targetEntity="Coach")
     */
    private $coach;
    /**
     * @ORM\ManyToOne(targetEntity="Country")
     */
    private $country;
    /**
     * @ORM\OneToMany(targetEntity="Player", mappedBy="team")
     */
    private $players;

    /**
     * @ORM\OneToMany(targetEntity="Membership", mappedBy="team")
     *
     * @var ArrayCollection
     */
    private $memberships;

    /**
     * @ORM\ManyToOne(targetEntity="Manager")
     */
    private $manager;

    public function __construct()
    {
        $this->players = new ArrayCollection();
        $this->memberships = new ArrayCollection();
    }

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
     * @return Match
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * @param Match $match
     * @return Team
     */
    public function setMatch(Match $match)
    {
        $this->match = $match;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getMemberships()
    {
        return $this->memberships;
    }

    /**
     * @param ArrayCollection $memberships
     */
    public function setMemberships($memberships)
    {
        $this->memberships = $memberships;
    }

    /**
     * @return Manager
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * @param Manager $manager
     * @return Team
     */
    public function setManager(Manager $manager)
    {
        $this->manager = $manager;
    }
}
