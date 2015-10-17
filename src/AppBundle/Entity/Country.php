<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 */
class Country
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
     * @return Country
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     * @return Country
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @ORM\OneToMany(targetEntity="Team", mappedBy="country")
     */
    private $countries;

    /**
     * @return mixed
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param $countries
     */
    public function setCountries($countries)
    {
        $this->countries = $countries;
    }

    public function __construct() {
        $this->countries = new ArrayCollection();
    }
}
