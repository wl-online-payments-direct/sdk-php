<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class APIError extends DataObject
{
    /**
     * @var string
     */
    public $category = null;

    /**
     * @var string
     * @deprecated Use errorCode instead. Error code
     */
    public $code = null;

    /**
     * @var string
     */
    public $errorCode = null;

    /**
     * @var int
     */
    public $httpStatusCode = null;

    /**
     * @var string
     */
    public $id = null;

    /**
     * @var string
     */
    public $message = null;

    /**
     * @var string
     */
    public $propertyName = null;

    /**
     * @var bool
     */
    public $retriable = null;

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string
     */
    public function setCategory($value)
    {
        $this->category = $value;
    }

    /**
     * @return string
     * @deprecated Use errorCode instead. Error code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string
     * @deprecated Use errorCode instead. Error code
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
     * @param string
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
     * @param int
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
     * @param string
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
     * @param string
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
     * @param string
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
     * @param bool
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
        if (!is_null($this->category)) {
            $object->category = $this->category;
        }
        if (!is_null($this->code)) {
            $object->code = $this->code;
        }
        if (!is_null($this->errorCode)) {
            $object->errorCode = $this->errorCode;
        }
        if (!is_null($this->httpStatusCode)) {
            $object->httpStatusCode = $this->httpStatusCode;
        }
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->message)) {
            $object->message = $this->message;
        }
        if (!is_null($this->propertyName)) {
            $object->propertyName = $this->propertyName;
        }
        if (!is_null($this->retriable)) {
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
