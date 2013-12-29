<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var string
     */
    private $displayName;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $note;

    /**
     * @var boolean
     */
    private $isPublic;

    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var string
     */
    private $permission;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $subscription;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $bandComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performerComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $songComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sourceComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performanceComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $venueComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $eventComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lineupComment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $bandLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performerLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $songLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sourceLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $performanceLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $venueLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $eventLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lineupLink;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $bandGroup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $userToUserRole;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $userMeta;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bandComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performerComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->songComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sourceComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performanceComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->venueComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->eventComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lineupComment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->bandLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performerLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->songLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sourceLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->performanceLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->venueLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->eventLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lineupLink = new \Doctrine\Common\Collections\ArrayCollection();
        $this->bandGroup = new \Doctrine\Common\Collections\ArrayCollection();
        $this->userToUserRole = new \Doctrine\Common\Collections\ArrayCollection();
        $this->userMeta = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set displayName
     *
     * @param string $displayName
     * @return User
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    
        return $this;
    }

    /**
     * Get displayName
     *
     * @return string 
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return User
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
     * Set isPublic
     *
     * @param boolean $isPublic
     * @return User
     */
    public function setIsPublic($isPublic)
    {
        $this->isPublic = $isPublic;
    
        return $this;
    }

    /**
     * Get isPublic
     *
     * @return boolean 
     */
    public function getIsPublic()
    {
        return $this->isPublic;
    }

    /**
     * Set accessToken
     *
     * @param string $accessToken
     * @return User
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    
        return $this;
    }

    /**
     * Get accessToken
     *
     * @return string 
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Set permission
     *
     * @param string $permission
     * @return User
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
    
        return $this;
    }

    /**
     * Get permission
     *
     * @return string 
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set subscription
     *
     * @param string $subscription
     * @return User
     */
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;
    
        return $this;
    }

    /**
     * Get subscription
     *
     * @return string 
     */
    public function getSubscription()
    {
        return $this->subscription;
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
     * Add bandComment
     *
     * @param \Db\Entity\BandComment $bandComment
     * @return User
     */
    public function addBandComment(\Db\Entity\BandComment $bandComment)
    {
        $this->bandComment[] = $bandComment;
    
        return $this;
    }

    /**
     * Remove bandComment
     *
     * @param \Db\Entity\BandComment $bandComment
     */
    public function removeBandComment(\Db\Entity\BandComment $bandComment)
    {
        $this->bandComment->removeElement($bandComment);
    }

    /**
     * Get bandComment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBandComment()
    {
        return $this->bandComment;
    }

    /**
     * Add performerComment
     *
     * @param \Db\Entity\PerformerComment $performerComment
     * @return User
     */
    public function addPerformerComment(\Db\Entity\PerformerComment $performerComment)
    {
        $this->performerComment[] = $performerComment;
    
        return $this;
    }

    /**
     * Remove performerComment
     *
     * @param \Db\Entity\PerformerComment $performerComment
     */
    public function removePerformerComment(\Db\Entity\PerformerComment $performerComment)
    {
        $this->performerComment->removeElement($performerComment);
    }

    /**
     * Get performerComment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerformerComment()
    {
        return $this->performerComment;
    }

    /**
     * Add songComment
     *
     * @param \Db\Entity\SongComment $songComment
     * @return User
     */
    public function addSongComment(\Db\Entity\SongComment $songComment)
    {
        $this->songComment[] = $songComment;
    
        return $this;
    }

    /**
     * Remove songComment
     *
     * @param \Db\Entity\SongComment $songComment
     */
    public function removeSongComment(\Db\Entity\SongComment $songComment)
    {
        $this->songComment->removeElement($songComment);
    }

    /**
     * Get songComment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSongComment()
    {
        return $this->songComment;
    }

    /**
     * Add sourceComment
     *
     * @param \Db\Entity\SourceComment $sourceComment
     * @return User
     */
    public function addSourceComment(\Db\Entity\SourceComment $sourceComment)
    {
        $this->sourceComment[] = $sourceComment;
    
        return $this;
    }

    /**
     * Remove sourceComment
     *
     * @param \Db\Entity\SourceComment $sourceComment
     */
    public function removeSourceComment(\Db\Entity\SourceComment $sourceComment)
    {
        $this->sourceComment->removeElement($sourceComment);
    }

    /**
     * Get sourceComment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSourceComment()
    {
        return $this->sourceComment;
    }

    /**
     * Add performanceComment
     *
     * @param \Db\Entity\PerformanceComment $performanceComment
     * @return User
     */
    public function addPerformanceComment(\Db\Entity\PerformanceComment $performanceComment)
    {
        $this->performanceComment[] = $performanceComment;
    
        return $this;
    }

    /**
     * Remove performanceComment
     *
     * @param \Db\Entity\PerformanceComment $performanceComment
     */
    public function removePerformanceComment(\Db\Entity\PerformanceComment $performanceComment)
    {
        $this->performanceComment->removeElement($performanceComment);
    }

    /**
     * Get performanceComment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerformanceComment()
    {
        return $this->performanceComment;
    }

    /**
     * Add venueComment
     *
     * @param \Db\Entity\VenueComment $venueComment
     * @return User
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
     * Add eventComment
     *
     * @param \Db\Entity\EventComment $eventComment
     * @return User
     */
    public function addEventComment(\Db\Entity\EventComment $eventComment)
    {
        $this->eventComment[] = $eventComment;
    
        return $this;
    }

    /**
     * Remove eventComment
     *
     * @param \Db\Entity\EventComment $eventComment
     */
    public function removeEventComment(\Db\Entity\EventComment $eventComment)
    {
        $this->eventComment->removeElement($eventComment);
    }

    /**
     * Get eventComment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEventComment()
    {
        return $this->eventComment;
    }

    /**
     * Add lineupComment
     *
     * @param \Db\Entity\LineupComment $lineupComment
     * @return User
     */
    public function addLineupComment(\Db\Entity\LineupComment $lineupComment)
    {
        $this->lineupComment[] = $lineupComment;
    
        return $this;
    }

    /**
     * Remove lineupComment
     *
     * @param \Db\Entity\LineupComment $lineupComment
     */
    public function removeLineupComment(\Db\Entity\LineupComment $lineupComment)
    {
        $this->lineupComment->removeElement($lineupComment);
    }

    /**
     * Get lineupComment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLineupComment()
    {
        return $this->lineupComment;
    }

    /**
     * Add bandLink
     *
     * @param \Db\Entity\BandLink $bandLink
     * @return User
     */
    public function addBandLink(\Db\Entity\BandLink $bandLink)
    {
        $this->bandLink[] = $bandLink;
    
        return $this;
    }

    /**
     * Remove bandLink
     *
     * @param \Db\Entity\BandLink $bandLink
     */
    public function removeBandLink(\Db\Entity\BandLink $bandLink)
    {
        $this->bandLink->removeElement($bandLink);
    }

    /**
     * Get bandLink
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBandLink()
    {
        return $this->bandLink;
    }

    /**
     * Add performerLink
     *
     * @param \Db\Entity\PerformerLink $performerLink
     * @return User
     */
    public function addPerformerLink(\Db\Entity\PerformerLink $performerLink)
    {
        $this->performerLink[] = $performerLink;
    
        return $this;
    }

    /**
     * Remove performerLink
     *
     * @param \Db\Entity\PerformerLink $performerLink
     */
    public function removePerformerLink(\Db\Entity\PerformerLink $performerLink)
    {
        $this->performerLink->removeElement($performerLink);
    }

    /**
     * Get performerLink
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerformerLink()
    {
        return $this->performerLink;
    }

    /**
     * Add songLink
     *
     * @param \Db\Entity\SongLink $songLink
     * @return User
     */
    public function addSongLink(\Db\Entity\SongLink $songLink)
    {
        $this->songLink[] = $songLink;
    
        return $this;
    }

    /**
     * Remove songLink
     *
     * @param \Db\Entity\SongLink $songLink
     */
    public function removeSongLink(\Db\Entity\SongLink $songLink)
    {
        $this->songLink->removeElement($songLink);
    }

    /**
     * Get songLink
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSongLink()
    {
        return $this->songLink;
    }

    /**
     * Add sourceLink
     *
     * @param \Db\Entity\SourceLink $sourceLink
     * @return User
     */
    public function addSourceLink(\Db\Entity\SourceLink $sourceLink)
    {
        $this->sourceLink[] = $sourceLink;
    
        return $this;
    }

    /**
     * Remove sourceLink
     *
     * @param \Db\Entity\SourceLink $sourceLink
     */
    public function removeSourceLink(\Db\Entity\SourceLink $sourceLink)
    {
        $this->sourceLink->removeElement($sourceLink);
    }

    /**
     * Get sourceLink
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSourceLink()
    {
        return $this->sourceLink;
    }

    /**
     * Add performanceLink
     *
     * @param \Db\Entity\PerformanceLink $performanceLink
     * @return User
     */
    public function addPerformanceLink(\Db\Entity\PerformanceLink $performanceLink)
    {
        $this->performanceLink[] = $performanceLink;
    
        return $this;
    }

    /**
     * Remove performanceLink
     *
     * @param \Db\Entity\PerformanceLink $performanceLink
     */
    public function removePerformanceLink(\Db\Entity\PerformanceLink $performanceLink)
    {
        $this->performanceLink->removeElement($performanceLink);
    }

    /**
     * Get performanceLink
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerformanceLink()
    {
        return $this->performanceLink;
    }

    /**
     * Add venueLink
     *
     * @param \Db\Entity\VenueLink $venueLink
     * @return User
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
     * Add eventLink
     *
     * @param \Db\Entity\EventLink $eventLink
     * @return User
     */
    public function addEventLink(\Db\Entity\EventLink $eventLink)
    {
        $this->eventLink[] = $eventLink;
    
        return $this;
    }

    /**
     * Remove eventLink
     *
     * @param \Db\Entity\EventLink $eventLink
     */
    public function removeEventLink(\Db\Entity\EventLink $eventLink)
    {
        $this->eventLink->removeElement($eventLink);
    }

    /**
     * Get eventLink
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEventLink()
    {
        return $this->eventLink;
    }

    /**
     * Add lineupLink
     *
     * @param \Db\Entity\LineupLink $lineupLink
     * @return User
     */
    public function addLineupLink(\Db\Entity\LineupLink $lineupLink)
    {
        $this->lineupLink[] = $lineupLink;
    
        return $this;
    }

    /**
     * Remove lineupLink
     *
     * @param \Db\Entity\LineupLink $lineupLink
     */
    public function removeLineupLink(\Db\Entity\LineupLink $lineupLink)
    {
        $this->lineupLink->removeElement($lineupLink);
    }

    /**
     * Get lineupLink
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLineupLink()
    {
        return $this->lineupLink;
    }

    /**
     * Add bandGroup
     *
     * @param \Db\Entity\UserToBandGroup $bandGroup
     * @return User
     */
    public function addBandGroup(\Db\Entity\UserToBandGroup $bandGroup)
    {
        $this->bandGroup[] = $bandGroup;
    
        return $this;
    }

    /**
     * Remove bandGroup
     *
     * @param \Db\Entity\UserToBandGroup $bandGroup
     */
    public function removeBandGroup(\Db\Entity\UserToBandGroup $bandGroup)
    {
        $this->bandGroup->removeElement($bandGroup);
    }

    /**
     * Get bandGroup
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBandGroup()
    {
        return $this->bandGroup;
    }

    /**
     * Add userToUserRole
     *
     * @param \Db\Entity\UserToUserRole $userToUserRole
     * @return User
     */
    public function addUserToUserRole(\Db\Entity\UserToUserRole $userToUserRole)
    {
        $this->userToUserRole[] = $userToUserRole;
    
        return $this;
    }

    /**
     * Remove userToUserRole
     *
     * @param \Db\Entity\UserToUserRole $userToUserRole
     */
    public function removeUserToUserRole(\Db\Entity\UserToUserRole $userToUserRole)
    {
        $this->userToUserRole->removeElement($userToUserRole);
    }

    /**
     * Get userToUserRole
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserToUserRole()
    {
        return $this->userToUserRole;
    }

    /**
     * Add userMeta
     *
     * @param \Db\Entity\UserMeta $userMeta
     * @return User
     */
    public function addUserMeta(\Db\Entity\UserMeta $userMeta)
    {
        $this->userMeta[] = $userMeta;
    
        return $this;
    }

    /**
     * Remove userMeta
     *
     * @param \Db\Entity\UserMeta $userMeta
     */
    public function removeUserMeta(\Db\Entity\UserMeta $userMeta)
    {
        $this->userMeta->removeElement($userMeta);
    }

    /**
     * Get userMeta
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserMeta()
    {
        return $this->userMeta;
    }
}
