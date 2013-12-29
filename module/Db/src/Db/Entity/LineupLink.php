<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LineupLink
 */
class LineupLink
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $note;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Db\Entity\Lineup
     */
    private $lineup;

    /**
     * @var \Db\Entity\User
     */
    private $user;


    /**
     * Set title
     *
     * @param string $title
     * @return LineupLink
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return LineupLink
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return LineupLink
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return LineupLink
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
     * Set lineup
     *
     * @param \Db\Entity\Lineup $lineup
     * @return LineupLink
     */
    public function setLineup(\Db\Entity\Lineup $lineup)
    {
        $this->lineup = $lineup;
    
        return $this;
    }

    /**
     * Get lineup
     *
     * @return \Db\Entity\Lineup 
     */
    public function getLineup()
    {
        return $this->lineup;
    }

    /**
     * Set user
     *
     * @param \Db\Entity\User $user
     * @return LineupLink
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
