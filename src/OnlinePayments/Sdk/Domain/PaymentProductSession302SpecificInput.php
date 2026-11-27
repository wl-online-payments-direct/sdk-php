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
     * @param string|null $value
     * @return $this
     */
    public function withDisplayName(?string $value): static
    {
        $this->displayName = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withDomainName(?string $value): static
    {
        $this->domainName = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->displayName !== null) {
            $object->displayName = $this->displayName;
        }
        if ($this->domainName !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
