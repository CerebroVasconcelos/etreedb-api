<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lineup
 */
class Lineup
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
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lineupComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lineupLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performerLineup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performance;

    /**
     * @var \Db\Entity\Band
     */
    private $band;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lineupComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lineupLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performerLineup = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performance = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Lineup
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
     * @return Lineup
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
     * @return Lineup
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
     * Add lineupComment
     *
     * @param \Db\Entity\LineupComment $lineupComment
     * @return Lineup
     */
    public function addLineupComment(\Db\Entity\LineupComment $lineupComment)
    {
        $this->lineupComment[] = $lineupComment;
    
        return $this;
    }

    /**
     * Remove lineupComment
     *
     * @param \Db\Entity\LineupComment $lineupComment
     */
    public function removeLineupComment(\Db\Entity\LineupComment $lineupComment)
    {
        $this->lineupComment->removeElement($lineupComment);
    }

    /**
     * Get lineupComment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLineupComment()
    {
        return $this->lineupComment;
    }

    /**
     * Add lineupLink
     *
     * @param \Db\Entity\LineupLink $lineupLink
     * @return Lineup
     */
    public function addLineupLink(\Db\Entity\LineupLink $lineupLink)
    {
        $this->lineupLink[] = $lineupLink;
    
        return $this;
    }

    /**
     * Remove lineupLink
     *
     * @param \Db\Entity\LineupLink $lineupLink
     */
    public function removeLineupLink(\Db\Entity\LineupLink $lineupLink)
    {
        $this->lineupLink->removeElement($lineupLink);
    }

    /**
     * Get lineupLink
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLineupLink()
    {
        return $this->lineupLink;
    }

    /**
     * Add performerLineup
     *
     * @param \Db\Entity\PerformerLineup $performerLineup
     * @return Lineup
     */
    public function addPerformerLineup(\Db\Entity\PerformerLineup $performerLineup)
    {
        $this->performerLineup[] = $performerLineup;
    
        return $this;
    }

    /**
     * Remove performerLineup
     *
     * @param \Db\Entity\PerformerLineup $performerLineup
     */
    public function removePerformerLineup(\Db\Entity\PerformerLineup $performerLineup)
    {
        $this->performerLineup->removeElement($performerLineup);
    }

    /**
     * Get performerLineup
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerformerLineup()
    {
        return $this->performerLineup;
    }

    /**
     * Add performance
     *
     * @param \Db\Entity\Performance $performance
     * @return Lineup
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
     * Set band
     *
     * @param \Db\Entity\Band $band
     * @return Lineup
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
}
