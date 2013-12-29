<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRole
 */
class UserRole
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $userToUserRole;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userToUserRole = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return UserRole
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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
     * Add userToUserRole
     *
     * @param \Db\Entity\UserToUserRole $userToUserRole
     * @return UserRole
     */
    public function addUserToUserRole(\Db\Entity\UserToUserRole $userToUserRole)
    {
        $this->userToUserRole[] = $userToUserRole;
    
        return $this;
    }

    /**
     * Remove userToUserRole
     *
     * @param \Db\Entity\UserToUserRole $userToUserRole
     */
    public function removeUserToUserRole(\Db\Entity\UserToUserRole $userToUserRole)
    {
        $this->userToUserRole->removeElement($userToUserRole);
    }

    /**
     * Get userToUserRole
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserToUserRole()
    {
        return $this->userToUserRole;
    }
}
