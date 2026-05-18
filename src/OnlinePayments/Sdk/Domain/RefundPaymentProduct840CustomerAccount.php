<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundPaymentProduct840CustomerAccount extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $customerAccountStatus = null;

    /**
     * @var string|null
     */
    public ?string $customerAddressStatus = null;

    /**
     * @var string|null
     */
    public ?string $payerId = null;

    /**
     * @return string|null
     */
    public function getCustomerAccountStatus(): ?string
    {
        return $this->customerAccountStatus;
    }

    /**
     * @param string|null $value
     */
    public function setCustomerAccountStatus(?string $value): void
    {
        $this->customerAccountStatus = $value;
    }

    /**
     * @return string|null
     */
    public function getCustomerAddressStatus(): ?string
    {
        return $this->customerAddressStatus;
    }

    /**
     * @param string|null $value
     */
    public function setCustomerAddressStatus(?string $value): void
    {
        $this->customerAddressStatus = $value;
    }

    /**
     * @return string|null
     */
    public function getPayerId(): ?string
    {
        return $this->payerId;
    }

    /**
     * @param string|null $value
     */
    public function setPayerId(?string $value): void
    {
        $this->payerId = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->customerAccountStatus)) {
            $object->customerAccountStatus = $this->customerAccountStatus;
        }
        if (!is_null($this->customerAddressStatus)) {
            $object->customerAddressStatus = $this->customerAddressStatus;
        }
        if (!is_null($this->payerId)) {
            $object->payerId = $this->payerId;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RefundPaymentProduct840CustomerAccount
    {
        parent::fromObject($object);
        if (property_exists($object, 'customerAccountStatus')) {
            $this->customerAccountStatus = $object->customerAccountStatus;
        }
        if (property_exists($object, 'customerAddressStatus')) {
            $this->customerAddressStatus = $object->customerAddressStatus;
        }
        if (property_exists($object, 'payerId')) {
            $this->payerId = $object->payerId;
        }
        return $this;
    }
}
