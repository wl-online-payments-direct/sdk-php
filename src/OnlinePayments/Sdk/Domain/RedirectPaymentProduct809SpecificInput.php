<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->issuerId)) {
            $object->issuerId = $this->issuerId;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RedirectPaymentProduct809SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'issuerId')) {
            $this->issuerId = $object->issuerId;
        }
        return $this;
    }
}
