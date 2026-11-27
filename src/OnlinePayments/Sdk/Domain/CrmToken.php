<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CrmToken extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $uniqueAccountIdentifier = null;

    /**
     * @var string|null
     */
    public ?string $uniqueCardIdentifier = null;

    /**
     * @return string|null
     */
    public function getUniqueAccountIdentifier(): ?string
    {
        return $this->uniqueAccountIdentifier;
    }

    /**
     * @param string|null $value
     */
    public function setUniqueAccountIdentifier(?string $value): void
    {
        $this->uniqueAccountIdentifier = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withUniqueAccountIdentifier(?string $value): static
    {
        $this->uniqueAccountIdentifier = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUniqueCardIdentifier(): ?string
    {
        return $this->uniqueCardIdentifier;
    }

    /**
     * @param string|null $value
     */
    public function setUniqueCardIdentifier(?string $value): void
    {
        $this->uniqueCardIdentifier = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withUniqueCardIdentifier(?string $value): static
    {
        $this->uniqueCardIdentifier = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->uniqueAccountIdentifier !== null) {
            $object->uniqueAccountIdentifier = $this->uniqueAccountIdentifier;
        }
        if ($this->uniqueCardIdentifier !== null) {
            $object->uniqueCardIdentifier = $this->uniqueCardIdentifier;
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
        if (property_exists($object, 'uniqueAccountIdentifier')) {
            $this->uniqueAccountIdentifier = $object->uniqueAccountIdentifier;
        }
        if (property_exists($object, 'uniqueCardIdentifier')) {
            $this->uniqueCardIdentifier = $object->uniqueCardIdentifier;
        }
        return $this;
    }
}
