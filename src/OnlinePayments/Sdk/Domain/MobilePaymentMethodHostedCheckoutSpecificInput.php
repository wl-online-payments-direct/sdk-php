<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MobilePaymentMethodHostedCheckoutSpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $authorizationMode = null;

    /**
     * @var MobilePaymentProduct302SpecificInput
     */
    public $paymentProduct302SpecificInput = null;

    /**
     * @var MobilePaymentProduct320SpecificInput
     */
    public $paymentProduct320SpecificInput = null;

    /**
     * @var int
     */
    public $paymentProductId = null;

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
     * @return MobilePaymentProduct302SpecificInput
     */
    public function getPaymentProduct302SpecificInput()
    {
        return $this->paymentProduct302SpecificInput;
    }

    /**
     * @param MobilePaymentProduct302SpecificInput
     */
    public function setPaymentProduct302SpecificInput($value)
    {
        $this->paymentProduct302SpecificInput = $value;
    }

    /**
     * @return MobilePaymentProduct320SpecificInput
     */
    public function getPaymentProduct320SpecificInput()
    {
        return $this->paymentProduct320SpecificInput;
    }

    /**
     * @param MobilePaymentProduct320SpecificInput
     */
    public function setPaymentProduct320SpecificInput($value)
    {
        $this->paymentProduct320SpecificInput = $value;
    }

    /**
     * @return int
     */
    public function getPaymentProductId()
    {
        return $this->paymentProductId;
    }

    /**
     * @param int
     */
    public function setPaymentProductId($value)
    {
        $this->paymentProductId = $value;
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
        if (!is_null($this->paymentProduct302SpecificInput)) {
            $object->paymentProduct302SpecificInput = $this->paymentProduct302SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct320SpecificInput)) {
            $object->paymentProduct320SpecificInput = $this->paymentProduct320SpecificInput->toObject();
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
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
        if (property_exists($object, 'paymentProduct302SpecificInput')) {
            if (!is_object($object->paymentProduct302SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct302SpecificInput, true) . '\' is not an object');
            }
            $value = new MobilePaymentProduct302SpecificInput();
            $this->paymentProduct302SpecificInput = $value->fromObject($object->paymentProduct302SpecificInput);
        }
        if (property_exists($object, 'paymentProduct320SpecificInput')) {
            if (!is_object($object->paymentProduct320SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct320SpecificInput, true) . '\' is not an object');
            }
            $value = new MobilePaymentProduct320SpecificInput();
            $this->paymentProduct320SpecificInput = $value->fromObject($object->paymentProduct320SpecificInput);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        return $this;
    }
}
