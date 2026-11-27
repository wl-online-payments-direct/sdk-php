<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentLinkOverviewSorting extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $sortDirection = null;

    /**
     * @var string|null
     */
    public ?string $sortProperty = null;

    /**
     * @return string|null
     */
    public function getSortDirection(): ?string
    {
        return $this->sortDirection;
    }

    /**
     * @param string|null $value
     */
    public function setSortDirection(?string $value): void
    {
        $this->sortDirection = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSortDirection(?string $value): static
    {
        $this->sortDirection = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSortProperty(): ?string
    {
        return $this->sortProperty;
    }

    /**
     * @param string|null $value
     */
    public function setSortProperty(?string $value): void
    {
        $this->sortProperty = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSortProperty(?string $value): static
    {
        $this->sortProperty = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->sortDirection !== null) {
            $object->sortDirection = $this->sortDirection;
        }
        if ($this->sortProperty !== null) {
            $object->sortProperty = $this->sortProperty;
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
        if (property_exists($object, 'sortDirection')) {
            $this->sortDirection = $object->sortDirection;
        }
        if (property_exists($object, 'sortProperty')) {
            $this->sortProperty = $object->sortProperty;
        }
        return $this;
    }
}
