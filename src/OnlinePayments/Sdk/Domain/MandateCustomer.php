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
     * @var BankAccountIban|null
     */
    public ?BankAccountIban $bankAccountIban = null;

    /**
     * @var string|null
     */
    public ?string $companyName = null;

    /**
     * @var MandateContactDetails|null
     */
    public ?MandateContactDetails $contactDetails = null;

    /**
     * @var MandateAddress|null
     */
    public ?MandateAddress $mandateAddress = null;

    /**
     * @var MandatePersonalInformation|null
     */
    public ?MandatePersonalInformation $personalInformation = null;

    /**
     * @return BankAccountIban|null
     */
    public function getBankAccountIban(): ?BankAccountIban
    {
        return $this->bankAccountIban;
    }

    /**
     * @param BankAccountIban|null $value
     */
    public function setBankAccountIban(?BankAccountIban $value): void
    {
        $this->bankAccountIban = $value;
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
     * @return MandateContactDetails|null
     */
    public function getContactDetails(): ?MandateContactDetails
    {
        return $this->contactDetails;
    }

    /**
     * @param MandateContactDetails|null $value
     */
    public function setContactDetails(?MandateContactDetails $value): void
    {
        $this->contactDetails = $value;
    }

    /**
     * @return MandateAddress|null
     */
    public function getMandateAddress(): ?MandateAddress
    {
        return $this->mandateAddress;
    }

    /**
     * @param MandateAddress|null $value
     */
    public function setMandateAddress(?MandateAddress $value): void
    {
        $this->mandateAddress = $value;
    }

    /**
     * @return MandatePersonalInformation|null
     */
    public function getPersonalInformation(): ?MandatePersonalInformation
    {
        return $this->personalInformation;
    }

    /**
     * @param MandatePersonalInformation|null $value
     */
    public function setPersonalInformation(?MandatePersonalInformation $value): void
    {
        $this->personalInformation = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): MandateCustomer
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
