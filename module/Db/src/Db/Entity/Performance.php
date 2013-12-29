<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Performance
 */
class Performance
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
    private $performanceDate;

    /**
     * @var \DateTime
     */
    private $performanceDateAt;

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
    private $performanceComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performanceLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performerPerformance;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $source;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performanceSet;

    /**
     * @var \Db\Entity\Venue
     */
    private $venue;

    /**
     * @var \Db\Entity\Event
     */
    private $event;

    /**
     * @var \Db\Entity\Lineup
     */
    private $lineup;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->performanceComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performanceLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performerPerformance = new \Doctrine\Common\Collections\ArrayCollection();
        $this->source = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performanceSet = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Performance
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
     * @return Performance
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
     * Set performanceDate
     *
     * @param string $performanceDate
     * @return Performance
     */
    public function setPerformanceDate($performanceDate)
    {
        $this->performanceDate = $performanceDate;
    
        return $this;
    }

    /**
     * Get performanceDate
     *
     * @return string 
     */
    public function getPerformanceDate()
    {
        return $this->performanceDate;
    }

    /**
     * Set performanceDateAt
     *
     * @param \DateTime $performanceDateAt
     * @return Performance
     */
    public function setPerformanceDateAt($performanceDateAt)
    {
        $this->performanceDateAt = $performanceDateAt;
    
        return $this;
    }

    /**
     * Get performanceDateAt
     *
     * @return \DateTime 
     */
    public function getPerformanceDateAt()
    {
        return $this->performanceDateAt;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Performance
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
     * @return Performance
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
     * Add performanceComment
     *
     * @param \Db\Entity\PerformanceComment $performanceComment
     * @return Performance
     */
    public function addPerformanceComment(\Db\Entity\PerformanceComment $performanceComment)
    {
        $this->performanceComment[] = $performanceComment;
    
        return $this;
    }

    /**
     * Remove performanceComment
     *
     * @param \Db\Entity\PerformanceComment $performanceComment
     */
    public function removePerformanceComment(\Db\Entity\PerformanceComment $performanceComment)
    {
        $this->performanceComment->removeElement($performanceComment);
    }

    /**
     * Get performanceComment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerformanceComment()
    {
        return $this->performanceComment;
    }

    /**
     * Add performanceLink
     *
     * @param \Db\Entity\PerformanceLink $performanceLink
     * @return Performance
     */
    public function addPerformanceLink(\Db\Entity\PerformanceLink $performanceLink)
    {
        $this->performanceLink[] = $performanceLink;
    
        return $this;
    }

    /**
     * Remove performanceLink
     *
     * @param \Db\Entity\PerformanceLink $performanceLink
     */
    public function removePerformanceLink(\Db\Entity\PerformanceLink $performanceLink)
    {
        $this->performanceLink->removeElement($performanceLink);
    }

    /**
     * Get performanceLink
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerformanceLink()
    {
        return $this->performanceLink;
    }

    /**
     * Add performerPerformance
     *
     * @param \Db\Entity\PerformerPerformance $performerPerformance
     * @return Performance
     */
    public function addPerformerPerformance(\Db\Entity\PerformerPerformance $performerPerformance)
    {
        $this->performerPerformance[] = $performerPerformance;
    
        return $this;
    }

    /**
     * Remove performerPerformance
     *
     * @param \Db\Entity\PerformerPerformance $performerPerformance
     */
    public function removePerformerPerformance(\Db\Entity\PerformerPerformance $performerPerformance)
    {
        $this->performerPerformance->removeElement($performerPerformance);
    }

    /**
     * Get performerPerformance
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerformerPerformance()
    {
        return $this->performerPerformance;
    }

    /**
     * Add source
     *
     * @param \Db\Entity\Source $source
     * @return Performance
     */
    public function addSource(\Db\Entity\Source $source)
    {
        $this->source[] = $source;
    
        return $this;
    }

    /**
     * Remove source
     *
     * @param \Db\Entity\Source $source
     */
    public function removeSource(\Db\Entity\Source $source)
    {
        $this->source->removeElement($source);
    }

    /**
     * Get source
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Add performanceSet
     *
     * @param \Db\Entity\PerformanceSet $performanceSet
     * @return Performance
     */
    public function addPerformanceSet(\Db\Entity\PerformanceSet $performanceSet)
    {
        $this->performanceSet[] = $performanceSet;
    
        return $this;
    }

    /**
     * Remove performanceSet
     *
     * @param \Db\Entity\PerformanceSet $performanceSet
     */
    public function removePerformanceSet(\Db\Entity\PerformanceSet $performanceSet)
    {
        $this->performanceSet->removeElement($performanceSet);
    }

    /**
     * Get performanceSet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerformanceSet()
    {
        return $this->performanceSet;
    }

    /**
     * Set venue
     *
     * @param \Db\Entity\Venue $venue
     * @return Performance
     */
    public function setVenue(\Db\Entity\Venue $venue)
    {
        $this->venue = $venue;
    
        return $this;
    }

    /**
     * Get venue
     *
     * @return \Db\Entity\Venue 
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * Set event
     *
     * @param \Db\Entity\Event $event
     * @return Performance
     */
    public function setEvent(\Db\Entity\Event $event = null)
    {
        $this->event = $event;
    
        return $this;
    }

    /**
     * Get event
     *
     * @return \Db\Entity\Event 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set lineup
     *
     * @param \Db\Entity\Lineup $lineup
     * @return Performance
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
}
