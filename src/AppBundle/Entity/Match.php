<?php
namespace AppBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity
 * @Table(name="match")
 */
class Match
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     *
     * @var int
     */
    private $id;

    /**
     * @OneToMany(targetEntity="Goal", mappedBy="match")
     *
     * @var ArrayCollection
     */
    private $goals;

    /**
     * @OneToMany(targetEntity="Pass", mappedBy="match")
     *
     * @var ArrayCollection
     */
    private $passes;

    /**
     * @OneToMany(targetEntity="YellowCard", mappedBy="match")
     *
     * @var ArrayCollection
     */
    private $yellowCards;

    /**
     * @OneToMany(targetEntity="RedCard", mappedBy="match")
     *
     * @var ArrayCollection
     */
    private $redCards;

    /**
     * @Column(type="datetime")
     *
     * @var DateTime
     */
    private $date;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Match
     */
    public function setId($id)
    {
        $this->id = $id;
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

    /**
     * @return ArrayCollection
     */
    public function getYellowCards()
    {
        return $this->yellowCards;
    }

    /**
     * @param ArrayCollection $yellowCards
     */
    public function setYellowCards($yellowCards)
    {
        $this->yellowCards = $yellowCards;
    }

    /**
     * @return ArrayCollection
     */
    public function getRedCards()
    {
        return $this->redCards;
    }

    /**
     * @param ArrayCollection $redCards
     */
    public function setRedCards($redCards)
    {
        $this->redCards = $redCards;
    }

    public function __construct()
    {
        $this->goals = new ArrayCollection();
        $this->passes = new ArrayCollection();
        $this->yellowCards = new ArrayCollection();
        $this->redCards = new ArrayCollection();
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
    }
}
