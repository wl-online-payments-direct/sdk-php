<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct840CustomerAccount extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $accountId = null;

    /**
     * @var string|null
     */
    public ?string $companyName = null;

    /**
     * @var string|null
     */
    public ?string $countryCode = null;

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
    public ?string $firstName = null;

    /**
     * @var string|null
     */
    public ?string $payerId = null;

    /**
     * @var string|null
     */
    public ?string $surname = null;

    /**
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * @param string|null $value
     */
    public function setAccountId(?string $value): void
    {
        $this->accountId = $value;
    }

    /**
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @param string|null $value
     */
    public function setCompanyName(?string $value): void
    {
        $this->companyName = $value;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string|null $value
     */
    public function setCountryCode(?string $value): void
    {
        $this->countryCode = $value;
    }

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
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $value
     */
    public function setFirstName(?string $value): void
    {
        $this->firstName = $value;
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
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * @param string|null $value
     */
    public function setSurname(?string $value): void
    {
        $this->surname = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->accountId)) {
            $object->accountId = $this->accountId;
        }
        if (!is_null($this->companyName)) {
            $object->companyName = $this->companyName;
        }
        if (!is_null($this->countryCode)) {
            $object->countryCode = $this->countryCode;
        }
        if (!is_null($this->customerAccountStatus)) {
            $object->customerAccountStatus = $this->customerAccountStatus;
        }
        if (!is_null($this->customerAddressStatus)) {
            $object->customerAddressStatus = $this->customerAddressStatus;
        }
        if (!is_null($this->firstName)) {
            $object->firstName = $this->firstName;
        }
        if (!is_null($this->payerId)) {
            $object->payerId = $this->payerId;
        }
        if (!is_null($this->surname)) {
            $object->surname = $this->surname;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct840CustomerAccount
    {
        parent::fromObject($object);
        if (property_exists($object, 'accountId')) {
            $this->accountId = $object->accountId;
        }
        if (property_exists($object, 'companyName')) {
            $this->companyName = $object->companyName;
        }
        if (property_exists($object, 'countryCode')) {
            $this->countryCode = $object->countryCode;
        }
        if (property_exists($object, 'customerAccountStatus')) {
            $this->customerAccountStatus = $object->customerAccountStatus;
        }
        if (property_exists($object, 'customerAddressStatus')) {
            $this->customerAddressStatus = $object->customerAddressStatus;
        }
        if (property_exists($object, 'firstName')) {
            $this->firstName = $object->firstName;
        }
        if (property_exists($object, 'payerId')) {
            $this->payerId = $object->payerId;
        }
        if (property_exists($object, 'surname')) {
            $this->surname = $object->surname;
        }
        return $this;
    }
}
