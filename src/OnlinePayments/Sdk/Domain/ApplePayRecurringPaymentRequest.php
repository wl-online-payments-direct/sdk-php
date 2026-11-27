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
     * @param string|null $value
     * @return $this
     */
    public function withBillingAgreement(?string $value): static
    {
        $this->billingAgreement = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withManagementUrl(?string $value): static
    {
        $this->managementUrl = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withPaymentDescription(?string $value): static
    {
        $this->paymentDescription = $value;
        return $this;
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
     * @param ApplePayLineItem|null $value
     * @return $this
     */
    public function withRegularBilling(?ApplePayLineItem $value): static
    {
        $this->regularBilling = $value;
        return $this;
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
     * @param ApplePayLineItem|null $value
     * @return $this
     */
    public function withTrialBilling(?ApplePayLineItem $value): static
    {
        $this->trialBilling = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->billingAgreement !== null) {
            $object->billingAgreement = $this->billingAgreement;
        }
        if ($this->managementUrl !== null) {
            $object->managementUrl = $this->managementUrl;
        }
        if ($this->paymentDescription !== null) {
            $object->paymentDescription = $this->paymentDescription;
        }
        if ($this->regularBilling !== null) {
            $object->regularBilling = $this->regularBilling->toObject();
        }
        if ($this->trialBilling !== null) {
            $object->trialBilling = $this->trialBilling->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
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
