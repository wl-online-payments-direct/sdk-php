<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ReattemptInstructionsConditions extends DataObject
{
    /**
     * @var int
     */
    public $maxAttempts = null;

    /**
     * @var int
     */
    public $maxDelay = null;

    /**
     * @return int
     */
    public function getMaxAttempts()
    {
        return $this->maxAttempts;
    }

    /**
     * @param int
     */
    public function setMaxAttempts($value)
    {
        $this->maxAttempts = $value;
    }

    /**
     * @return int
     */
    public function getMaxDelay()
    {
        return $this->maxDelay;
    }

    /**
     * @param int
     */
    public function setMaxDelay($value)
    {
        $this->maxDelay = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->maxAttempts)) {
            $object->maxAttempts = $this->maxAttempts;
        }
        if (!is_null($this->maxDelay)) {
            $object->maxDelay = $this->maxDelay;
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
        if (property_exists($object, 'maxAttempts')) {
            $this->maxAttempts = $object->maxAttempts;
        }
        if (property_exists($object, 'maxDelay')) {
            $this->maxDelay = $object->maxDelay;
        }
        return $this;
    }
}
