<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerformanceComment
 */
class PerformanceComment
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
     * @var \Db\Entity\Performance
     */
    private $performance;

    /**
     * @var \Db\Entity\User
     */
    private $user;


    /**
     * Set note
     *
     * @param string $note
     * @return PerformanceComment
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
     * @return PerformanceComment
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
     * @return PerformanceComment
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
     * Set performance
     *
     * @param \Db\Entity\Performance $performance
     * @return PerformanceComment
     */
    public function setPerformance(\Db\Entity\Performance $performance)
    {
        $this->performance = $performance;
    
        return $this;
    }

    /**
     * Get performance
     *
     * @return \Db\Entity\Performance 
     */
    public function getPerformance()
    {
        return $this->performance;
    }

    /**
     * Set user
     *
     * @param \Db\Entity\User $user
     * @return PerformanceComment
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
