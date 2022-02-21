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
class OrderStatusOutput extends DataObject
{
    // Properties
    /**
     * @var APIError[]
     */
    private $errors;

    /**
     * @var bool
     */
    private $isCancellable;

    /**
     * @var string
     */
    private $statusCategory;

    /**
     * @var int
     */
    private $statusCode;

    /**
     * @var string
     */
    private $statusCodeChangeDateTime;

    // Methods
    /**
     * @return APIError[]
     */
    public function getErrors()
    {
        return $this->errors;
    }
    /**
     * @var APIError[]
     */
    public function setErrors($value)
    {
        $this->errors = $value;
    }

    /**
     * @return bool
     */
    public function getIsCancellable()
    {
        return $this->isCancellable;
    }
    /**
     * @var bool
     */
    public function setIsCancellable($value)
    {
        $this->isCancellable = $value;
    }

    /**
     * @return string
     */
    public function getStatusCategory()
    {
        return $this->statusCategory;
    }
    /**
     * @var string
     */
    public function setStatusCategory($value)
    {
        $this->statusCategory = $value;
    }

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
     * @return string
     */
    public function getStatusCodeChangeDateTime()
    {
        return $this->statusCodeChangeDateTime;
    }
    /**
     * @var string
     */
    public function setStatusCodeChangeDateTime($value)
    {
        $this->statusCodeChangeDateTime = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->errors !== null) {
            $object->errors = [];
            foreach ($this->errors as $element) {
                if ($element !== null) {
                    $object->errors[] = $element->toObject();
                }
            }
        }
        if ($this->isCancellable !== null) {
            $object->isCancellable = $this->isCancellable;
        }
        if ($this->statusCategory !== null) {
            $object->statusCategory = $this->statusCategory;
        }
        if ($this->statusCode !== null) {
            $object->statusCode = $this->statusCode;
        }
        if ($this->statusCodeChangeDateTime !== null) {
            $object->statusCodeChangeDateTime = $this->statusCodeChangeDateTime;
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
        if (property_exists($object, 'errors')) {
            if (!is_array($object->errors) && !is_object($object->errors)) {
                throw new UnexpectedValueException('value \'' . print_r($object->errors, true) . '\' is not an array or object');
            }
            $this->errors = [];
            foreach ($object->errors as $element) {
                $value = new APIError();
                $this->errors[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'isCancellable')) {
            $this->isCancellable = $object->isCancellable;
        }
        if (property_exists($object, 'statusCategory')) {
            $this->statusCategory = $object->statusCategory;
        }
        if (property_exists($object, 'statusCode')) {
            $this->statusCode = $object->statusCode;
        }
        if (property_exists($object, 'statusCodeChangeDateTime')) {
            $this->statusCodeChangeDateTime = $object->statusCodeChangeDateTime;
        }
        return $this;
    }
}
