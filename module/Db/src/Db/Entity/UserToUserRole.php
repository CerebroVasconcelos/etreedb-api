<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserToUserRole
 */
class UserToUserRole
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Db\Entity\User
     */
    private $user;

    /**
     * @var \Db\Entity\UserRole
     */
    private $userRole;


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
     * Set user
     *
     * @param \Db\Entity\User $user
     * @return UserToUserRole
     */
    public function setUser(\Db\Entity\User $user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Db\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set userRole
     *
     * @param \Db\Entity\UserRole $userRole
     * @return UserToUserRole
     */
    public function setUserRole(\Db\Entity\UserRole $userRole)
    {
        $this->userRole = $userRole;
    
        return $this;
    }

    /**
     * Get userRole
     *
     * @return \Db\Entity\UserRole 
     */
    public function getUserRole()
    {
        return $this->userRole;
    }
}
