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
class CaptureStatusOutput extends DataObject
{
    // Properties
    /**
     * @var int
     */
    private $statusCode;

    // Methods
    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    /**
     * @var int
     */
    public function setStatusCode($value)
    {
        $this->statusCode = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->statusCode !== null) {
            $object->statusCode = $this->statusCode;
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
        if (property_exists($object, 'statusCode')) {
            $this->statusCode = $object->statusCode;
        }
        return $this;
    }
}
