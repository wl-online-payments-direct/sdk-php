<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class BrowserData extends DataObject
{
    // Properties
    /**
     * @var int
     */
    private $colorDepth;

    /**
     * @var bool
     */
    private $javaEnabled;

    /**
     * @var bool
     */
    private $javaScriptEnabled;

    /**
     * @var string
     */
    private $screenHeight;

    /**
     * @var string
     */
    private $screenWidth;

    // Methods
    /**
     * @return int
     */
    public function getColorDepth()
    {
        return $this->colorDepth;
    }
    /**
     * @var int
     */
    public function setColorDepth($value)
    {
        $this->colorDepth = $value;
    }

    /**
     * @return bool
     */
    public function getJavaEnabled()
    {
        return $this->javaEnabled;
    }
    /**
     * @var bool
     */
    public function setJavaEnabled($value)
    {
        $this->javaEnabled = $value;
    }

    /**
     * @return bool
     */
    public function getJavaScriptEnabled()
    {
        return $this->javaScriptEnabled;
    }
    /**
     * @var bool
     */
    public function setJavaScriptEnabled($value)
    {
        $this->javaScriptEnabled = $value;
    }

    /**
     * @return string
     */
    public function getScreenHeight()
    {
        return $this->screenHeight;
    }
    /**
     * @var string
     */
    public function setScreenHeight($value)
    {
        $this->screenHeight = $value;
    }

    /**
     * @return string
     */
    public function getScreenWidth()
    {
        return $this->screenWidth;
    }
    /**
     * @var string
     */
    public function setScreenWidth($value)
    {
        $this->screenWidth = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->colorDepth !== null) {
            $object->colorDepth = $this->colorDepth;
        }
        if ($this->javaEnabled !== null) {
            $object->javaEnabled = $this->javaEnabled;
        }
        if ($this->javaScriptEnabled !== null) {
            $object->javaScriptEnabled = $this->javaScriptEnabled;
        }
        if ($this->screenHeight !== null) {
            $object->screenHeight = $this->screenHeight;
        }
        if ($this->screenWidth !== null) {
            $object->screenWidth = $this->screenWidth;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'colorDepth')) {
            $this->colorDepth = $object->colorDepth;
        }
        if (property_exists($object, 'javaEnabled')) {
            $this->javaEnabled = $object->javaEnabled;
        }
        if (property_exists($object, 'javaScriptEnabled')) {
            $this->javaScriptEnabled = $object->javaScriptEnabled;
        }
        if (property_exists($object, 'screenHeight')) {
            $this->screenHeight = $object->screenHeight;
        }
        if (property_exists($object, 'screenWidth')) {
            $this->screenWidth = $object->screenWidth;
        }
        return $this;
    }
}
