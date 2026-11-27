<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class LoanRecipient extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $accountNumber = null;

    /**
     * @var string|null
     */
    public ?string $dateOfBirth = null;

    /**
     * @var string|null
     */
    public ?string $partialPan = null;

    /**
     * @var string|null
     */
    public ?string $surname = null;

    /**
     * @var string|null
     */
    public ?string $zip = null;

    /**
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * @param string|null $value
     */
    public function setAccountNumber(?string $value): void
    {
        $this->accountNumber = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withAccountNumber(?string $value): static
    {
        $this->accountNumber = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }

    /**
     * @param string|null $value
     */
    public function setDateOfBirth(?string $value): void
    {
        $this->dateOfBirth = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withDateOfBirth(?string $value): static
    {
        $this->dateOfBirth = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPartialPan(): ?string
    {
        return $this->partialPan;
    }

    /**
     * @param string|null $value
     */
    public function setPartialPan(?string $value): void
    {
        $this->partialPan = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPartialPan(?string $value): static
    {
        $this->partialPan = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * @param string|null $value
     */
    public function setSurname(?string $value): void
    {
        $this->surname = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSurname(?string $value): static
    {
        $this->surname = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * @param string|null $value
     */
    public function setZip(?string $value): void
    {
        $this->zip = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withZip(?string $value): static
    {
        $this->zip = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->accountNumber !== null) {
            $object->accountNumber = $this->accountNumber;
        }
        if ($this->dateOfBirth !== null) {
            $object->dateOfBirth = $this->dateOfBirth;
        }
        if ($this->partialPan !== null) {
            $object->partialPan = $this->partialPan;
        }
        if ($this->surname !== null) {
            $object->surname = $this->surname;
        }
        if ($this->zip !== null) {
            $object->zip = $this->zip;
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
        if (property_exists($object, 'accountNumber')) {
            $this->accountNumber = $object->accountNumber;
        }
        if (property_exists($object, 'dateOfBirth')) {
            $this->dateOfBirth = $object->dateOfBirth;
        }
        if (property_exists($object, 'partialPan')) {
            $this->partialPan = $object->partialPan;
        }
        if (property_exists($object, 'surname')) {
            $this->surname = $object->surname;
        }
        if (property_exists($object, 'zip')) {
            $this->zip = $object->zip;
        }
        return $this;
    }
}
