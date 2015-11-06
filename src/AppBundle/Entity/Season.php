<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
    protected $id;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $startYear;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $endYear;

    /**
     * @ORM\OneToMany(targetEntity="Player", mappedBy="season")
     */
    protected $season;

    public function __construct()
    {
        $this->season = new ArrayCollection();
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
     * @return mixed
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param $season
     */
    public function setSeason($season)
    {
        $this->season = $season;
    }
}
