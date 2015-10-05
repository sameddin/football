<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $country;

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
    * @return string
    */
    public function getCountry()
    {
        return $this->country;
    }

    /**
    * @param string $country
    * @return Team
    */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Championship")
     */

    protected $championship;

    /**
     * @return Championship
     */
    public function getChampionship()
    {
        return $this->championship;
    }

    /**
     * @param Championship $championship
     * @return Team
     */
    public function setChampionship(Championship $championship)
    {
        $this->championship = $championship;
        return $this;
    }
}
