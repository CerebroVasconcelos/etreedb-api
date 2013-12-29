<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerformanceSet
 */
class PerformanceSet
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $sort;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performanceSetSong;

    /**
     * @var \Db\Entity\Performance
     */
    private $performance;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->performanceSetSong = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return PerformanceSet
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
     * Set note
     *
     * @param string $note
     * @return PerformanceSet
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
     * Set sort
     *
     * @param integer $sort
     * @return PerformanceSet
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    
        return $this;
    }

    /**
     * Get sort
     *
     * @return integer 
     */
    public function getSort()
    {
        return $this->sort;
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
     * Add performanceSetSong
     *
     * @param \Db\Entity\PerformanceSetSong $performanceSetSong
     * @return PerformanceSet
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
     * Set performance
     *
     * @param \Db\Entity\Performance $performance
     * @return PerformanceSet
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
