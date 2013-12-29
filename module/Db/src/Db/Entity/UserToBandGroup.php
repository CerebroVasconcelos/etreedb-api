<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserToBandGroup
 */
class UserToBandGroup
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Db\Entity\BandGroup
     */
    private $bandGroup;

    /**
     * @var \Db\Entity\User
     */
    private $user;


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
     * Set bandGroup
     *
     * @param \Db\Entity\BandGroup $bandGroup
     * @return UserToBandGroup
     */
    public function setBandGroup(\Db\Entity\BandGroup $bandGroup)
    {
        $this->bandGroup = $bandGroup;
    
        return $this;
    }

    /**
     * Get bandGroup
     *
     * @return \Db\Entity\BandGroup 
     */
    public function getBandGroup()
    {
        return $this->bandGroup;
    }

    /**
     * Set user
     *
     * @param \Db\Entity\User $user
     * @return UserToBandGroup
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
}
