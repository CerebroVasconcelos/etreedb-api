<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerformerPerformance
 */
class PerformerPerformance
{
    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Db\Entity\Performance
     */
    private $performance;

    /**
     * @var \Db\Entity\Performer
     */
    private $performer;


    /**
     * Set note
     *
     * @param string $note
     * @return PerformerPerformance
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
     * Set performance
     *
     * @param \Db\Entity\Performance $performance
     * @return PerformerPerformance
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

    /**
     * Set performer
     *
     * @param \Db\Entity\Performer $performer
     * @return PerformerPerformance
     */
    public function setPerformer(\Db\Entity\Performer $performer)
    {
        $this->performer = $performer;
    
        return $this;
    }

    /**
     * Get performer
     *
     * @return \Db\Entity\Performer 
     */
    public function getPerformer()
    {
        return $this->performer;
    }
}
