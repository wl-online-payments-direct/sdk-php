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
class PaymentProduct3012SpecificInput extends DataObject
{
    // Properties
    /**
     * @var bool
     */
    private $forceAuthentication;

    /**
     * @var bool
     */
    private $isDeferredPayment;

    /**
     * @var bool
     */
    private $isWipTransaction;

    /**
     * @var string
     */
    private $wipMerchantAuthenticationMethod;

    // Methods
    /**
     * @return bool
     */
    public function getForceAuthentication()
    {
        return $this->forceAuthentication;
    }
    /**
     * @var bool
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
     * @var bool
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
     * @var bool
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
     * @var string
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
        if ($this->forceAuthentication !== null) {
            $object->forceAuthentication = $this->forceAuthentication;
        }
        if ($this->isDeferredPayment !== null) {
            $object->isDeferredPayment = $this->isDeferredPayment;
        }
        if ($this->isWipTransaction !== null) {
            $object->isWipTransaction = $this->isWipTransaction;
        }
        if ($this->wipMerchantAuthenticationMethod !== null) {
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
