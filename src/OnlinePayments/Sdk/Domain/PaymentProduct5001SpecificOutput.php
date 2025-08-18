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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->accountNumber)) {
            $object->accountNumber = $this->accountNumber;
        }
        if (!is_null($this->authorisationCode)) {
            $object->authorisationCode = $this->authorisationCode;
        }
        if (!is_null($this->liability)) {
            $object->liability = $this->liability;
        }
        if (!is_null($this->mobilePhoneNumber)) {
            $object->mobilePhoneNumber = $this->mobilePhoneNumber;
        }
        if (!is_null($this->operationCode)) {
            $object->operationCode = $this->operationCode;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct5001SpecificOutput
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
