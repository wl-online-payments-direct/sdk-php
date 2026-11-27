<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct840SpecificOutput extends DataObject
{
    /**
     * @var Address|null
     */
    public ?Address $billingAddress = null;

    /**
     * @var AddressPersonal|null
     */
    public ?AddressPersonal $billingPersonalAddress = null;

    /**
     * @var PaymentProduct840CustomerAccount|null
     */
    public ?PaymentProduct840CustomerAccount $customerAccount = null;

    /**
     * @var Address|null
     */
    public ?Address $customerAddress = null;

    /**
     * @var string|null
     */
    public ?string $payPalTransactionId = null;

    /**
     * @var ProtectionEligibility|null
     */
    public ?ProtectionEligibility $protectionEligibility = null;

    /**
     * @var AddressPersonal|null
     */
    public ?AddressPersonal $shippingAddress = null;

    /**
     * @return Address|null
     */
    public function getBillingAddress(): ?Address
    {
        return $this->billingAddress;
    }

    /**
     * @param Address|null $value
     */
    public function setBillingAddress(?Address $value): void
    {
        $this->billingAddress = $value;
    }

    /**
     * @param Address|null $value
     * @return $this
     */
    public function withBillingAddress(?Address $value): static
    {
        $this->billingAddress = $value;
        return $this;
    }

    /**
     * @return AddressPersonal|null
     */
    public function getBillingPersonalAddress(): ?AddressPersonal
    {
        return $this->billingPersonalAddress;
    }

    /**
     * @param AddressPersonal|null $value
     */
    public function setBillingPersonalAddress(?AddressPersonal $value): void
    {
        $this->billingPersonalAddress = $value;
    }

    /**
     * @param AddressPersonal|null $value
     * @return $this
     */
    public function withBillingPersonalAddress(?AddressPersonal $value): static
    {
        $this->billingPersonalAddress = $value;
        return $this;
    }

    /**
     * @return PaymentProduct840CustomerAccount|null
     */
    public function getCustomerAccount(): ?PaymentProduct840CustomerAccount
    {
        return $this->customerAccount;
    }

    /**
     * @param PaymentProduct840CustomerAccount|null $value
     */
    public function setCustomerAccount(?PaymentProduct840CustomerAccount $value): void
    {
        $this->customerAccount = $value;
    }

    /**
     * @param PaymentProduct840CustomerAccount|null $value
     * @return $this
     */
    public function withCustomerAccount(?PaymentProduct840CustomerAccount $value): static
    {
        $this->customerAccount = $value;
        return $this;
    }

    /**
     * @return Address|null
     */
    public function getCustomerAddress(): ?Address
    {
        return $this->customerAddress;
    }

    /**
     * @param Address|null $value
     */
    public function setCustomerAddress(?Address $value): void
    {
        $this->customerAddress = $value;
    }

    /**
     * @param Address|null $value
     * @return $this
     */
    public function withCustomerAddress(?Address $value): static
    {
        $this->customerAddress = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPayPalTransactionId(): ?string
    {
        return $this->payPalTransactionId;
    }

    /**
     * @param string|null $value
     */
    public function setPayPalTransactionId(?string $value): void
    {
        $this->payPalTransactionId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPayPalTransactionId(?string $value): static
    {
        $this->payPalTransactionId = $value;
        return $this;
    }

    /**
     * @return ProtectionEligibility|null
     */
    public function getProtectionEligibility(): ?ProtectionEligibility
    {
        return $this->protectionEligibility;
    }

    /**
     * @param ProtectionEligibility|null $value
     */
    public function setProtectionEligibility(?ProtectionEligibility $value): void
    {
        $this->protectionEligibility = $value;
    }

    /**
     * @param ProtectionEligibility|null $value
     * @return $this
     */
    public function withProtectionEligibility(?ProtectionEligibility $value): static
    {
        $this->protectionEligibility = $value;
        return $this;
    }

    /**
     * @return AddressPersonal|null
     */
    public function getShippingAddress(): ?AddressPersonal
    {
        return $this->shippingAddress;
    }

    /**
     * @param AddressPersonal|null $value
     */
    public function setShippingAddress(?AddressPersonal $value): void
    {
        $this->shippingAddress = $value;
    }

    /**
     * @param AddressPersonal|null $value
     * @return $this
     */
    public function withShippingAddress(?AddressPersonal $value): static
    {
        $this->shippingAddress = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->billingAddress !== null) {
            $object->billingAddress = $this->billingAddress->toObject();
        }
        if ($this->billingPersonalAddress !== null) {
            $object->billingPersonalAddress = $this->billingPersonalAddress->toObject();
        }
        if ($this->customerAccount !== null) {
            $object->customerAccount = $this->customerAccount->toObject();
        }
        if ($this->customerAddress !== null) {
            $object->customerAddress = $this->customerAddress->toObject();
        }
        if ($this->payPalTransactionId !== null) {
            $object->payPalTransactionId = $this->payPalTransactionId;
        }
        if ($this->protectionEligibility !== null) {
            $object->protectionEligibility = $this->protectionEligibility->toObject();
        }
        if ($this->shippingAddress !== null) {
            $object->shippingAddress = $this->shippingAddress->toObject();
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
        if (property_exists($object, 'billingAddress')) {
            if (!is_object($object->billingAddress)) {
                throw new UnexpectedValueException('value \'' . print_r($object->billingAddress, true) . '\' is not an object');
            }
            $value = new Address();
            $this->billingAddress = $value->fromObject($object->billingAddress);
        }
        if (property_exists($object, 'billingPersonalAddress')) {
            if (!is_object($object->billingPersonalAddress)) {
                throw new UnexpectedValueException('value \'' . print_r($object->billingPersonalAddress, true) . '\' is not an object');
            }
            $value = new AddressPersonal();
            $this->billingPersonalAddress = $value->fromObject($object->billingPersonalAddress);
        }
        if (property_exists($object, 'customerAccount')) {
            if (!is_object($object->customerAccount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customerAccount, true) . '\' is not an object');
            }
            $value = new PaymentProduct840CustomerAccount();
            $this->customerAccount = $value->fromObject($object->customerAccount);
        }
        if (property_exists($object, 'customerAddress')) {
            if (!is_object($object->customerAddress)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customerAddress, true) . '\' is not an object');
            }
            $value = new Address();
            $this->customerAddress = $value->fromObject($object->customerAddress);
        }
        if (property_exists($object, 'payPalTransactionId')) {
            $this->payPalTransactionId = $object->payPalTransactionId;
        }
        if (property_exists($object, 'protectionEligibility')) {
            if (!is_object($object->protectionEligibility)) {
                throw new UnexpectedValueException('value \'' . print_r($object->protectionEligibility, true) . '\' is not an object');
            }
            $value = new ProtectionEligibility();
            $this->protectionEligibility = $value->fromObject($object->protectionEligibility);
        }
        if (property_exists($object, 'shippingAddress')) {
            if (!is_object($object->shippingAddress)) {
                throw new UnexpectedValueException('value \'' . print_r($object->shippingAddress, true) . '\' is not an object');
            }
            $value = new AddressPersonal();
            $this->shippingAddress = $value->fromObject($object->shippingAddress);
        }
        return $this;
    }
}
