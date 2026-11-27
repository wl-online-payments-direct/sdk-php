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
     * @return $this
     */
    public function withEmailAddress(?string $value): static
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
     * @return $this
     */
    public function withFaxNumber(?string $value): static
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
     * @return $this
     */
    public function withMobilePhoneNumber(?string $value): static
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
     * @return $this
     */
    public function withPhoneNumber(?string $value): static
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
     * @return $this
     */
    public function withWorkPhoneNumber(?string $value): static
    {
        $this->workPhoneNumber = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->emailAddress !== null) {
            $object->emailAddress = $this->emailAddress;
        }
        if ($this->faxNumber !== null) {
            $object->faxNumber = $this->faxNumber;
        }
        if ($this->mobilePhoneNumber !== null) {
            $object->mobilePhoneNumber = $this->mobilePhoneNumber;
        }
        if ($this->phoneNumber !== null) {
            $object->phoneNumber = $this->phoneNumber;
        }
        if ($this->workPhoneNumber !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
