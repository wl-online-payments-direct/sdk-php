<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductSession302SpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $displayName = null;

    /**
     * @var string|null
     */
    public ?string $domainName = null;

    /**
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    /**
     * @param string|null $value
     */
    public function setDisplayName(?string $value): void
    {
        $this->displayName = $value;
    }

    /**
     * @return string|null
     */
    public function getDomainName(): ?string
    {
        return $this->domainName;
    }

    /**
     * @param string|null $value
     */
    public function setDomainName(?string $value): void
    {
        $this->domainName = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->displayName)) {
            $object->displayName = $this->displayName;
        }
        if (!is_null($this->domainName)) {
            $object->domainName = $this->domainName;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProductSession302SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'displayName')) {
            $this->displayName = $object->displayName;
        }
        if (property_exists($object, 'domainName')) {
            $this->domainName = $object->domainName;
        }
        return $this;
    }
}
