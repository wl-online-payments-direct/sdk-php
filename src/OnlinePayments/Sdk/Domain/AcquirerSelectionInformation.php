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
class AcquirerSelectionInformation extends DataObject
{
    // Properties
    /**
     * @var int
     */
    private $fallbackLevel;

    /**
     * @var string
     */
    private $result;

    /**
     * @var string
     */
    private $ruleName;

    // Methods
    /**
     * @return int
     */
    public function getFallbackLevel()
    {
        return $this->fallbackLevel;
    }
    /**
     * @var int
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
     * @var string
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
     * @var string
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
        if ($this->fallbackLevel !== null) {
            $object->fallbackLevel = $this->fallbackLevel;
        }
        if ($this->result !== null) {
            $object->result = $this->result;
        }
        if ($this->ruleName !== null) {
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
