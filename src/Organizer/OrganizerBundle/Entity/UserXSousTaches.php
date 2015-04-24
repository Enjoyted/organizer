<?php

namespace Organizer\OrganizerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserXSousTaches
 *
 * @ORM\Table(name="x_user_sous_taches")
 * @ORM\Entity(repositoryClass="Organizer\OrganizerBundle\Entity\UserXSousTachesRepository")
 */
class UserXSousTaches
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
     * @ORM\Column(name="x_fk_usr_id_ust", type="integer")
     */
    private $xFkUsrIdUst;

    /**
     * @var integer
     *
     * @ORM\Column(name="x_fk_sta_id_ust", type="integer")
     */
    private $xFkStaIdUst;

    /**
     * @var integer
     *
     * @ORM\Column(name="usr_role_ust", type="integer")
     */
    private $usrRoleUst;


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
     * Set xFkUsrIdUst
     *
     * @param integer $xFkUsrIdUst
     * @return UserXSousTaches
     */
    public function setXFkUsrIdUst($xFkUsrIdUst)
    {
        $this->xFkUsrIdUst = $xFkUsrIdUst;

        return $this;
    }

    /**
     * Get xFkUsrIdUst
     *
     * @return integer 
     */
    public function getXFkUsrIdUst()
    {
        return $this->xFkUsrIdUst;
    }

    /**
     * Set xFkStaIdUst
     *
     * @param integer $xFkStaIdUst
     * @return UserXSousTaches
     */
    public function setXFkStaIdUst($xFkStaIdUst)
    {
        $this->xFkStaIdUst = $xFkStaIdUst;

        return $this;
    }

    /**
     * Get xFkStaIdUst
     *
     * @return integer 
     */
    public function getXFkStaIdUst()
    {
        return $this->xFkStaIdUst;
    }

    /**
     * Set usrRoleUst
     *
     * @param integer $usrRoleUst
     * @return UserXSousTaches
     */
    public function setUsrRoleUst($usrRoleUst)
    {
        $this->usrRoleUst = $usrRoleUst;

        return $this;
    }

    /**
     * Get usrRoleUst
     *
     * @return integer 
     */
    public function getUsrRoleUst()
    {
        return $this->usrRoleUst;
    }
}
