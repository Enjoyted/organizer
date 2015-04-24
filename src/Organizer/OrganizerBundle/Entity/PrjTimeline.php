<?php

namespace Organizer\OrganizerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrjTimeline
 *
 * @ORM\Table(name="projet_timeline")
 * @ORM\Entity(repositoryClass="Organizer\OrganizerBundle\Entity\PrjTimelineRepository")
 */
class PrjTimeline
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
     * @ORM\Column(name="x_fk_prj_id_prt", type="integer")
     */
    private $xFkPrjIdPrt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prt_startAt", type="datetime", nullable=true)
     */
    private $prtStartAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prj_endAt", type="datetime", nullable=true)
     */
    private $prjEndAt;


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
     * Set xFkPrjIdPrt
     *
     * @param integer $xFkPrjIdPrt
     * @return PrjTimeline
     */
    public function setXFkPrjIdPrt($xFkPrjIdPrt)
    {
        $this->xFkPrjIdPrt = $xFkPrjIdPrt;

        return $this;
    }

    /**
     * Get xFkPrjIdPrt
     *
     * @return integer 
     */
    public function getXFkPrjIdPrt()
    {
        return $this->xFkPrjIdPrt;
    }

    /**
     * Set prtStartAt
     *
     * @param \DateTime $prtStartAt
     * @return PrjTimeline
     */
    public function setPrtStartAt($prtStartAt)
    {
        $this->prtStartAt = $prtStartAt;

        return $this;
    }

    /**
     * Get prtStartAt
     *
     * @return \DateTime 
     */
    public function getPrtStartAt()
    {
        return $this->prtStartAt;
    }

    /**
     * Set prjEndAt
     *
     * @param \DateTime $prjEndAt
     * @return PrjTimeline
     */
    public function setPrjEndAt($prjEndAt)
    {
        $this->prjEndAt = $prjEndAt;

        return $this;
    }

    /**
     * Get prjEndAt
     *
     * @return \DateTime 
     */
    public function getPrjEndAt()
    {
        return $this->prjEndAt;
    }
}
