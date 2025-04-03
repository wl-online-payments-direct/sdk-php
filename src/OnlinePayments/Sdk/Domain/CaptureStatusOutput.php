<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CaptureStatusOutput extends DataObject
{
    /**
     * @var int
     */
    public $statusCode = null;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int
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
        if (!is_null($this->statusCode)) {
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
