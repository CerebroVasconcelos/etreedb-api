<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerformerLink
 */
class PerformerLink
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
     * @var \Db\Entity\Performer
     */
    private $performer;

    /**
     * @var \Db\Entity\User
     */
    private $user;


    /**
     * Set title
     *
     * @param string $title
     * @return PerformerLink
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
     * @return PerformerLink
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
     * @return PerformerLink
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
     * @return PerformerLink
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
     * @return PerformerLink
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
     * @return PerformerLink
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
