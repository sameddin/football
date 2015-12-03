<?php
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Season
{
    /**
     * @ORM\Column(type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="bigint")
     */
    private $startYear;

    /**
     * @ORM\Column(type="bigint")
     */
    private $endYear;

    /**
     * @ORM\OneToMany(targetEntity="Membership", mappedBy="season")
     *
     * @var ArrayCollection
     */
    private $memberships;

    public function __construct()
    {
        $this->memberships = new ArrayCollection();
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
     * @return Season
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartYear()
    {
        return $this->startYear;
    }

    /**
     * @param mixed $startYear
     * @return Season
     */
    public function setStartYear($startYear)
    {
        $this->startYear = $startYear;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndYear()
    {
        return $this->endYear;
    }

    /**
     * @param mixed $endYear
     * @return Season
     */
    public function setEndYear($endYear)
    {
        $this->endYear = $endYear;
        return $this;
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
}
