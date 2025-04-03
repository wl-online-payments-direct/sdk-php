<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SubsequentCardPaymentMethodSpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $authorizationMode = null;

    /**
     * @var int
     */
    public $paymentNumber = null;

    /**
     * @var string
     * @deprecated Deprecated
     */
    public $schemeReferenceData = null;

    /**
     * @var string
     */
    public $subsequentType = null;

    /**
     * @var string
     * @deprecated ID of the token to use to create the payment.
     */
    public $token = null;

    /**
     * @var string
     */
    public $transactionChannel = null;

    /**
     * @return string
     */
    public function getAuthorizationMode()
    {
        return $this->authorizationMode;
    }

    /**
     * @param string
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
     * @param int
     */
    public function setPaymentNumber($value)
    {
        $this->paymentNumber = $value;
    }

    /**
     * @return string
     * @deprecated Deprecated
     */
    public function getSchemeReferenceData()
    {
        return $this->schemeReferenceData;
    }

    /**
     * @param string
     * @deprecated Deprecated
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
     * @param string
     */
    public function setSubsequentType($value)
    {
        $this->subsequentType = $value;
    }

    /**
     * @return string
     * @deprecated ID of the token to use to create the payment.
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string
     * @deprecated ID of the token to use to create the payment.
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
     * @param string
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
        if (!is_null($this->authorizationMode)) {
            $object->authorizationMode = $this->authorizationMode;
        }
        if (!is_null($this->paymentNumber)) {
            $object->paymentNumber = $this->paymentNumber;
        }
        if (!is_null($this->schemeReferenceData)) {
            $object->schemeReferenceData = $this->schemeReferenceData;
        }
        if (!is_null($this->subsequentType)) {
            $object->subsequentType = $this->subsequentType;
        }
        if (!is_null($this->token)) {
            $object->token = $this->token;
        }
        if (!is_null($this->transactionChannel)) {
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
