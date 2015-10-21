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
     * @var string
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
     * @var string
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
}
