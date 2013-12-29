<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 */
class Event
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
    private $zipcode;

    /**
     * @var string
     */
    private $note;

    /**
     * @var \DateTime
     */
    private $startAt;

    /**
     * @var \DateTime
     */
    private $endAt;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $eventComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $eventLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performance;

    /**
     * @var \Db\Entity\Producer
     */
    private $producer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eventComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->eventLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performance = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Event
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
     * @return Event
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
     * Set zipcode
     *
     * @param string $zipcode
     * @return Event
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    
        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Event
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
     * Set startAt
     *
     * @param \DateTime $startAt
     * @return Event
     */
    public function setStartAt($startAt)
    {
        $this->startAt = $startAt;
    
        return $this;
    }

    /**
     * Get startAt
     *
     * @return \DateTime 
     */
    public function getStartAt()
    {
        return $this->startAt;
    }

    /**
     * Set endAt
     *
     * @param \DateTime $endAt
     * @return Event
     */
    public function setEndAt($endAt)
    {
        $this->endAt = $endAt;
    
        return $this;
    }

    /**
     * Get endAt
     *
     * @return \DateTime 
     */
    public function getEndAt()
    {
        return $this->endAt;
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
     * Add eventComment
     *
     * @param \Db\Entity\EventComment $eventComment
     * @return Event
     */
    public function addEventComment(\Db\Entity\EventComment $eventComment)
    {
        $this->eventComment[] = $eventComment;
    
        return $this;
    }

    /**
     * Remove eventComment
     *
     * @param \Db\Entity\EventComment $eventComment
     */
    public function removeEventComment(\Db\Entity\EventComment $eventComment)
    {
        $this->eventComment->removeElement($eventComment);
    }

    /**
     * Get eventComment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEventComment()
    {
        return $this->eventComment;
    }

    /**
     * Add eventLink
     *
     * @param \Db\Entity\EventLink $eventLink
     * @return Event
     */
    public function addEventLink(\Db\Entity\EventLink $eventLink)
    {
        $this->eventLink[] = $eventLink;
    
        return $this;
    }

    /**
     * Remove eventLink
     *
     * @param \Db\Entity\EventLink $eventLink
     */
    public function removeEventLink(\Db\Entity\EventLink $eventLink)
    {
        $this->eventLink->removeElement($eventLink);
    }

    /**
     * Get eventLink
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEventLink()
    {
        return $this->eventLink;
    }

    /**
     * Add performance
     *
     * @param \Db\Entity\Performance $performance
     * @return Event
     */
    public function addPerformance(\Db\Entity\Performance $performance)
    {
        $this->performance[] = $performance;
    
        return $this;
    }

    /**
     * Remove performance
     *
     * @param \Db\Entity\Performance $performance
     */
    public function removePerformance(\Db\Entity\Performance $performance)
    {
        $this->performance->removeElement($performance);
    }

    /**
     * Get performance
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerformance()
    {
        return $this->performance;
    }

    /**
     * Set producer
     *
     * @param \Db\Entity\Producer $producer
     * @return Event
     */
    public function setProducer(\Db\Entity\Producer $producer)
    {
        $this->producer = $producer;
    
        return $this;
    }

    /**
     * Get producer
     *
     * @return \Db\Entity\Producer 
     */
    public function getProducer()
    {
        return $this->producer;
    }
}
