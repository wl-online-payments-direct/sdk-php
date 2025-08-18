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
     * @var ProtectionEligibility|null
     */
    public ?ProtectionEligibility $protectionEligibility = null;

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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->billingAddress)) {
            $object->billingAddress = $this->billingAddress->toObject();
        }
        if (!is_null($this->billingPersonalAddress)) {
            $object->billingPersonalAddress = $this->billingPersonalAddress->toObject();
        }
        if (!is_null($this->customerAccount)) {
            $object->customerAccount = $this->customerAccount->toObject();
        }
        if (!is_null($this->customerAddress)) {
            $object->customerAddress = $this->customerAddress->toObject();
        }
        if (!is_null($this->protectionEligibility)) {
            $object->protectionEligibility = $this->protectionEligibility->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct840SpecificOutput
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
        if (property_exists($object, 'protectionEligibility')) {
            if (!is_object($object->protectionEligibility)) {
                throw new UnexpectedValueException('value \'' . print_r($object->protectionEligibility, true) . '\' is not an object');
            }
            $value = new ProtectionEligibility();
            $this->protectionEligibility = $value->fromObject($object->protectionEligibility);
        }
        return $this;
    }
}
