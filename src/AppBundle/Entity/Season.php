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
    protected $startyear;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $endyear;

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
    public function getstartYear()
    {
        return $this->startyear;
    }

    /**
     * @param mixed $startyear
     * @return Season
     */
    public function setstartYear($startyear)
    {
        $this->startyear = $startyear;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getendYear()
    {
        return $this->endyear;
    }

    /**
     * @param mixed $endyear
     * @return Season
     */
    public function setendYear($endyear)
    {
        $this->endyear = $endyear;
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
