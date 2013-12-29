<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VenueToVenueGroup
 */
class VenueToVenueGroup
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Db\Entity\Venue
     */
    private $venue;

    /**
     * @var \Db\Entity\VenueGroup
     */
    private $venueGroup;


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
     * Set venue
     *
     * @param \Db\Entity\Venue $venue
     * @return VenueToVenueGroup
     */
    public function setVenue(\Db\Entity\Venue $venue)
    {
        $this->venue = $venue;
    
        return $this;
    }

    /**
     * Get venue
     *
     * @return \Db\Entity\Venue 
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * Set venueGroup
     *
     * @param \Db\Entity\VenueGroup $venueGroup
     * @return VenueToVenueGroup
     */
    public function setVenueGroup(\Db\Entity\VenueGroup $venueGroup)
    {
        $this->venueGroup = $venueGroup;
    
        return $this;
    }

    /**
     * Get venueGroup
     *
     * @return \Db\Entity\VenueGroup 
     */
    public function getVenueGroup()
    {
        return $this->venueGroup;
    }
}
