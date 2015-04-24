<?php

namespace Organizer\OrganizerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TachesTimeline
 *
 * @ORM\Table(name="taches_timeline")
 * @ORM\Entity(repositoryClass="Organizer\OrganizerBundle\Entity\TachesTimelineRepository")
 */
class TachesTimeline
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="x_fk_tac_id", type="integer")
     */
    private $xFkTacId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tac_startAt_tat", type="datetime")
     */
    private $tacStartAtTat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tac_endAt_tat", type="datetime")
     */
    private $tacEndAtTat;


    public function __construct()
    {
        
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set xFkTacId
     *
     * @param integer $xFkTacId
     * @return TachesTimeline
     */
    public function setXFkTacId($xFkTacId)
    {
        $this->xFkTacId = $xFkTacId;

        return $this;
    }

    /**
     * Get xFkTacId
     *
     * @return integer 
     */
    public function getXFkTacId()
    {
        return $this->xFkTacId;
    }

    /**
     * Set tacStartAtTat
     *
     * @param \DateTime $tacStartAtTat
     * @return TachesTimeline
     */
    public function setTacStartAtTat($tacStartAtTat)
    {
        $this->tacStartAtTat = $tacStartAtTat;

        return $this;
    }

    /**
     * Get tacStartAtTat
     *
     * @return \DateTime 
     */
    public function getTacStartAtTat()
    {
        return $this->tacStartAtTat;
    }

    /**
     * Set tacEndAtTat
     *
     * @param \DateTime $tacEndAtTat
     * @return TachesTimeline
     */
    public function setTacEndAtTat($tacEndAtTat)
    {
        $this->tacEndAtTat = $tacEndAtTat;

        return $this;
    }

    /**
     * Get tacEndAtTat
     *
     * @return \DateTime 
     */
    public function getTacEndAtTat()
    {
        return $this->tacEndAtTat;
    }
}
