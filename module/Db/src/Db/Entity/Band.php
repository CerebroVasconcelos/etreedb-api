<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Band
 */
class Band
{
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
    private $note;

    /**
     * @var string
     */
    private $mbid;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $bandComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $bandLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $bandAlias;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lineup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $song;

    /**
     * @var \Db\Entity\BandGroup
     */
    private $bandGroup;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bandComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->bandLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->bandAlias = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lineup = new \Doctrine\Common\Collections\ArrayCollection();
        $this->song = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Band
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
     * @return Band
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
     * Set note
     *
     * @param string $note
     * @return Band
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
     * Set mbid
     *
     * @param string $mbid
     * @return Band
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add bandComment
     *
     * @param \Db\Entity\BandComment $bandComment
     * @return Band
     */
    public function addBandComment(\Db\Entity\BandComment $bandComment)
    {
        $this->bandComment[] = $bandComment;
    
        return $this;
    }

    /**
     * Remove bandComment
     *
     * @param \Db\Entity\BandComment $bandComment
     */
    public function removeBandComment(\Db\Entity\BandComment $bandComment)
    {
        $this->bandComment->removeElement($bandComment);
    }

    /**
     * Get bandComment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBandComment()
    {
        return $this->bandComment;
    }

    /**
     * Add bandLink
     *
     * @param \Db\Entity\BandLink $bandLink
     * @return Band
     */
    public function addBandLink(\Db\Entity\BandLink $bandLink)
    {
        $this->bandLink[] = $bandLink;
    
        return $this;
    }

    /**
     * Remove bandLink
     *
     * @param \Db\Entity\BandLink $bandLink
     */
    public function removeBandLink(\Db\Entity\BandLink $bandLink)
    {
        $this->bandLink->removeElement($bandLink);
    }

    /**
     * Get bandLink
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBandLink()
    {
        return $this->bandLink;
    }

    /**
     * Add bandAlias
     *
     * @param \Db\Entity\BandAlias $bandAlias
     * @return Band
     */
    public function addBandAlia(\Db\Entity\BandAlias $bandAlias)
    {
        $this->bandAlias[] = $bandAlias;
    
        return $this;
    }

    /**
     * Remove bandAlias
     *
     * @param \Db\Entity\BandAlias $bandAlias
     */
    public function removeBandAlia(\Db\Entity\BandAlias $bandAlias)
    {
        $this->bandAlias->removeElement($bandAlias);
    }

    /**
     * Get bandAlias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBandAlias()
    {
        return $this->bandAlias;
    }

    /**
     * Add lineup
     *
     * @param \Db\Entity\Lineup $lineup
     * @return Band
     */
    public function addLineup(\Db\Entity\Lineup $lineup)
    {
        $this->lineup[] = $lineup;
    
        return $this;
    }

    /**
     * Remove lineup
     *
     * @param \Db\Entity\Lineup $lineup
     */
    public function removeLineup(\Db\Entity\Lineup $lineup)
    {
        $this->lineup->removeElement($lineup);
    }

    /**
     * Get lineup
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLineup()
    {
        return $this->lineup;
    }

    /**
     * Add song
     *
     * @param \Db\Entity\Song $song
     * @return Band
     */
    public function addSong(\Db\Entity\Song $song)
    {
        $this->song[] = $song;
    
        return $this;
    }

    /**
     * Remove song
     *
     * @param \Db\Entity\Song $song
     */
    public function removeSong(\Db\Entity\Song $song)
    {
        $this->song->removeElement($song);
    }

    /**
     * Get song
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSong()
    {
        return $this->song;
    }

    /**
     * Set bandGroup
     *
     * @param \Db\Entity\BandGroup $bandGroup
     * @return Band
     */
    public function setBandGroup(\Db\Entity\BandGroup $bandGroup = null)
    {
        $this->bandGroup = $bandGroup;
    
        return $this;
    }

    /**
     * Get bandGroup
     *
     * @return \Db\Entity\BandGroup 
     */
    public function getBandGroup()
    {
        return $this->bandGroup;
    }
}
