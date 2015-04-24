<?php

namespace Organizer\OrganizerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserXTaches
 *
 * @ORM\Table(name="x_user_taches")
 * @ORM\Entity(repositoryClass="Organizer\OrganizerBundle\Entity\UserXTachesRepository")
 */
class UserXTaches
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
     * @ORM\Column(name="x_fk_usr_id_uta", type="integer")
     */
    private $xFkUsrIdUta;

    /**
     * @var integer
     *
     * @ORM\Column(name="x_fk_tac_id_uta", type="integer")
     */
    private $xFkTacIdUta;

    /**
     * @var integer
     *
     * @ORM\Column(name="usr_role_uta", type="integer")
     */
    private $usrRoleUta;


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
     * Set xFkUsrIdUta
     *
     * @param integer $xFkUsrIdUta
     * @return UserXTaches
     */
    public function setXFkUsrIdUta($xFkUsrIdUta)
    {
        $this->xFkUsrIdUta = $xFkUsrIdUta;

        return $this;
    }

    /**
     * Get xFkUsrIdUta
     *
     * @return integer 
     */
    public function getXFkUsrIdUta()
    {
        return $this->xFkUsrIdUta;
    }

    /**
     * Set xFkTacIdUta
     *
     * @param integer $xFkTacIdUta
     * @return UserXTaches
     */
    public function setXFkTacIdUta($xFkTacIdUta)
    {
        $this->xFkTacIdUta = $xFkTacIdUta;

        return $this;
    }

    /**
     * Get xFkTacIdUta
     *
     * @return integer 
     */
    public function getXFkTacIdUta()
    {
        return $this->xFkTacIdUta;
    }

    /**
     * Set usrRoleUta
     *
     * @param integer $usrRoleUta
     * @return UserXTaches
     */
    public function setUsrRoleUta($usrRoleUta)
    {
        $this->usrRoleUta = $usrRoleUta;

        return $this;
    }

    /**
     * Get usrRoleUta
     *
     * @return integer 
     */
    public function getUsrRoleUta()
    {
        return $this->usrRoleUta;
    }
}
