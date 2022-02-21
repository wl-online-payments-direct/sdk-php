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
class MandateCustomer extends DataObject
{
    // Properties
    /**
     * @var BankAccountIban
     */
    private $bankAccountIban;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var MandateContactDetails
     */
    private $contactDetails;

    /**
     * @var MandateAddress
     */
    private $mandateAddress;

    /**
     * @var MandatePersonalInformation
     */
    private $personalInformation;

    // Methods
    /**
     * @return BankAccountIban
     */
    public function getBankAccountIban()
    {
        return $this->bankAccountIban;
    }
    /**
     * @var BankAccountIban
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
     * @var string
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
     * @var MandateContactDetails
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
     * @var MandateAddress
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
     * @var MandatePersonalInformation
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
        if ($this->bankAccountIban !== null) {
            $object->bankAccountIban = $this->bankAccountIban->toObject();
        }
        if ($this->companyName !== null) {
            $object->companyName = $this->companyName;
        }
        if ($this->contactDetails !== null) {
            $object->contactDetails = $this->contactDetails->toObject();
        }
        if ($this->mandateAddress !== null) {
            $object->mandateAddress = $this->mandateAddress->toObject();
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
