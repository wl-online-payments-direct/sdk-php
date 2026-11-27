<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5001SpecificOutput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $accountNumber = null;

    /**
     * @var string|null
     */
    public ?string $authorisationCode = null;

    /**
     * @var string|null
     */
    public ?string $liability = null;

    /**
     * @var string|null
     */
    public ?string $mobilePhoneNumber = null;

    /**
     * @var string|null
     */
    public ?string $operationCode = null;

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
    public function getAuthorisationCode(): ?string
    {
        return $this->authorisationCode;
    }

    /**
     * @param string|null $value
     */
    public function setAuthorisationCode(?string $value): void
    {
        $this->authorisationCode = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withAuthorisationCode(?string $value): static
    {
        $this->authorisationCode = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLiability(): ?string
    {
        return $this->liability;
    }

    /**
     * @param string|null $value
     */
    public function setLiability(?string $value): void
    {
        $this->liability = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withLiability(?string $value): static
    {
        $this->liability = $value;
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
    public function getOperationCode(): ?string
    {
        return $this->operationCode;
    }

    /**
     * @param string|null $value
     */
    public function setOperationCode(?string $value): void
    {
        $this->operationCode = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withOperationCode(?string $value): static
    {
        $this->operationCode = $value;
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
        if ($this->authorisationCode !== null) {
            $object->authorisationCode = $this->authorisationCode;
        }
        if ($this->liability !== null) {
            $object->liability = $this->liability;
        }
        if ($this->mobilePhoneNumber !== null) {
            $object->mobilePhoneNumber = $this->mobilePhoneNumber;
        }
        if ($this->operationCode !== null) {
            $object->operationCode = $this->operationCode;
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
        if (property_exists($object, 'authorisationCode')) {
            $this->authorisationCode = $object->authorisationCode;
        }
        if (property_exists($object, 'liability')) {
            $this->liability = $object->liability;
        }
        if (property_exists($object, 'mobilePhoneNumber')) {
            $this->mobilePhoneNumber = $object->mobilePhoneNumber;
        }
        if (property_exists($object, 'operationCode')) {
            $this->operationCode = $object->operationCode;
        }
        return $this;
    }
}
