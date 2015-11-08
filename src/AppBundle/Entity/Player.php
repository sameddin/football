<?php
namespace AppBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Player
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
     *      max = 30,
     *      minMessage = "player.name.min",
     *      maxMessage = "player.name.max"
     * )
     */
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="players")
     */
    protected $team;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 1,
     *      max = 99,
     *      minMessage = "number.min",
     *      maxMessage = "number.max"
     * )
     */
    protected $number;

    /**
     * @ORM\ManyToOne(targetEntity="Role")
     */
    protected $role;

    /**
     * @ORM\Column(type="date")
     * @var DateTime
     */
    protected $birth;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     * @Assert\NotNull()
     * @Assert\Length(
     *      min = 2,
     *      max = 30,
     *      minMessage = "nation.min",
     *      maxMessage = "nation.max"
     * )
     */
    protected $nation;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 150,
     *      max = 210,
     *      minMessage = "height.min",
     *      maxMessage = "height.max"
     * )
     */
    protected $height;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 55,
     *      max = 100,
     *      minMessage = "weight.min",
     *      maxMessage = "weight.max"
     * )
     */
    protected $weight;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    protected $match;

    /**
     * @ORM\OneToMany(targetEntity="Goal", mappedBy="player")
     *
     * @var ArrayCollection
     */
    private $goals;

    /**
     * @ORM\OneToMany(targetEntity="Pass", mappedBy="player")
     *
     * @var ArrayCollection
     */
    private $passes;

    /**
     * @ORM\OneToMany(targetEntity="YellowCard", mappedBy="player")
     *
     * @var ArrayCollection
     */
    private $yellowCards;

    /**
     * @ORM\OneToMany(targetEntity="RedCard", mappedBy="player")
     *
     * @var ArrayCollection
     */
    private $redCards;
    /**
     * @ORM\ManyToOne(targetEntity="Season")
     */
    protected $season;

    public function __construct()
    {
        $this->goals = new ArrayCollection();
        $this->passes = new ArrayCollection();
        $this->yellowCards = new ArrayCollection();
        $this->redCards = new ArrayCollection();
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
     * @return Player
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
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
        return $this;
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
        return $this;
    }

    /**
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param integer $number
     * @return Player
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
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
        return $this;
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
        return $this;
    }

    /**
     * @return string
     */
    public function getNation()
    {
        return $this->nation;
    }

    /**
     * @param string $nation
     * @return Player
     */
    public function setNation($nation)
    {
        $this->nation = $nation;
        return $this;
    }

    public function getAge(DateTime $currentDate)
    {
        return $currentDate->diff($this->birth)->y;
    }

    /**
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param integer $height
     * @return Player
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return integer
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param integer $weight
     * @return Player
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return integer
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * @param integer $match
     * @return Player
     */
    public function setMatch($match)
    {
        $this->match = $match;
        return $this;
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
        return $this;
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
}
