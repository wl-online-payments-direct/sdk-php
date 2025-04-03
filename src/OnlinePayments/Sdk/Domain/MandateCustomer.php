<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MandateCustomer extends DataObject
{
    /**
     * @var BankAccountIban
     */
    public $bankAccountIban = null;

    /**
     * @var string
     */
    public $companyName = null;

    /**
     * @var MandateContactDetails
     */
    public $contactDetails = null;

    /**
     * @var MandateAddress
     */
    public $mandateAddress = null;

    /**
     * @var MandatePersonalInformation
     */
    public $personalInformation = null;

    /**
     * @return BankAccountIban
     */
    public function getBankAccountIban()
    {
        return $this->bankAccountIban;
    }

    /**
     * @param BankAccountIban
     */
    public function setBankAccountIban($value)
    {
        $this->bankAccountIban = $value;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string
     */
    public function setCompanyName($value)
    {
        $this->companyName = $value;
    }

    /**
     * @return MandateContactDetails
     */
    public function getContactDetails()
    {
        return $this->contactDetails;
    }

    /**
     * @param MandateContactDetails
     */
    public function setContactDetails($value)
    {
        $this->contactDetails = $value;
    }

    /**
     * @return MandateAddress
     */
    public function getMandateAddress()
    {
        return $this->mandateAddress;
    }

    /**
     * @param MandateAddress
     */
    public function setMandateAddress($value)
    {
        $this->mandateAddress = $value;
    }

    /**
     * @return MandatePersonalInformation
     */
    public function getPersonalInformation()
    {
        return $this->personalInformation;
    }

    /**
     * @param MandatePersonalInformation
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
        if (!is_null($this->bankAccountIban)) {
            $object->bankAccountIban = $this->bankAccountIban->toObject();
        }
        if (!is_null($this->companyName)) {
            $object->companyName = $this->companyName;
        }
        if (!is_null($this->contactDetails)) {
            $object->contactDetails = $this->contactDetails->toObject();
        }
        if (!is_null($this->mandateAddress)) {
            $object->mandateAddress = $this->mandateAddress->toObject();
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
        if (property_exists($object, 'bankAccountIban')) {
            if (!is_object($object->bankAccountIban)) {
                throw new UnexpectedValueException('value \'' . print_r($object->bankAccountIban, true) . '\' is not an object');
            }
            $value = new BankAccountIban();
            $this->bankAccountIban = $value->fromObject($object->bankAccountIban);
        }
        if (property_exists($object, 'companyName')) {
            $this->companyName = $object->companyName;
        }
        if (property_exists($object, 'contactDetails')) {
            if (!is_object($object->contactDetails)) {
                throw new UnexpectedValueException('value \'' . print_r($object->contactDetails, true) . '\' is not an object');
            }
            $value = new MandateContactDetails();
            $this->contactDetails = $value->fromObject($object->contactDetails);
        }
        if (property_exists($object, 'mandateAddress')) {
            if (!is_object($object->mandateAddress)) {
                throw new UnexpectedValueException('value \'' . print_r($object->mandateAddress, true) . '\' is not an object');
            }
            $value = new MandateAddress();
            $this->mandateAddress = $value->fromObject($object->mandateAddress);
        }
        if (property_exists($object, 'personalInformation')) {
            if (!is_object($object->personalInformation)) {
                throw new UnexpectedValueException('value \'' . print_r($object->personalInformation, true) . '\' is not an object');
            }
            $value = new MandatePersonalInformation();
            $this->personalInformation = $value->fromObject($object->personalInformation);
        }
        return $this;
    }
}
