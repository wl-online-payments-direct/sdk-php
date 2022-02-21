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
class PaymentErrorResponse extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $errorId;

    /**
     * @var APIError[]
     */
    private $errors;

    /**
     * @var CreatePaymentResponse
     */
    private $paymentResult;

    // Methods
    /**
     * @return string
     */
    public function getErrorId()
    {
        return $this->errorId;
    }
    /**
     * @var string
     */
    public function setErrorId($value)
    {
        $this->errorId = $value;
    }

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
     * @return CreatePaymentResponse
     */
    public function getPaymentResult()
    {
        return $this->paymentResult;
    }
    /**
     * @var CreatePaymentResponse
     */
    public function setPaymentResult($value)
    {
        $this->paymentResult = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->errorId !== null) {
            $object->errorId = $this->errorId;
        }
        if ($this->errors !== null) {
            $object->errors = [];
            foreach ($this->errors as $element) {
                if ($element !== null) {
                    $object->errors[] = $element->toObject();
                }
            }
        }
        if ($this->paymentResult !== null) {
            $object->paymentResult = $this->paymentResult->toObject();
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
        if (property_exists($object, 'errorId')) {
            $this->errorId = $object->errorId;
        }
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
        if (property_exists($object, 'paymentResult')) {
            if (!is_object($object->paymentResult)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentResult, true) . '\' is not an object');
            }
            $value = new CreatePaymentResponse();
            $this->paymentResult = $value->fromObject($object->paymentResult);
        }
        return $this;
    }
}
