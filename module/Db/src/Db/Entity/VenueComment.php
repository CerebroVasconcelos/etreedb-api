<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VenueComment
 */
class VenueComment
{
    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $rating;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Db\Entity\Venue
     */
    private $venue;

    /**
     * @var \Db\Entity\User
     */
    private $user;


    /**
     * Set note
     *
     * @param string $note
     * @return VenueComment
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     * @return VenueComment
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    
        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return VenueComment
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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
     * Set venue
     *
     * @param \Db\Entity\Venue $venue
     * @return VenueComment
     */
    public function setVenue(\Db\Entity\Venue $venue)
    {
        $this->venue = $venue;
    
        return $this;
    }

    /**
     * Get venue
     *
     * @return \Db\Entity\Venue 
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * Set user
     *
     * @param \Db\Entity\User $user
     * @return VenueComment
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
