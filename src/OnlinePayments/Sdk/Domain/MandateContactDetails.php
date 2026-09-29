<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MandateContactDetails extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $emailAddress = null;

    /**
     * @var string|null
    */
    public ?string $phoneNumber = null;

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
     * @return MandateContactDetails
    */
    public function withEmailAddress(?string $value): MandateContactDetails
    {
        $this->emailAddress = $value;
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
     * @return MandateContactDetails
    */
    public function withPhoneNumber(?string $value): MandateContactDetails
    {
        $this->phoneNumber = $value;
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
        if (!is_null($this->phoneNumber)) {
            $object->phoneNumber = $this->phoneNumber;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): MandateContactDetails
    {
        parent::fromObject($object);
        if (property_exists($object, 'emailAddress')) {
            $this->emailAddress = $object->emailAddress;
        }
        if (property_exists($object, 'phoneNumber')) {
            $this->phoneNumber = $object->phoneNumber;
        }
        return $this;
    }
}
