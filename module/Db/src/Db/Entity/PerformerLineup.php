<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerformerLineup
 */
class PerformerLineup
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
     * @var \Db\Entity\Performer
     */
    private $performer;

    /**
     * @var \Db\Entity\Lineup
     */
    private $lineup;


    /**
     * Set note
     *
     * @param string $note
     * @return PerformerLineup
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
     * Set performer
     *
     * @param \Db\Entity\Performer $performer
     * @return PerformerLineup
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

    /**
     * Set lineup
     *
     * @param \Db\Entity\Lineup $lineup
     * @return PerformerLineup
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
