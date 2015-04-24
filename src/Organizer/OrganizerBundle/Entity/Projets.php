<?php

namespace Organizer\OrganizerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projets
 *
 * @ORM\Table(name="prj_projets")
 * @ORM\Entity(repositoryClass="Organizer\OrganizerBundle\Entity\ProjetsRepository")
 */
class Projets
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
     * @var string
     *
     * @ORM\Column(name="prj_nom", type="string", length=255)
     */
    private $prjNom;

    /**
     * @var string
     *
     * @ORM\Column(name="prj_description", type="text")
     */
    private $prjDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prj_created", type="datetime")
     */
    private $prjCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prj_updated", type="datetime", nullable=true)
     */
    private $prjUpdated;

    /**
     * @var integer
     *
     * @ORM\Column(name="prj_charge", type="integer")
     */
    private $prjCharge;


    public function __construct()
    {
        $this->prjCreated = new \DateTime();
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
     * Set prjNom
     *
     * @param string $prjNom
     * @return Projets
     */
    public function setPrjNom($prjNom)
    {
        $this->prjNom = $prjNom;

        return $this;
    }

    /**
     * Get prjNom
     *
     * @return string 
     */
    public function getPrjNom()
    {
        return $this->prjNom;
    }

    /**
     * Set prjDescription
     *
     * @param string $prjDescription
     * @return Projets
     */
    public function setPrjDescription($prjDescription)
    {
        $this->prjDescription = $prjDescription;

        return $this;
    }

    /**
     * Get prjDescription
     *
     * @return string 
     */
    public function getPrjDescription()
    {
        return $this->prjDescription;
    }

    /**
     * Set prjCreated
     *
     * @param \DateTime $prjCreated
     * @return Projets
     */
    public function setPrjCreated($prjCreated)
    {
        $this->prjCreated = $prjCreated;

        return $this;
    }

    /**
     * Get prjCreated
     *
     * @return \DateTime 
     */
    public function getPrjCreated()
    {
        return $this->prjCreated;
    }

    /**
     * Set prjUpdated
     *
     * @param \DateTime $prjUpdated
     * @return Projets
     */
    public function setPrjUpdated($prjUpdated)
    {
        $this->prjUpdated = $prjUpdated;

        return $this;
    }

    /**
     * Get prjUpdated
     *
     * @return \DateTime 
     */
    public function getPrjUpdated()
    {
        return $this->prjUpdated;
    }

    /**
     * Set prjCharge
     *
     * @param integer $prjCharge
     * @return Projets
     */
    public function setPrjCharge($prjCharge)
    {
        $this->prjCharge = $prjCharge;

        return $this;
    }

    /**
     * Get prjCharge
     *
     * @return integer 
     */
    public function getPrjCharge()
    {
        return $this->prjCharge;
    }
}
