<?php
namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Manager
{
    /**
     * @ORM\Column(type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="date")
     * @var DateTime
     */
    protected $birth;

    public function getAge(DateTime $currentDate)
    {
        return $currentDate->diff($this->birth)->y;
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
     */
    public function setId($id)
    {
        $this->id = $id;
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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return Manager
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;
    }
}
