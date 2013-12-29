<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerformanceSetSong
 */
class PerformanceSetSong
{
    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $length;

    /**
     * @var boolean
     */
    private $isSegue;

    /**
     * @var integer
     */
    private $sort;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Db\Entity\Song
     */
    private $song;

    /**
     * @var \Db\Entity\PerformanceSet
     */
    private $performanceSet;


    /**
     * Set note
     *
     * @param string $note
     * @return PerformanceSetSong
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
     * Set length
     *
     * @param string $length
     * @return PerformanceSetSong
     */
    public function setLength($length)
    {
        $this->length = $length;
    
        return $this;
    }

    /**
     * Get length
     *
     * @return string 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set isSegue
     *
     * @param boolean $isSegue
     * @return PerformanceSetSong
     */
    public function setIsSegue($isSegue)
    {
        $this->isSegue = $isSegue;
    
        return $this;
    }

    /**
     * Get isSegue
     *
     * @return boolean 
     */
    public function getIsSegue()
    {
        return $this->isSegue;
    }

    /**
     * Set sort
     *
     * @param integer $sort
     * @return PerformanceSetSong
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
     * Set song
     *
     * @param \Db\Entity\Song $song
     * @return PerformanceSetSong
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
     * Set performanceSet
     *
     * @param \Db\Entity\PerformanceSet $performanceSet
     * @return PerformanceSetSong
     */
    public function setPerformanceSet(\Db\Entity\PerformanceSet $performanceSet)
    {
        $this->performanceSet = $performanceSet;
    
        return $this;
    }

    /**
     * Get performanceSet
     *
     * @return \Db\Entity\PerformanceSet 
     */
    public function getPerformanceSet()
    {
        return $this->performanceSet;
    }
}
