<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CustomerToken extends DataObject
{
    /**
     * @var Address|null
    */
    public ?Address $billingAddress = null;

    /**
     * @var CompanyInformation|null
    */
    public ?CompanyInformation $companyInformation = null;

    /**
     * @var PersonalInformationToken|null
    */
    public ?PersonalInformationToken $personalInformation = null;

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
     * @return CustomerToken
    */
    public function withBillingAddress(?Address $value): CustomerToken
    {
        $this->billingAddress = $value;
        return $this;
    }

    /**
     * @return CompanyInformation|null
    */
    public function getCompanyInformation(): ?CompanyInformation
    {
        return $this->companyInformation;
    }

    /**
     * @param CompanyInformation|null $value
    */
    public function setCompanyInformation(?CompanyInformation $value): void
    {
        $this->companyInformation = $value;
    }

    /**
     * @param CompanyInformation|null $value
     * @return CustomerToken
    */
    public function withCompanyInformation(?CompanyInformation $value): CustomerToken
    {
        $this->companyInformation = $value;
        return $this;
    }

    /**
     * @return PersonalInformationToken|null
    */
    public function getPersonalInformation(): ?PersonalInformationToken
    {
        return $this->personalInformation;
    }

    /**
     * @param PersonalInformationToken|null $value
    */
    public function setPersonalInformation(?PersonalInformationToken $value): void
    {
        $this->personalInformation = $value;
    }

    /**
     * @param PersonalInformationToken|null $value
     * @return CustomerToken
    */
    public function withPersonalInformation(?PersonalInformationToken $value): CustomerToken
    {
        $this->personalInformation = $value;
        return $this;
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
        if (!is_null($this->companyInformation)) {
            $object->companyInformation = $this->companyInformation->toObject();
        }
        if (!is_null($this->personalInformation)) {
            $object->personalInformation = $this->personalInformation->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CustomerToken
    {
        parent::fromObject($object);
        if (property_exists($object, 'billingAddress')) {
            if (!is_object($object->billingAddress)) {
                throw new UnexpectedValueException('value \'' . print_r($object->billingAddress, true) . '\' is not an object');
            }
            $value = new Address();
            $this->billingAddress = $value->fromObject($object->billingAddress);
        }
        if (property_exists($object, 'companyInformation')) {
            if (!is_object($object->companyInformation)) {
                throw new UnexpectedValueException('value \'' . print_r($object->companyInformation, true) . '\' is not an object');
            }
            $value = new CompanyInformation();
            $this->companyInformation = $value->fromObject($object->companyInformation);
        }
        if (property_exists($object, 'personalInformation')) {
            if (!is_object($object->personalInformation)) {
                throw new UnexpectedValueException('value \'' . print_r($object->personalInformation, true) . '\' is not an object');
            }
            $value = new PersonalInformationToken();
            $this->personalInformation = $value->fromObject($object->personalInformation);
        }
        return $this;
    }
}
