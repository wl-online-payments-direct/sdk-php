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
     * @var string|null
     */
    public ?string $authorizationMode = null;

    /**
     * @var MobilePaymentProduct302SpecificInput|null
     */
    public ?MobilePaymentProduct302SpecificInput $paymentProduct302SpecificInput = null;

    /**
     * @var MobilePaymentProduct320SpecificInput|null
     */
    public ?MobilePaymentProduct320SpecificInput $paymentProduct320SpecificInput = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @return string|null
     */
    public function getAuthorizationMode(): ?string
    {
        return $this->authorizationMode;
    }

    /**
     * @param string|null $value
     */
    public function setAuthorizationMode(?string $value): void
    {
        $this->authorizationMode = $value;
    }

    /**
     * @return MobilePaymentProduct302SpecificInput|null
     */
    public function getPaymentProduct302SpecificInput(): ?MobilePaymentProduct302SpecificInput
    {
        return $this->paymentProduct302SpecificInput;
    }

    /**
     * @param MobilePaymentProduct302SpecificInput|null $value
     */
    public function setPaymentProduct302SpecificInput(?MobilePaymentProduct302SpecificInput $value): void
    {
        $this->paymentProduct302SpecificInput = $value;
    }

    /**
     * @return MobilePaymentProduct320SpecificInput|null
     */
    public function getPaymentProduct320SpecificInput(): ?MobilePaymentProduct320SpecificInput
    {
        return $this->paymentProduct320SpecificInput;
    }

    /**
     * @param MobilePaymentProduct320SpecificInput|null $value
     */
    public function setPaymentProduct320SpecificInput(?MobilePaymentProduct320SpecificInput $value): void
    {
        $this->paymentProduct320SpecificInput = $value;
    }

    /**
     * @return int|null
     */
    public function getPaymentProductId(): ?int
    {
        return $this->paymentProductId;
    }

    /**
     * @param int|null $value
     */
    public function setPaymentProductId(?int $value): void
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): MobilePaymentMethodHostedCheckoutSpecificInput
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
