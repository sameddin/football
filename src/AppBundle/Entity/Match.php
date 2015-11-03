<?php
namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 */
class Match
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="datetime")
     * @var DateTime
     */
    protected $date;
    /**
     * @ORM\OneToMany(targetEntity="Team", mappedBy="match")
     */
    private $dates;

    public function __construct()
    {
        $this->dates = new ArrayCollection();
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
     * @return Match
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     * @return Match
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * @param $dates
     */
    public function setDates($dates)
    {
        $this->dates = $dates;
    }
}
