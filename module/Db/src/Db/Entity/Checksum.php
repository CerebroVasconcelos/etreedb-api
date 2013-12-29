<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Checksum
 */
class Checksum
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Db\Entity\Source
     */
    private $source;


    /**
     * Set name
     *
     * @param string $name
     * @return Checksum
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
     * Set content
     *
     * @param string $content
     * @return Checksum
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
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
     * Set source
     *
     * @param \Db\Entity\Source $source
     * @return Checksum
     */
    public function setSource(\Db\Entity\Source $source)
    {
        $this->source = $source;
    
        return $this;
    }

    /**
     * Get source
     *
     * @return \Db\Entity\Source 
     */
    public function getSource()
    {
        return $this->source;
    }
}
