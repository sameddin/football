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
 * @Table(name="transfer")
 */
class Transfer
{
    /**
     * @Column(type="bigint")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     *
     * @var int
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="Membership", inversedBy="transfers")
     *
     * @var Membership
     */
    private $membership;

    /**
     * @Column(type="date")
     *
     * @var DateTime
     */
    private $date;

    /**
     * @Column(type="decimal")
     *
     * @var int
     */
    private $sum;

    /**
     * @Column(type="string")
     *
     * @var string
     */
    private $term;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Transfer
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Membership
     */
    public function getMembership()
    {
        return $this->membership;
    }

    /**
     * @param Membership $membership
     * @return Transfer
     */
    public function setMembership(Membership $membership)
    {
        $this->membership = $membership;
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
     * @return Transfer
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @param int $sum
     * @return Transfer
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
    }

    /**
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param string $term
     * @return Transfer
     */
    public function setTerm($term)
    {
        $this->term = $term;
    }
}
