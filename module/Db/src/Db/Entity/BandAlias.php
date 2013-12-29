<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BandAlias
 */
class BandAlias
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
     * @var \Db\Entity\Band
     */
    private $band;


    /**
     * Set name
     *
     * @param string $name
     * @return BandAlias
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
     * @return BandAlias
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
     * @return BandAlias
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
     * Set band
     *
     * @param \Db\Entity\Band $band
     * @return BandAlias
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
