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
class CustomerToken extends DataObject
{
    // Properties
    /**
     * @var Address
     */
    private $billingAddress;

    /**
     * @var CompanyInformation
     */
    private $companyInformation;

    /**
     * @var PersonalInformationToken
     */
    private $personalInformation;

    // Methods
    /**
     * @return Address
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }
    /**
     * @var Address
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
     * @var CompanyInformation
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
     * @var PersonalInformationToken
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
        if ($this->billingAddress !== null) {
            $object->billingAddress = $this->billingAddress->toObject();
        }
        if ($this->companyInformation !== null) {
            $object->companyInformation = $this->companyInformation->toObject();
        }
        if ($this->personalInformation !== null) {
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
