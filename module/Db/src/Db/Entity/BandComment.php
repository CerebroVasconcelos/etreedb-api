<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BandComment
 */
class BandComment
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
     * @var \Db\Entity\Band
     */
    private $band;

    /**
     * @var \Db\Entity\User
     */
    private $user;


    /**
     * Set note
     *
     * @param string $note
     * @return BandComment
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
     * @return BandComment
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
     * @return BandComment
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
     * Set band
     *
     * @param \Db\Entity\Band $band
     * @return BandComment
     */
    public function setBand(\Db\Entity\Band $band)
    {
        $this->band = $band;
    
        return $this;
    }

    /**
     * Get band
     *
     * @return \Db\Entity\Band 
     */
    public function getBand()
    {
        return $this->band;
    }

    /**
     * Set user
     *
     * @param \Db\Entity\User $user
     * @return BandComment
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
