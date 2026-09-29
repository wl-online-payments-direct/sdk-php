<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ContactDetails extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $emailAddress = null;

    /**
     * @var string|null
    */
    public ?string $faxNumber = null;

    /**
     * @var string|null
    */
    public ?string $mobilePhoneNumber = null;

    /**
     * @var string|null
    */
    public ?string $phoneNumber = null;

    /**
     * @var string|null
    */
    public ?string $workPhoneNumber = null;

    /**
     * @return string|null
    */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    /**
     * @param string|null $value
    */
    public function setEmailAddress(?string $value): void
    {
        $this->emailAddress = $value;
    }

    /**
     * @param string|null $value
     * @return ContactDetails
    */
    public function withEmailAddress(?string $value): ContactDetails
    {
        $this->emailAddress = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getFaxNumber(): ?string
    {
        return $this->faxNumber;
    }

    /**
     * @param string|null $value
    */
    public function setFaxNumber(?string $value): void
    {
        $this->faxNumber = $value;
    }

    /**
     * @param string|null $value
     * @return ContactDetails
    */
    public function withFaxNumber(?string $value): ContactDetails
    {
        $this->faxNumber = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getMobilePhoneNumber(): ?string
    {
        return $this->mobilePhoneNumber;
    }

    /**
     * @param string|null $value
    */
    public function setMobilePhoneNumber(?string $value): void
    {
        $this->mobilePhoneNumber = $value;
    }

    /**
     * @param string|null $value
     * @return ContactDetails
    */
    public function withMobilePhoneNumber(?string $value): ContactDetails
    {
        $this->mobilePhoneNumber = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string|null $value
    */
    public function setPhoneNumber(?string $value): void
    {
        $this->phoneNumber = $value;
    }

    /**
     * @param string|null $value
     * @return ContactDetails
    */
    public function withPhoneNumber(?string $value): ContactDetails
    {
        $this->phoneNumber = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getWorkPhoneNumber(): ?string
    {
        return $this->workPhoneNumber;
    }

    /**
     * @param string|null $value
    */
    public function setWorkPhoneNumber(?string $value): void
    {
        $this->workPhoneNumber = $value;
    }

    /**
     * @param string|null $value
     * @return ContactDetails
    */
    public function withWorkPhoneNumber(?string $value): ContactDetails
    {
        $this->workPhoneNumber = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->emailAddress)) {
            $object->emailAddress = $this->emailAddress;
        }
        if (!is_null($this->faxNumber)) {
            $object->faxNumber = $this->faxNumber;
        }
        if (!is_null($this->mobilePhoneNumber)) {
            $object->mobilePhoneNumber = $this->mobilePhoneNumber;
        }
        if (!is_null($this->phoneNumber)) {
            $object->phoneNumber = $this->phoneNumber;
        }
        if (!is_null($this->workPhoneNumber)) {
            $object->workPhoneNumber = $this->workPhoneNumber;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ContactDetails
    {
        parent::fromObject($object);
        if (property_exists($object, 'emailAddress')) {
            $this->emailAddress = $object->emailAddress;
        }
        if (property_exists($object, 'faxNumber')) {
            $this->faxNumber = $object->faxNumber;
        }
        if (property_exists($object, 'mobilePhoneNumber')) {
            $this->mobilePhoneNumber = $object->mobilePhoneNumber;
        }
        if (property_exists($object, 'phoneNumber')) {
            $this->phoneNumber = $object->phoneNumber;
        }
        if (property_exists($object, 'workPhoneNumber')) {
            $this->workPhoneNumber = $object->workPhoneNumber;
        }
        return $this;
    }
}
