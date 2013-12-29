<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Song
 */
class Song
{
    /**
     * @var string
     */
    private $mbid;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $nameNormalize;

    /**
     * @var string
     */
    private $lyrics;

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $songComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $songLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performanceSetSong;

    /**
     * @var \Db\Entity\Band
     */
    private $band;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->songComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->songLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performanceSetSong = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set mbid
     *
     * @param string $mbid
     * @return Song
     */
    public function setMbid($mbid)
    {
        $this->mbid = $mbid;
    
        return $this;
    }

    /**
     * Get mbid
     *
     * @return string 
     */
    public function getMbid()
    {
        return $this->mbid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Song
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set nameNormalize
     *
     * @param string $nameNormalize
     * @return Song
     */
    public function setNameNormalize($nameNormalize)
    {
        $this->nameNormalize = $nameNormalize;
    
        return $this;
    }

    /**
     * Get nameNormalize
     *
     * @return string 
     */
    public function getNameNormalize()
    {
        return $this->nameNormalize;
    }

    /**
     * Set lyrics
     *
     * @param string $lyrics
     * @return Song
     */
    public function setLyrics($lyrics)
    {
        $this->lyrics = $lyrics;
    
        return $this;
    }

    /**
     * Get lyrics
     *
     * @return string 
     */
    public function getLyrics()
    {
        return $this->lyrics;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Song
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add songComment
     *
     * @param \Db\Entity\SongComment $songComment
     * @return Song
     */
    public function addSongComment(\Db\Entity\SongComment $songComment)
    {
        $this->songComment[] = $songComment;
    
        return $this;
    }

    /**
     * Remove songComment
     *
     * @param \Db\Entity\SongComment $songComment
     */
    public function removeSongComment(\Db\Entity\SongComment $songComment)
    {
        $this->songComment->removeElement($songComment);
    }

    /**
     * Get songComment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSongComment()
    {
        return $this->songComment;
    }

    /**
     * Add songLink
     *
     * @param \Db\Entity\SongLink $songLink
     * @return Song
     */
    public function addSongLink(\Db\Entity\SongLink $songLink)
    {
        $this->songLink[] = $songLink;
    
        return $this;
    }

    /**
     * Remove songLink
     *
     * @param \Db\Entity\SongLink $songLink
     */
    public function removeSongLink(\Db\Entity\SongLink $songLink)
    {
        $this->songLink->removeElement($songLink);
    }

    /**
     * Get songLink
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSongLink()
    {
        return $this->songLink;
    }

    /**
     * Add performanceSetSong
     *
     * @param \Db\Entity\PerformanceSetSong $performanceSetSong
     * @return Song
     */
    public function addPerformanceSetSong(\Db\Entity\PerformanceSetSong $performanceSetSong)
    {
        $this->performanceSetSong[] = $performanceSetSong;
    
        return $this;
    }

    /**
     * Remove performanceSetSong
     *
     * @param \Db\Entity\PerformanceSetSong $performanceSetSong
     */
    public function removePerformanceSetSong(\Db\Entity\PerformanceSetSong $performanceSetSong)
    {
        $this->performanceSetSong->removeElement($performanceSetSong);
    }

    /**
     * Get performanceSetSong
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerformanceSetSong()
    {
        return $this->performanceSetSong;
    }

    /**
     * Set band
     *
     * @param \Db\Entity\Band $band
     * @return Song
     */
    public function setBand(\Db\Entity\Band $band = null)
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
}
