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
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="roles")
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
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    protected $goal;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    protected $pass;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    protected $yellowcard;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    protected $redcard;

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
}
