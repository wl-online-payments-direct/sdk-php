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
class APIError extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $errorCode;

    /**
     * @var int
     */
    private $httpStatusCode;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $propertyName;

    /**
     * @var bool
     */
    private $retriable;

    // Methods
    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @var string
     */
    public function setCategory($value)
    {
        $this->category = $value;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * @var string
     */
    public function setCode($value)
    {
        $this->code = $value;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    /**
     * @var string
     */
    public function setErrorCode($value)
    {
        $this->errorCode = $value;
    }

    /**
     * @return int
     */
    public function getHttpStatusCode()
    {
        return $this->httpStatusCode;
    }
    /**
     * @var int
     */
    public function setHttpStatusCode($value)
    {
        $this->httpStatusCode = $value;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    public function setId($value)
    {
        $this->id = $value;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * @var string
     */
    public function setMessage($value)
    {
        $this->message = $value;
    }

    /**
     * @return string
     */
    public function getPropertyName()
    {
        return $this->propertyName;
    }
    /**
     * @var string
     */
    public function setPropertyName($value)
    {
        $this->propertyName = $value;
    }

    /**
     * @return bool
     */
    public function getRetriable()
    {
        return $this->retriable;
    }
    /**
     * @var bool
     */
    public function setRetriable($value)
    {
        $this->retriable = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->category !== null) {
            $object->category = $this->category;
        }
        if ($this->code !== null) {
            $object->code = $this->code;
        }
        if ($this->errorCode !== null) {
            $object->errorCode = $this->errorCode;
        }
        if ($this->httpStatusCode !== null) {
            $object->httpStatusCode = $this->httpStatusCode;
        }
        if ($this->id !== null) {
            $object->id = $this->id;
        }
        if ($this->message !== null) {
            $object->message = $this->message;
        }
        if ($this->propertyName !== null) {
            $object->propertyName = $this->propertyName;
        }
        if ($this->retriable !== null) {
            $object->retriable = $this->retriable;
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
        if (property_exists($object, 'category')) {
            $this->category = $object->category;
        }
        if (property_exists($object, 'code')) {
            $this->code = $object->code;
        }
        if (property_exists($object, 'errorCode')) {
            $this->errorCode = $object->errorCode;
        }
        if (property_exists($object, 'httpStatusCode')) {
            $this->httpStatusCode = $object->httpStatusCode;
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'message')) {
            $this->message = $object->message;
        }
        if (property_exists($object, 'propertyName')) {
            $this->propertyName = $object->propertyName;
        }
        if (property_exists($object, 'retriable')) {
            $this->retriable = $object->retriable;
        }
        return $this;
    }
}
