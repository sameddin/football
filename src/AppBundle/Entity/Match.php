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
     * @ORM\OneToMany(targetEntity="Goal", mappedBy="match")
     *
     * @var ArrayCollection
     */
    private $goals;

    /**
     * @ORM\OneToMany(targetEntity="Pass", mappedBy="match")
     *
     * @var ArrayCollection
     */
    private $passes;

    public function __construct()
    {
        $this->goals = new ArrayCollection();
        $this->passes = new ArrayCollection();
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
     * @return ArrayCollection
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * @param ArrayCollection $goals
     */
    public function setGoals($goals)
    {
        $this->goals = $goals;
    }

    /**
     * @return ArrayCollection
     */
    public function getPasses()
    {
        return $this->passes;
    }

    /**
     * @param ArrayCollection $passes
     */
    public function setPasses($passes)
    {
        $this->passes = $passes;
    }
}
