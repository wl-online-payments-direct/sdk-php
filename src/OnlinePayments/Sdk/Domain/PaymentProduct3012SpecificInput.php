<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct3012SpecificInput extends DataObject
{
    /**
     * @var bool
     */
    public $forceAuthentication = null;

    /**
     * @var bool
     */
    public $isDeferredPayment = null;

    /**
     * @var bool
     */
    public $isWipTransaction = null;

    /**
     * @var string
     */
    public $wipMerchantAuthenticationMethod = null;

    /**
     * @return bool
     */
    public function getForceAuthentication()
    {
        return $this->forceAuthentication;
    }

    /**
     * @param bool
     */
    public function setForceAuthentication($value)
    {
        $this->forceAuthentication = $value;
    }

    /**
     * @return bool
     */
    public function getIsDeferredPayment()
    {
        return $this->isDeferredPayment;
    }

    /**
     * @param bool
     */
    public function setIsDeferredPayment($value)
    {
        $this->isDeferredPayment = $value;
    }

    /**
     * @return bool
     */
    public function getIsWipTransaction()
    {
        return $this->isWipTransaction;
    }

    /**
     * @param bool
     */
    public function setIsWipTransaction($value)
    {
        $this->isWipTransaction = $value;
    }

    /**
     * @return string
     */
    public function getWipMerchantAuthenticationMethod()
    {
        return $this->wipMerchantAuthenticationMethod;
    }

    /**
     * @param string
     */
    public function setWipMerchantAuthenticationMethod($value)
    {
        $this->wipMerchantAuthenticationMethod = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->forceAuthentication)) {
            $object->forceAuthentication = $this->forceAuthentication;
        }
        if (!is_null($this->isDeferredPayment)) {
            $object->isDeferredPayment = $this->isDeferredPayment;
        }
        if (!is_null($this->isWipTransaction)) {
            $object->isWipTransaction = $this->isWipTransaction;
        }
        if (!is_null($this->wipMerchantAuthenticationMethod)) {
            $object->wipMerchantAuthenticationMethod = $this->wipMerchantAuthenticationMethod;
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
        if (property_exists($object, 'forceAuthentication')) {
            $this->forceAuthentication = $object->forceAuthentication;
        }
        if (property_exists($object, 'isDeferredPayment')) {
            $this->isDeferredPayment = $object->isDeferredPayment;
        }
        if (property_exists($object, 'isWipTransaction')) {
            $this->isWipTransaction = $object->isWipTransaction;
        }
        if (property_exists($object, 'wipMerchantAuthenticationMethod')) {
            $this->wipMerchantAuthenticationMethod = $object->wipMerchantAuthenticationMethod;
        }
        return $this;
    }
}
