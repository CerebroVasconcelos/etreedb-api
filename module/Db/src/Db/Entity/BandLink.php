<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BandLink
 */
class BandLink
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
     * @var \Db\Entity\Band
     */
    private $band;

    /**
     * @var \Db\Entity\User
     */
    private $user;


    /**
     * Set title
     *
     * @param string $title
     * @return BandLink
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
     * @return BandLink
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
     * @return BandLink
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
     * @return BandLink
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
     * @return BandLink
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
     * @return BandLink
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
