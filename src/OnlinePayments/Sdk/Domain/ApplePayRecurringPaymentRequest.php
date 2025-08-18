<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ApplePayRecurringPaymentRequest extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $billingAgreement = null;

    /**
     * @var string|null
     */
    public ?string $managementUrl = null;

    /**
     * @var string|null
     */
    public ?string $paymentDescription = null;

    /**
     * @var ApplePayLineItem|null
     */
    public ?ApplePayLineItem $regularBilling = null;

    /**
     * @var ApplePayLineItem|null
     */
    public ?ApplePayLineItem $trialBilling = null;

    /**
     * @return string|null
     */
    public function getBillingAgreement(): ?string
    {
        return $this->billingAgreement;
    }

    /**
     * @param string|null $value
     */
    public function setBillingAgreement(?string $value): void
    {
        $this->billingAgreement = $value;
    }

    /**
     * @return string|null
     */
    public function getManagementUrl(): ?string
    {
        return $this->managementUrl;
    }

    /**
     * @param string|null $value
     */
    public function setManagementUrl(?string $value): void
    {
        $this->managementUrl = $value;
    }

    /**
     * @return string|null
     */
    public function getPaymentDescription(): ?string
    {
        return $this->paymentDescription;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentDescription(?string $value): void
    {
        $this->paymentDescription = $value;
    }

    /**
     * @return ApplePayLineItem|null
     */
    public function getRegularBilling(): ?ApplePayLineItem
    {
        return $this->regularBilling;
    }

    /**
     * @param ApplePayLineItem|null $value
     */
    public function setRegularBilling(?ApplePayLineItem $value): void
    {
        $this->regularBilling = $value;
    }

    /**
     * @return ApplePayLineItem|null
     */
    public function getTrialBilling(): ?ApplePayLineItem
    {
        return $this->trialBilling;
    }

    /**
     * @param ApplePayLineItem|null $value
     */
    public function setTrialBilling(?ApplePayLineItem $value): void
    {
        $this->trialBilling = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->billingAgreement)) {
            $object->billingAgreement = $this->billingAgreement;
        }
        if (!is_null($this->managementUrl)) {
            $object->managementUrl = $this->managementUrl;
        }
        if (!is_null($this->paymentDescription)) {
            $object->paymentDescription = $this->paymentDescription;
        }
        if (!is_null($this->regularBilling)) {
            $object->regularBilling = $this->regularBilling->toObject();
        }
        if (!is_null($this->trialBilling)) {
            $object->trialBilling = $this->trialBilling->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ApplePayRecurringPaymentRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'billingAgreement')) {
            $this->billingAgreement = $object->billingAgreement;
        }
        if (property_exists($object, 'managementUrl')) {
            $this->managementUrl = $object->managementUrl;
        }
        if (property_exists($object, 'paymentDescription')) {
            $this->paymentDescription = $object->paymentDescription;
        }
        if (property_exists($object, 'regularBilling')) {
            if (!is_object($object->regularBilling)) {
                throw new UnexpectedValueException('value \'' . print_r($object->regularBilling, true) . '\' is not an object');
            }
            $value = new ApplePayLineItem();
            $this->regularBilling = $value->fromObject($object->regularBilling);
        }
        if (property_exists($object, 'trialBilling')) {
            if (!is_object($object->trialBilling)) {
                throw new UnexpectedValueException('value \'' . print_r($object->trialBilling, true) . '\' is not an object');
            }
            $value = new ApplePayLineItem();
            $this->trialBilling = $value->fromObject($object->trialBilling);
        }
        return $this;
    }
}
