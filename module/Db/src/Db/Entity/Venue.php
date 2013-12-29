<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Venue
 */
class Venue
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
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $zipcode;

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
    private $venueComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $venueLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $venueToVenueGroup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performance;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->venueComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->venueLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->venueToVenueGroup = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performance = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Venue
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
     * @return Venue
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
     * Set city
     *
     * @param string $city
     * @return Venue
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Venue
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Venue
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return Venue
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    
        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Venue
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
     * Add venueComment
     *
     * @param \Db\Entity\VenueComment $venueComment
     * @return Venue
     */
    public function addVenueComment(\Db\Entity\VenueComment $venueComment)
    {
        $this->venueComment[] = $venueComment;
    
        return $this;
    }

    /**
     * Remove venueComment
     *
     * @param \Db\Entity\VenueComment $venueComment
     */
    public function removeVenueComment(\Db\Entity\VenueComment $venueComment)
    {
        $this->venueComment->removeElement($venueComment);
    }

    /**
     * Get venueComment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVenueComment()
    {
        return $this->venueComment;
    }

    /**
     * Add venueLink
     *
     * @param \Db\Entity\VenueLink $venueLink
     * @return Venue
     */
    public function addVenueLink(\Db\Entity\VenueLink $venueLink)
    {
        $this->venueLink[] = $venueLink;
    
        return $this;
    }

    /**
     * Remove venueLink
     *
     * @param \Db\Entity\VenueLink $venueLink
     */
    public function removeVenueLink(\Db\Entity\VenueLink $venueLink)
    {
        $this->venueLink->removeElement($venueLink);
    }

    /**
     * Get venueLink
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVenueLink()
    {
        return $this->venueLink;
    }

    /**
     * Add venueToVenueGroup
     *
     * @param \Db\Entity\VenueToVenueGroup $venueToVenueGroup
     * @return Venue
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

    /**
     * Add performance
     *
     * @param \Db\Entity\Performance $performance
     * @return Venue
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
}
