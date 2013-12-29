<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VenueGroup
 */
class VenueGroup
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
    private $venueToVenueGroup;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->venueToVenueGroup = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return VenueGroup
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
     * @return VenueGroup
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
     * @return VenueGroup
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
     * Add venueToVenueGroup
     *
     * @param \Db\Entity\VenueToVenueGroup $venueToVenueGroup
     * @return VenueGroup
     */
    public function addVenueToVenueGroup(\Db\Entity\VenueToVenueGroup $venueToVenueGroup)
    {
        $this->venueToVenueGroup[] = $venueToVenueGroup;
    
        return $this;
    }

    /**
     * Remove venueToVenueGroup
     *
     * @param \Db\Entity\VenueToVenueGroup $venueToVenueGroup
     */
    public function removeVenueToVenueGroup(\Db\Entity\VenueToVenueGroup $venueToVenueGroup)
    {
        $this->venueToVenueGroup->removeElement($venueToVenueGroup);
    }

    /**
     * Get venueToVenueGroup
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVenueToVenueGroup()
    {
        return $this->venueToVenueGroup;
    }
}
