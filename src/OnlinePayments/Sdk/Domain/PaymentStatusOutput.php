<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentStatusOutput extends DataObject
{
    /**
     * @var APIError[]
     */
    public $errors = null;

    /**
     * @var bool
     */
    public $isAuthorized = null;

    /**
     * @var bool
     */
    public $isCancellable = null;

    /**
     * @var bool
     */
    public $isRefundable = null;

    /**
     * @var string
     */
    public $statusCategory = null;

    /**
     * @var int
     */
    public $statusCode = null;

    /**
     * @var string
     */
    public $statusCodeChangeDateTime = null;

    /**
     * @return APIError[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param APIError[]
     */
    public function setErrors($value)
    {
        $this->errors = $value;
    }

    /**
     * @return bool
     */
    public function getIsAuthorized()
    {
        return $this->isAuthorized;
    }

    /**
     * @param bool
     */
    public function setIsAuthorized($value)
    {
        $this->isAuthorized = $value;
    }

    /**
     * @return bool
     */
    public function getIsCancellable()
    {
        return $this->isCancellable;
    }

    /**
     * @param bool
     */
    public function setIsCancellable($value)
    {
        $this->isCancellable = $value;
    }

    /**
     * @return bool
     */
    public function getIsRefundable()
    {
        return $this->isRefundable;
    }

    /**
     * @param bool
     */
    public function setIsRefundable($value)
    {
        $this->isRefundable = $value;
    }

    /**
     * @return string
     */
    public function getStatusCategory()
    {
        return $this->statusCategory;
    }

    /**
     * @param string
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
     * @param int
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
     * @param string
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
        if (!is_null($this->errors)) {
            $object->errors = [];
            foreach ($this->errors as $element) {
                if (!is_null($element)) {
                    $object->errors[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->isAuthorized)) {
            $object->isAuthorized = $this->isAuthorized;
        }
        if (!is_null($this->isCancellable)) {
            $object->isCancellable = $this->isCancellable;
        }
        if (!is_null($this->isRefundable)) {
            $object->isRefundable = $this->isRefundable;
        }
        if (!is_null($this->statusCategory)) {
            $object->statusCategory = $this->statusCategory;
        }
        if (!is_null($this->statusCode)) {
            $object->statusCode = $this->statusCode;
        }
        if (!is_null($this->statusCodeChangeDateTime)) {
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
        if (property_exists($object, 'isAuthorized')) {
            $this->isAuthorized = $object->isAuthorized;
        }
        if (property_exists($object, 'isCancellable')) {
            $this->isCancellable = $object->isCancellable;
        }
        if (property_exists($object, 'isRefundable')) {
            $this->isRefundable = $object->isRefundable;
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
