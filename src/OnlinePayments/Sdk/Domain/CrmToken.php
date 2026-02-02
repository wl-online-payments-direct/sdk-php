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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->uniqueAccountIdentifier)) {
            $object->uniqueAccountIdentifier = $this->uniqueAccountIdentifier;
        }
        if (!is_null($this->uniqueCardIdentifier)) {
            $object->uniqueCardIdentifier = $this->uniqueCardIdentifier;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CrmToken
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
