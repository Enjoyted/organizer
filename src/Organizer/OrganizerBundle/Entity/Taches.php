<?php

namespace Organizer\OrganizerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taches
 *
 * @ORM\Table(name="tac_taches")
 * @ORM\Entity(repositoryClass="Organizer\OrganizerBundle\Entity\TachesRepository")
 */
class Taches
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
     * @ORM\Column(name="tac_nom", type="string", length=255)
     */
    private $tacNom;

    /**
     * @var string
     *
     * @ORM\Column(name="tac_description", type="text")
     */
    private $tacDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tac_created", type="datetime")
     */
    private $tacCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tac_updated", type="datetime", nullable=true)
     */
    private $tacUpdated;

    /**
     * @var integer
     *
     * @ORM\Column(name="tac_charge", type="integer", nullable=true)
     */
    private $tacCharge;


    public function __construct()
    {
        $this->tacCreated = new \DateTime();
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
     * Set tacNom
     *
     * @param string $tacNom
     * @return Taches
     */
    public function setTacNom($tacNom)
    {
        $this->tacNom = $tacNom;

        return $this;
    }

    /**
     * Get tacNom
     *
     * @return string 
     */
    public function getTacNom()
    {
        return $this->tacNom;
    }

    /**
     * Set tacDescription
     *
     * @param string $tacDescription
     * @return Taches
     */
    public function setTacDescription($tacDescription)
    {
        $this->tacDescription = $tacDescription;

        return $this;
    }

    /**
     * Get tacDescription
     *
     * @return string 
     */
    public function getTacDescription()
    {
        return $this->tacDescription;
    }

    /**
     * Set tacCreated
     *
     * @param \DateTime $tacCreated
     * @return Taches
     */
    public function setTacCreated($tacCreated)
    {
        $this->tacCreated = $tacCreated;

        return $this;
    }

    /**
     * Get tacCreated
     *
     * @return \DateTime 
     */
    public function getTacCreated()
    {
        return $this->tacCreated;
    }

    /**
     * Set tacUpdated
     *
     * @param \DateTime $tacUpdated
     * @return Taches
     */
    public function setTacUpdated($tacUpdated)
    {
        $this->tacUpdated = $tacUpdated;

        return $this;
    }

    /**
     * Get tacUpdated
     *
     * @return \DateTime 
     */
    public function getTacUpdated()
    {
        return $this->tacUpdated;
    }

    /**
     * Set tacCharge
     *
     * @param integer $tacCharge
     * @return Taches
     */
    public function setTacCharge($tacCharge)
    {
        $this->tacCharge = $tacCharge;

        return $this;
    }

    /**
     * Get tacCharge
     *
     * @return integer 
     */
    public function getTacCharge()
    {
        return $this->tacCharge;
    }
}
