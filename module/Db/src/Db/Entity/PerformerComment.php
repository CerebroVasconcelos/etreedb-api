<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerformerComment
 */
class PerformerComment
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
     * @var \Db\Entity\Performer
     */
    private $performer;

    /**
     * @var \Db\Entity\User
     */
    private $user;


    /**
     * Set note
     *
     * @param string $note
     * @return PerformerComment
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
     * @return PerformerComment
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
     * @return PerformerComment
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
     * Set performer
     *
     * @param \Db\Entity\Performer $performer
     * @return PerformerComment
     */
    public function setPerformer(\Db\Entity\Performer $performer)
    {
        $this->performer = $performer;
    
        return $this;
    }

    /**
     * Get performer
     *
     * @return \Db\Entity\Performer 
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Set user
     *
     * @param \Db\Entity\User $user
     * @return PerformerComment
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
