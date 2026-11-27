<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct3302SpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $organizationEntityType = null;

    /**
     * @var string|null
     */
    public ?string $organizationRegistrationId = null;

    /**
     * @var string|null
     */
    public ?string $vatId = null;

    /**
     * @return string|null
     */
    public function getOrganizationEntityType(): ?string
    {
        return $this->organizationEntityType;
    }

    /**
     * @param string|null $value
     */
    public function setOrganizationEntityType(?string $value): void
    {
        $this->organizationEntityType = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withOrganizationEntityType(?string $value): static
    {
        $this->organizationEntityType = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrganizationRegistrationId(): ?string
    {
        return $this->organizationRegistrationId;
    }

    /**
     * @param string|null $value
     */
    public function setOrganizationRegistrationId(?string $value): void
    {
        $this->organizationRegistrationId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withOrganizationRegistrationId(?string $value): static
    {
        $this->organizationRegistrationId = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVatId(): ?string
    {
        return $this->vatId;
    }

    /**
     * @param string|null $value
     */
    public function setVatId(?string $value): void
    {
        $this->vatId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withVatId(?string $value): static
    {
        $this->vatId = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->organizationEntityType !== null) {
            $object->organizationEntityType = $this->organizationEntityType;
        }
        if ($this->organizationRegistrationId !== null) {
            $object->organizationRegistrationId = $this->organizationRegistrationId;
        }
        if ($this->vatId !== null) {
            $object->vatId = $this->vatId;
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
        if (property_exists($object, 'organizationEntityType')) {
            $this->organizationEntityType = $object->organizationEntityType;
        }
        if (property_exists($object, 'organizationRegistrationId')) {
            $this->organizationRegistrationId = $object->organizationRegistrationId;
        }
        if (property_exists($object, 'vatId')) {
            $this->vatId = $object->vatId;
        }
        return $this;
    }
}
