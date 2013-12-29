<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Performer
 */
class Performer
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
    private $note;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performerComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performerLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performerLineup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performerPerformance;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performerAlias;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->performerComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performerLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performerLineup = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performerPerformance = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performerAlias = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set mbid
     *
     * @param string $mbid
     * @return Performer
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
     * @return Performer
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
     * @return Performer
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
     * @return Performer
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
     * Add performerComment
     *
     * @param \Db\Entity\PerformerComment $performerComment
     * @return Performer
     */
    public function addPerformerComment(\Db\Entity\PerformerComment $performerComment)
    {
        $this->performerComment[] = $performerComment;
    
        return $this;
    }

    /**
     * Remove performerComment
     *
     * @param \Db\Entity\PerformerComment $performerComment
     */
    public function removePerformerComment(\Db\Entity\PerformerComment $performerComment)
    {
        $this->performerComment->removeElement($performerComment);
    }

    /**
     * Get performerComment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerformerComment()
    {
        return $this->performerComment;
    }

    /**
     * Add performerLink
     *
     * @param \Db\Entity\PerformerLink $performerLink
     * @return Performer
     */
    public function addPerformerLink(\Db\Entity\PerformerLink $performerLink)
    {
        $this->performerLink[] = $performerLink;
    
        return $this;
    }

    /**
     * Remove performerLink
     *
     * @param \Db\Entity\PerformerLink $performerLink
     */
    public function removePerformerLink(\Db\Entity\PerformerLink $performerLink)
    {
        $this->performerLink->removeElement($performerLink);
    }

    /**
     * Get performerLink
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerformerLink()
    {
        return $this->performerLink;
    }

    /**
     * Add performerLineup
     *
     * @param \Db\Entity\PerformerLineup $performerLineup
     * @return Performer
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
     * Add performerPerformance
     *
     * @param \Db\Entity\PerformerPerformance $performerPerformance
     * @return Performer
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
     * Add performerAlias
     *
     * @param \Db\Entity\PerformerAlias $performerAlias
     * @return Performer
     */
    public function addPerformerAlia(\Db\Entity\PerformerAlias $performerAlias)
    {
        $this->performerAlias[] = $performerAlias;
    
        return $this;
    }

    /**
     * Remove performerAlias
     *
     * @param \Db\Entity\PerformerAlias $performerAlias
     */
    public function removePerformerAlia(\Db\Entity\PerformerAlias $performerAlias)
    {
        $this->performerAlias->removeElement($performerAlias);
    }

    /**
     * Get performerAlias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerformerAlias()
    {
        return $this->performerAlias;
    }
}
