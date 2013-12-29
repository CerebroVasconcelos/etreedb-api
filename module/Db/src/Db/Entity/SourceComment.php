<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SourceComment
 */
class SourceComment
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
     * @var \Db\Entity\Source
     */
    private $source;

    /**
     * @var \Db\Entity\User
     */
    private $user;


    /**
     * Set note
     *
     * @param string $note
     * @return SourceComment
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
     * @return SourceComment
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
     * @return SourceComment
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
     * Set source
     *
     * @param \Db\Entity\Source $source
     * @return SourceComment
     */
    public function setSource(\Db\Entity\Source $source)
    {
        $this->source = $source;
    
        return $this;
    }

    /**
     * Get source
     *
     * @return \Db\Entity\Source 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set user
     *
     * @param \Db\Entity\User $user
     * @return SourceComment
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
