<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AcquirerSelectionInformation extends DataObject
{
    /**
     * @var int
     */
    public $fallbackLevel = null;

    /**
     * @var string
     */
    public $result = null;

    /**
     * @var string
     */
    public $ruleName = null;

    /**
     * @return int
     */
    public function getFallbackLevel()
    {
        return $this->fallbackLevel;
    }

    /**
     * @param int
     */
    public function setFallbackLevel($value)
    {
        $this->fallbackLevel = $value;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param string
     */
    public function setResult($value)
    {
        $this->result = $value;
    }

    /**
     * @return string
     */
    public function getRuleName()
    {
        return $this->ruleName;
    }

    /**
     * @param string
     */
    public function setRuleName($value)
    {
        $this->ruleName = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->fallbackLevel)) {
            $object->fallbackLevel = $this->fallbackLevel;
        }
        if (!is_null($this->result)) {
            $object->result = $this->result;
        }
        if (!is_null($this->ruleName)) {
            $object->ruleName = $this->ruleName;
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
        if (property_exists($object, 'fallbackLevel')) {
            $this->fallbackLevel = $object->fallbackLevel;
        }
        if (property_exists($object, 'result')) {
            $this->result = $object->result;
        }
        if (property_exists($object, 'ruleName')) {
            $this->ruleName = $object->ruleName;
        }
        return $this;
    }
}
