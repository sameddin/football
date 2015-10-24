<?php
namespace AppBundle\Entity;

use DateTime;
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
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     * @Assert\NotNull()
     * @Assert\Length(
     *      min = 2,
     *      max = 20,
     *      minMessage = "player.name.min",
     *      maxMessage = "player.name.max"
     * )
     */
    protected $name;

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
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="players")
     */

    protected $team;

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
     * @ORM\Column(type="integer")
     * @Assert\Range(
     *      min = 1,
     *      max = 99,
     *      minMessage = "number.min",
     *      maxMessage = "number.max"
     * )
     *
     */
    protected $number;

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
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="roles")
     */

    protected $role;

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
     * @ORM\Column(type="date")
     *
     * @var DateTime
     */
    protected $birth;

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
     * @ORM\Column(type="integer")
     * @Assert\Range(
     *      min = 150,
     *      max = 210,
     *      minMessage = "height.min",
     *      maxMessage = "height.max"
     * )
     */
    protected $height;

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
     * @ORM\Column(type="integer")
     * @Assert\Range(
     *      min = 55,
     *      max = 100,
     *      minMessage = "weight.min",
     *      maxMessage = "weight.max"
     * )
     */
    protected $weight;

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
     * @ORM\Column(type="integer")
     */
    protected $match;

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
     * @ORM\Column(type="integer")
     */
    protected $goal;

    /**
     * @return integer
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * @param integer $goal
     * @return Player
     */
    public function setGoal($goal)
    {
        $this->goal = $goal;
        return $this;
    }

    /**
     * @ORM\Column(type="integer")
     */
    protected $pass;

    /**
     * @return integer
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param integer $pass
     * @return Player
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
        return $this;
    }

    /**
     * @ORM\Column(type="integer")
     */
    protected $yellowcard;

    /**
     * @return integer
     */
    public function getYellowcard()
    {
        return $this->yellowcard;
    }

    /**
     * @param integer $yellowcard
     * @return Player
     */
    public function setYellowcard($yellowcard)
    {
        $this->yellowcard = $yellowcard;
        return $this;
    }

    /**
     * @ORM\Column(type="integer")
     */
    protected $redcard;

    /**
     * @return integer
     */
    public function getRedcard()
    {
        return $this->redcard;
    }

    /**
     * @param integer $redcard
     * @return Player
     */
    public function setRedcard($redcard)
    {
        $this->redcard = $redcard;
        return $this;
    }

    /**
     * @ORM\Column(type="integer")
     */
    protected $season;

    /**
     * @return integer
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param integer $season
     * @return Player
     */
    public function setSeason($season)
    {
        $this->season = $season;
        return $this;
    }
}
