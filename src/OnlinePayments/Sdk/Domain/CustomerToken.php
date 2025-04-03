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
     * @var Address
     */
    public $billingAddress = null;

    /**
     * @var CompanyInformation
     */
    public $companyInformation = null;

    /**
     * @var PersonalInformationToken
     */
    public $personalInformation = null;

    /**
     * @return Address
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param Address
     */
    public function setBillingAddress($value)
    {
        $this->billingAddress = $value;
    }

    /**
     * @return CompanyInformation
     */
    public function getCompanyInformation()
    {
        return $this->companyInformation;
    }

    /**
     * @param CompanyInformation
     */
    public function setCompanyInformation($value)
    {
        $this->companyInformation = $value;
    }

    /**
     * @return PersonalInformationToken
     */
    public function getPersonalInformation()
    {
        return $this->personalInformation;
    }

    /**
     * @param PersonalInformationToken
     */
    public function setPersonalInformation($value)
    {
        $this->personalInformation = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
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
