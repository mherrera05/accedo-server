<?php

namespace AppBundle\Entity;

/**
 * Content
 */
class Content
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $url;

    /**
     * @var integer
     */
    private $format;

    /**
     * @var integer
     */
    private $width;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var string
     */
    private $language;

    /**
     * @var \DateTime
     */
    private $duration;

    /**
     * @var boolean
     */
    private $geoLock;

    /**
     * @var \AppBundle\Entity\Entry
     */
    private $entry;


    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Content
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set format
     *
     * @param integer $format
     *
     * @return Content
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return integer
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set width
     *
     * @param integer $width
     *
     * @return Content
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return Content
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Content
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set duration
     *
     * @param \DateTime $duration
     *
     * @return Content
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return \DateTime
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set geoLock
     *
     * @param boolean $geoLock
     *
     * @return Content
     */
    public function setGeoLock($geoLock)
    {
        $this->geoLock = $geoLock;

        return $this;
    }

    /**
     * Get geoLock
     *
     * @return boolean
     */
    public function getGeoLock()
    {
        return $this->geoLock;
    }

    /**
     * Set entry
     *
     * @param \AppBundle\Entity\Entry $entry
     *
     * @return Content
     */
    public function setEntry(\AppBundle\Entity\Entry $entry = null)
    {
        $this->entry = $entry;

        return $this;
    }

    /**
     * Get entry
     *
     * @return \AppBundle\Entity\Entry
     */
    public function getEntry()
    {
        return $this->entry;
    }
}
