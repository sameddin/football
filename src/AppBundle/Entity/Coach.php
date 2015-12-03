<?php
namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity
 * @Table(name="coach")
 */
class Coach
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     *
     * @var int
     */
    protected $id;

    /**
     * @Column(type="string")
     *
     * @var string
     */
    protected $name;

    /**
     * @Column(type="date")
     *
     * @var DateTime
     */
    protected $birth;

    /**
     * @ManyToOne(targetEntity="Country")
     *
     * @var Country
     */
    protected $country;

    public function getAge(DateTime $currentDate)
    {
        return $currentDate->diff($this->birth)->y;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return Coach
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;
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
     * @return Coach
     */
    public function setCountry(Country $country)
    {
        $this->country = $country;
    }
}
