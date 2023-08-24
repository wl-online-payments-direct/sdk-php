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
class MobilePaymentMethodHostedCheckoutSpecificInput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $authorizationMode;

    /**
     * @var MobilePaymentProduct320SpecificInput
     */
    private $paymentProduct320SpecificInput;

    /**
     * @var int
     */
    private $paymentProductId;

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
     * @return MobilePaymentProduct320SpecificInput
     */
    public function getPaymentProduct320SpecificInput()
    {
        return $this->paymentProduct320SpecificInput;
    }
    /**
     * @var MobilePaymentProduct320SpecificInput
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
     * @var int
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
        if ($this->authorizationMode !== null) {
            $object->authorizationMode = $this->authorizationMode;
        }
        if ($this->paymentProduct320SpecificInput !== null) {
            $object->paymentProduct320SpecificInput = $this->paymentProduct320SpecificInput->toObject();
        }
        if ($this->paymentProductId !== null) {
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
