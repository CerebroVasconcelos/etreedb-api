<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BandGroup
 */
class BandGroup
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
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $band;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        $this->band = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return BandGroup
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
     * @return BandGroup
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
     * @return BandGroup
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
     * Add user
     *
     * @param \Db\Entity\UserToBandGroup $user
     * @return BandGroup
     */
    public function addUser(\Db\Entity\UserToBandGroup $user)
    {
        $this->user[] = $user;
    
        return $this;
    }

    /**
     * Remove user
     *
     * @param \Db\Entity\UserToBandGroup $user
     */
    public function removeUser(\Db\Entity\UserToBandGroup $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add band
     *
     * @param \Db\Entity\Band $band
     * @return BandGroup
     */
    public function addBand(\Db\Entity\Band $band)
    {
        $this->band[] = $band;
    
        return $this;
    }

    /**
     * Remove band
     *
     * @param \Db\Entity\Band $band
     */
    public function removeBand(\Db\Entity\Band $band)
    {
        $this->band->removeElement($band);
    }

    /**
     * Get band
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBand()
    {
        return $this->band;
    }
}
