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
     * @param BankAccountIban|null $value
     * @return MandateCustomer
    */
    public function withBankAccountIban(?BankAccountIban $value): MandateCustomer
    {
        $this->bankAccountIban = $value;
        return $this;
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
     * @param string|null $value
     * @return MandateCustomer
    */
    public function withCompanyName(?string $value): MandateCustomer
    {
        $this->companyName = $value;
        return $this;
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
     * @param MandateContactDetails|null $value
     * @return MandateCustomer
    */
    public function withContactDetails(?MandateContactDetails $value): MandateCustomer
    {
        $this->contactDetails = $value;
        return $this;
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
     * @param MandateAddress|null $value
     * @return MandateCustomer
    */
    public function withMandateAddress(?MandateAddress $value): MandateCustomer
    {
        $this->mandateAddress = $value;
        return $this;
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
     * @param MandatePersonalInformation|null $value
     * @return MandateCustomer
    */
    public function withPersonalInformation(?MandatePersonalInformation $value): MandateCustomer
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
     *
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
