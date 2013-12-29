<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Source
 */
class Source
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $mbid;

    /**
     * @var string
     */
    private $format;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $mediaSizeCompressed;

    /**
     * @var integer
     */
    private $mediaSizeUncompressed;

    /**
     * @var integer
     */
    private $discCountWav;

    /**
     * @var integer
     */
    private $discCountShn;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $circulatedAt;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sourceComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sourceLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $checksum;

    /**
     * @var \Db\Entity\Performance
     */
    private $performance;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sourceComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sourceLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->checksum = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Source
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
     * Set mbid
     *
     * @param string $mbid
     * @return Source
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
     * Set format
     *
     * @param string $format
     * @return Source
     */
    public function setFormat($format)
    {
        $this->format = $format;
    
        return $this;
    }

    /**
     * Get format
     *
     * @return string 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Source
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
     * Set content
     *
     * @param string $content
     * @return Source
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set mediaSizeCompressed
     *
     * @param integer $mediaSizeCompressed
     * @return Source
     */
    public function setMediaSizeCompressed($mediaSizeCompressed)
    {
        $this->mediaSizeCompressed = $mediaSizeCompressed;
    
        return $this;
    }

    /**
     * Get mediaSizeCompressed
     *
     * @return integer 
     */
    public function getMediaSizeCompressed()
    {
        return $this->mediaSizeCompressed;
    }

    /**
     * Set mediaSizeUncompressed
     *
     * @param integer $mediaSizeUncompressed
     * @return Source
     */
    public function setMediaSizeUncompressed($mediaSizeUncompressed)
    {
        $this->mediaSizeUncompressed = $mediaSizeUncompressed;
    
        return $this;
    }

    /**
     * Get mediaSizeUncompressed
     *
     * @return integer 
     */
    public function getMediaSizeUncompressed()
    {
        return $this->mediaSizeUncompressed;
    }

    /**
     * Set discCountWav
     *
     * @param integer $discCountWav
     * @return Source
     */
    public function setDiscCountWav($discCountWav)
    {
        $this->discCountWav = $discCountWav;
    
        return $this;
    }

    /**
     * Get discCountWav
     *
     * @return integer 
     */
    public function getDiscCountWav()
    {
        return $this->discCountWav;
    }

    /**
     * Set discCountShn
     *
     * @param integer $discCountShn
     * @return Source
     */
    public function setDiscCountShn($discCountShn)
    {
        $this->discCountShn = $discCountShn;
    
        return $this;
    }

    /**
     * Get discCountShn
     *
     * @return integer 
     */
    public function getDiscCountShn()
    {
        return $this->discCountShn;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Source
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
     * Set circulatedAt
     *
     * @param string $circulatedAt
     * @return Source
     */
    public function setCirculatedAt($circulatedAt)
    {
        $this->circulatedAt = $circulatedAt;
    
        return $this;
    }

    /**
     * Get circulatedAt
     *
     * @return string 
     */
    public function getCirculatedAt()
    {
        return $this->circulatedAt;
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
     * Add sourceComment
     *
     * @param \Db\Entity\SourceComment $sourceComment
     * @return Source
     */
    public function addSourceComment(\Db\Entity\SourceComment $sourceComment)
    {
        $this->sourceComment[] = $sourceComment;
    
        return $this;
    }

    /**
     * Remove sourceComment
     *
     * @param \Db\Entity\SourceComment $sourceComment
     */
    public function removeSourceComment(\Db\Entity\SourceComment $sourceComment)
    {
        $this->sourceComment->removeElement($sourceComment);
    }

    /**
     * Get sourceComment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSourceComment()
    {
        return $this->sourceComment;
    }

    /**
     * Add sourceLink
     *
     * @param \Db\Entity\SourceLink $sourceLink
     * @return Source
     */
    public function addSourceLink(\Db\Entity\SourceLink $sourceLink)
    {
        $this->sourceLink[] = $sourceLink;
    
        return $this;
    }

    /**
     * Remove sourceLink
     *
     * @param \Db\Entity\SourceLink $sourceLink
     */
    public function removeSourceLink(\Db\Entity\SourceLink $sourceLink)
    {
        $this->sourceLink->removeElement($sourceLink);
    }

    /**
     * Get sourceLink
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSourceLink()
    {
        return $this->sourceLink;
    }

    /**
     * Add checksum
     *
     * @param \Db\Entity\Checksum $checksum
     * @return Source
     */
    public function addChecksum(\Db\Entity\Checksum $checksum)
    {
        $this->checksum[] = $checksum;
    
        return $this;
    }

    /**
     * Remove checksum
     *
     * @param \Db\Entity\Checksum $checksum
     */
    public function removeChecksum(\Db\Entity\Checksum $checksum)
    {
        $this->checksum->removeElement($checksum);
    }

    /**
     * Get checksum
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChecksum()
    {
        return $this->checksum;
    }

    /**
     * Set performance
     *
     * @param \Db\Entity\Performance $performance
     * @return Source
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
}
