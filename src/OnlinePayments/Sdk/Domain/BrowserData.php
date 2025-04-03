<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class BrowserData extends DataObject
{
    /**
     * @var int
     */
    public $colorDepth = null;

    /**
     * @var bool
     */
    public $javaEnabled = null;

    /**
     * @var bool
     */
    public $javaScriptEnabled = null;

    /**
     * @var string
     */
    public $screenHeight = null;

    /**
     * @var string
     */
    public $screenWidth = null;

    /**
     * @return int
     */
    public function getColorDepth()
    {
        return $this->colorDepth;
    }

    /**
     * @param int
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
     * @param bool
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
     * @param bool
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
     * @param string
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
     * @param string
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
        if (!is_null($this->colorDepth)) {
            $object->colorDepth = $this->colorDepth;
        }
        if (!is_null($this->javaEnabled)) {
            $object->javaEnabled = $this->javaEnabled;
        }
        if (!is_null($this->javaScriptEnabled)) {
            $object->javaScriptEnabled = $this->javaScriptEnabled;
        }
        if (!is_null($this->screenHeight)) {
            $object->screenHeight = $this->screenHeight;
        }
        if (!is_null($this->screenWidth)) {
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
