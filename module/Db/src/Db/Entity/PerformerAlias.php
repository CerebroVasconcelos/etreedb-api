<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerformerAlias
 */
class PerformerAlias
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
     * @var \Db\Entity\Performer
     */
    private $performer;


    /**
     * Set name
     *
     * @param string $name
     * @return PerformerAlias
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
     * @return PerformerAlias
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
     * @return PerformerAlias
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
     * @return PerformerAlias
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
