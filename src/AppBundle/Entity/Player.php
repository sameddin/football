<?php
namespace AppBundle\Entity;

use DateTime;
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
 * @Table(name="player")
 */
class Player
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
     * @ManyToOne(targetEntity="Team", inversedBy="players")
     *
     * @var Team
     */
    private $team;

    /**
     * @ManyToOne(targetEntity="Role")
     *
     * @var Role
     */
    private $role;

    /**
     * @ManyToOne(targetEntity="Season")
     *
     * @var Season
     */
    private $season;

    /**
     * @ManyToOne(targetEntity="Country")
     *
     * @var Country
     */
    private $country;

    /**
     * @OneToMany(targetEntity="Goal", mappedBy="player")
     *
     * @var ArrayCollection
     */
    private $goals;

    /**
     * @OneToMany(targetEntity="Pass", mappedBy="player")
     *
     * @var ArrayCollection
     */
    private $passes;

    /**
     * @OneToMany(targetEntity="YellowCard", mappedBy="player")
     *
     * @var ArrayCollection
     */
    private $yellowCards;

    /**
     * @OneToMany(targetEntity="RedCard", mappedBy="player")
     *
     * @var ArrayCollection
     */
    private $redCards;

    /**
     * @OneToMany(targetEntity="Membership", mappedBy="player")
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
     *      max = 30,
     *      minMessage = "player.name.min",
     *      maxMessage = "player.name.max"
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Column(type="integer")
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 1,
     *      max = 99,
     *      minMessage = "number.min",
     *      maxMessage = "number.max"
     * )
     *
     * @var int
     */
    private $number;

    /**
     * @Column(type="date")
     *
     * @var DateTime
     */
    private $birth;

    /**
     * @Column(type="integer")
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 150,
     *      max = 210,
     *      minMessage = "height.min",
     *      maxMessage = "height.max"
     * )
     *
     * @var int
     */
    private $height;

    /**
     * @Column(type="integer")
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 55,
     *      max = 100,
     *      minMessage = "weight.min",
     *      maxMessage = "weight.max"
     * )
     *
     * @var int
     */
    private $weight;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Player
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return Player
     */
    public function setTeam(Team $team)
    {
        $this->team = $team;
    }

    /**
     * @return Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param Role $role
     * @return Player
     */
    public function setRole(Role $role)
    {
        $this->role = $role;
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
     * @return Player
     */
    public function setSeason(Season $season)
    {
        $this->season = $season;
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
     * @return Player
     */
    public function setCountry(Country $country)
    {
        $this->country = $country;
    }

    /**
     * @return ArrayCollection
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * @param ArrayCollection $goals
     */
    public function setGoals($goals)
    {
        $this->goals = $goals;
    }

    /**
     * @return ArrayCollection
     */
    public function getPasses()
    {
        return $this->passes;
    }

    /**
     * @param ArrayCollection $passes
     */
    public function setPasses($passes)
    {
        $this->passes = $passes;
    }

    /**
     * @return ArrayCollection
     */
    public function getYellowCards()
    {
        return $this->yellowCards;
    }

    /**
     * @param ArrayCollection $yellowCards
     */
    public function setYellowCards($yellowCards)
    {
        $this->yellowCards = $yellowCards;
    }

    /**
     * @return ArrayCollection
     */
    public function getRedCards()
    {
        return $this->redCards;
    }

    /**
     * @param ArrayCollection $redCards
     */
    public function setRedCards($redCards)
    {
        $this->redCards = $redCards;
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
        $this->goals = new ArrayCollection();
        $this->passes = new ArrayCollection();
        $this->yellowCards = new ArrayCollection();
        $this->redCards = new ArrayCollection();
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
     * @return Player
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return Player
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return DateTime
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * @param DateTime $birth
     * @return Player
     */
    public function setBirth(DateTime $birth)
    {
        $this->birth = $birth;
    }

    public function getAge(DateTime $currentDate)
    {
        return $currentDate->diff($this->birth)->y;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return Player
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     * @return Player
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}
