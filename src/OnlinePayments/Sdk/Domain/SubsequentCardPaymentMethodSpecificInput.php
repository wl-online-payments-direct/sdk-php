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
class SubsequentCardPaymentMethodSpecificInput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $authorizationMode;

    /**
     * @var int
     */
    private $paymentNumber;

    /**
     * @var string
     */
    private $schemeReferenceData;

    /**
     * @var string
     */
    private $subsequentType;

    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $transactionChannel;

    // Methods
    /**
     * @return string
     */
    public function getAuthorizationMode()
    {
        return $this->authorizationMode;
    }
    /**
     * @var string
     */
    public function setAuthorizationMode($value)
    {
        $this->authorizationMode = $value;
    }

    /**
     * @return int
     */
    public function getPaymentNumber()
    {
        return $this->paymentNumber;
    }
    /**
     * @var int
     */
    public function setPaymentNumber($value)
    {
        $this->paymentNumber = $value;
    }

    /**
     * @return string
     */
    public function getSchemeReferenceData()
    {
        return $this->schemeReferenceData;
    }
    /**
     * @var string
     */
    public function setSchemeReferenceData($value)
    {
        $this->schemeReferenceData = $value;
    }

    /**
     * @return string
     */
    public function getSubsequentType()
    {
        return $this->subsequentType;
    }
    /**
     * @var string
     */
    public function setSubsequentType($value)
    {
        $this->subsequentType = $value;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * @var string
     */
    public function setToken($value)
    {
        $this->token = $value;
    }

    /**
     * @return string
     */
    public function getTransactionChannel()
    {
        return $this->transactionChannel;
    }
    /**
     * @var string
     */
    public function setTransactionChannel($value)
    {
        $this->transactionChannel = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->authorizationMode !== null) {
            $object->authorizationMode = $this->authorizationMode;
        }
        if ($this->paymentNumber !== null) {
            $object->paymentNumber = $this->paymentNumber;
        }
        if ($this->schemeReferenceData !== null) {
            $object->schemeReferenceData = $this->schemeReferenceData;
        }
        if ($this->subsequentType !== null) {
            $object->subsequentType = $this->subsequentType;
        }
        if ($this->token !== null) {
            $object->token = $this->token;
        }
        if ($this->transactionChannel !== null) {
            $object->transactionChannel = $this->transactionChannel;
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
        if (property_exists($object, 'authorizationMode')) {
            $this->authorizationMode = $object->authorizationMode;
        }
        if (property_exists($object, 'paymentNumber')) {
            $this->paymentNumber = $object->paymentNumber;
        }
        if (property_exists($object, 'schemeReferenceData')) {
            $this->schemeReferenceData = $object->schemeReferenceData;
        }
        if (property_exists($object, 'subsequentType')) {
            $this->subsequentType = $object->subsequentType;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        if (property_exists($object, 'transactionChannel')) {
            $this->transactionChannel = $object->transactionChannel;
        }
        return $this;
    }
}
