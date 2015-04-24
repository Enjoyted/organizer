<?php

namespace Organizer\OrganizerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousTaches
 *
 * @ORM\Table(name="sous_taches")
 * @ORM\Entity(repositoryClass="Organizer\OrganizerBundle\Entity\SousTachesRepository")
 */
class SousTaches
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
     * @ORM\Column(name="sta_nom", type="string", length=255)
     */
    private $staNom;

    /**
     * @var string
     *
     * @ORM\Column(name="sta_description", type="text")
     */
    private $staDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sta_created", type="datetime")
     */
    private $staCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sta_updated", type="datetime", nullable=true)
     */
    private $staUpdated;

    /**
     * @var integer
     *
     * @ORM\Column(name="sta_charge", type="integer")
     */
    private $staCharge;


    public function __construct()
    {
        $this->staCreated = new \DateTime();
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
     * Set staNom
     *
     * @param string $staNom
     * @return SousTaches
     */
    public function setStaNom($staNom)
    {
        $this->staNom = $staNom;

        return $this;
    }

    /**
     * Get staNom
     *
     * @return string 
     */
    public function getStaNom()
    {
        return $this->staNom;
    }

    /**
     * Set staDescription
     *
     * @param string $staDescription
     * @return SousTaches
     */
    public function setStaDescription($staDescription)
    {
        $this->staDescription = $staDescription;

        return $this;
    }

    /**
     * Get staDescription
     *
     * @return string 
     */
    public function getStaDescription()
    {
        return $this->staDescription;
    }

    /**
     * Set staCreated
     *
     * @param \DateTime $staCreated
     * @return SousTaches
     */
    public function setStaCreated($staCreated)
    {
        $this->staCreated = $staCreated;

        return $this;
    }

    /**
     * Get staCreated
     *
     * @return \DateTime 
     */
    public function getStaCreated()
    {
        return $this->staCreated;
    }

    /**
     * Set staUpdated
     *
     * @param \DateTime $staUpdated
     * @return SousTaches
     */
    public function setStaUpdated($staUpdated)
    {
        $this->staUpdated = $staUpdated;

        return $this;
    }

    /**
     * Get staUpdated
     *
     * @return \DateTime 
     */
    public function getStaUpdated()
    {
        return $this->staUpdated;
    }

    /**
     * Set staCharge
     *
     * @param integer $staCharge
     * @return SousTaches
     */
    public function setStaCharge($staCharge)
    {
        $this->staCharge = $staCharge;

        return $this;
    }

    /**
     * Get staCharge
     *
     * @return integer 
     */
    public function getStaCharge()
    {
        return $this->staCharge;
    }
}
