<?php

namespace Organizer\OrganizerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousTachesTimeline
 *
 * @ORM\Table(name="sous_taches_timeline")
 * @ORM\Entity(repositoryClass="Organizer\OrganizerBundle\Entity\SousTachesTimelineRepository")
 */
class SousTachesTimeline
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
     * @ORM\Column(name="x_fk_sta_id", type="integer")
     */
    private $xFkStaId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sta_startAt", type="datetime")
     */
    private $staStartAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sta_endAt", type="datetime")
     */
    private $staEndAt;


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
     * Set xFkStaId
     *
     * @param integer $xFkStaId
     * @return SousTachesTimeline
     */
    public function setXFkStaId($xFkStaId)
    {
        $this->xFkStaId = $xFkStaId;

        return $this;
    }

    /**
     * Get xFkStaId
     *
     * @return integer 
     */
    public function getXFkStaId()
    {
        return $this->xFkStaId;
    }

    /**
     * Set staStartAt
     *
     * @param \DateTime $staStartAt
     * @return SousTachesTimeline
     */
    public function setStaStartAt($staStartAt)
    {
        $this->staStartAt = $staStartAt;

        return $this;
    }

    /**
     * Get staStartAt
     *
     * @return \DateTime 
     */
    public function getStaStartAt()
    {
        return $this->staStartAt;
    }

    /**
     * Set staEndAt
     *
     * @param \DateTime $staEndAt
     * @return SousTachesTimeline
     */
    public function setStaEndAt($staEndAt)
    {
        $this->staEndAt = $staEndAt;

        return $this;
    }

    /**
     * Get staEndAt
     *
     * @return \DateTime 
     */
    public function getStaEndAt()
    {
        return $this->staEndAt;
    }
}
