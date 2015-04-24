<?php

namespace Organizer\OrganizerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserXProjet
 *
 * @ORM\Table(name="x_user_projet")
 * @ORM\Entity(repositoryClass="Organizer\OrganizerBundle\Entity\UserXProjetRepository")
 */
class UserXProjet
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
     * @ORM\Column(name="x_fk_usr_id_upr", type="integer")
     */
    private $xFkUsrIdUpr;

    /**
     * @var integer
     *
     * @ORM\Column(name="x_fk_prj_id_upr", type="integer")
     */
    private $xFkPrjIdUpr;

    /**
     * @var integer
     *
     * @ORM\Column(name="usr_role_upr", type="integer")
     */
    private $usrRoleUpr;


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
     * Set xFkUsrIdUpr
     *
     * @param integer $xFkUsrIdUpr
     * @return UserXProjet
     */
    public function setXFkUsrIdUpr($xFkUsrIdUpr)
    {
        $this->xFkUsrIdUpr = $xFkUsrIdUpr;

        return $this;
    }

    /**
     * Get xFkUsrIdUpr
     *
     * @return integer 
     */
    public function getXFkUsrIdUpr()
    {
        return $this->xFkUsrIdUpr;
    }

    /**
     * Set xFkPrjIdUpr
     *
     * @param integer $xFkPrjIdUpr
     * @return UserXProjet
     */
    public function setXFkPrjIdUpr($xFkPrjIdUpr)
    {
        $this->xFkPrjIdUpr = $xFkPrjIdUpr;

        return $this;
    }

    /**
     * Get xFkPrjIdUpr
     *
     * @return integer 
     */
    public function getXFkPrjIdUpr()
    {
        return $this->xFkPrjIdUpr;
    }

    /**
     * Set usrRoleUpr
     *
     * @param integer $usrRoleUpr
     * @return UserXProjet
     */
    public function setUsrRoleUpr($usrRoleUpr)
    {
        $this->usrRoleUpr = $usrRoleUpr;

        return $this;
    }

    /**
     * Get usrRoleUpr
     *
     * @return integer 
     */
    public function getUsrRoleUpr()
    {
        return $this->usrRoleUpr;
    }
}
