<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 *
 * @deprecated Deprecated, this is no longer used.
 */
class RedirectPaymentProduct809SpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $issuerId = null;

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
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->issuerId !== null) {
            $object->issuerId = $this->issuerId;
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
        return $this;
    }
}
