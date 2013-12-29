<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SongLink
 */
class SongLink
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
     * @var \Db\Entity\Song
     */
    private $song;

    /**
     * @var \Db\Entity\User
     */
    private $user;


    /**
     * Set title
     *
     * @param string $title
     * @return SongLink
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
     * @return SongLink
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
     * @return SongLink
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
     * @return SongLink
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
     * Set song
     *
     * @param \Db\Entity\Song $song
     * @return SongLink
     */
    public function setSong(\Db\Entity\Song $song)
    {
        $this->song = $song;
    
        return $this;
    }

    /**
     * Get song
     *
     * @return \Db\Entity\Song 
     */
    public function getSong()
    {
        return $this->song;
    }

    /**
     * Set user
     *
     * @param \Db\Entity\User $user
     * @return SongLink
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
