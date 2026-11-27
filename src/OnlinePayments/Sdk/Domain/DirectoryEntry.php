<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class DirectoryEntry extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $issuerId = null;

    /**
     * @var string|null
     */
    public ?string $issuerList = null;

    /**
     * @var string|null
     */
    public ?string $issuerName = null;

    /**
     * @return string|null
     */
    public function getIssuerId(): ?string
    {
        return $this->issuerId;
    }

    /**
     * @param string|null $value
     */
    public function setIssuerId(?string $value): void
    {
        $this->issuerId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withIssuerId(?string $value): static
    {
        $this->issuerId = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerList(): ?string
    {
        return $this->issuerList;
    }

    /**
     * @param string|null $value
     */
    public function setIssuerList(?string $value): void
    {
        $this->issuerList = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withIssuerList(?string $value): static
    {
        $this->issuerList = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerName(): ?string
    {
        return $this->issuerName;
    }

    /**
     * @param string|null $value
     */
    public function setIssuerName(?string $value): void
    {
        $this->issuerName = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withIssuerName(?string $value): static
    {
        $this->issuerName = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->issuerId !== null) {
            $object->issuerId = $this->issuerId;
        }
        if ($this->issuerList !== null) {
            $object->issuerList = $this->issuerList;
        }
        if ($this->issuerName !== null) {
            $object->issuerName = $this->issuerName;
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
        if (property_exists($object, 'issuerId')) {
            $this->issuerId = $object->issuerId;
        }
        if (property_exists($object, 'issuerList')) {
            $this->issuerList = $object->issuerList;
        }
        if (property_exists($object, 'issuerName')) {
            $this->issuerName = $object->issuerName;
        }
        return $this;
    }
}
