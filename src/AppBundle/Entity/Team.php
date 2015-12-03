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
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Entity
 * @Table(name="team")
 */
class Team
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     *
     * @var int
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="Match")
     *
     * @var Match
     */
    private $match;

    /**
     * @ManyToOne(targetEntity="Tournament")
     *
     * @var Tournament
     */
    private $tournament;

    /**
     * @ManyToOne(targetEntity="Coach")
     *
     * @var Coach
     */
    private $coach;

    /**
     * @ManyToOne(targetEntity="Manager")
     *
     * @var Manager
     */
    private $manager;

    /**
     * @ManyToOne(targetEntity="Country")
     *
     * @var Country
     */
    private $country;

    /**
     * @OneToMany(targetEntity="Player", mappedBy="team")
     *
     * @var Player
     */
    private $players;

    /**
     * @OneToMany(targetEntity="Membership", mappedBy="team")
     *
     * @var ArrayCollection
     */
    private $memberships;

    /**
     * @Column(type="string")
     * @Assert\NotBlank()
     * @Assert\NotNull()
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "team.name.min",
     *      maxMessage = "team.name.max"
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Team
     */
    public function setId($id)
    {
        $this->id = $id;
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
    }

    /**
     * @return Player
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @param Player $players
     * @return Team
     */
    public function setPlayers($players)
    {
        $this->players = $players;
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

    public function __construct()
    {
        $this->players = new ArrayCollection();
        $this->memberships = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Team
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
