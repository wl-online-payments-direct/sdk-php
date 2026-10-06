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
     * @return PaymentLinkOverviewSorting
    */
    public function withSortDirection(?string $value): PaymentLinkOverviewSorting
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
     * @return PaymentLinkOverviewSorting
    */
    public function withSortProperty(?string $value): PaymentLinkOverviewSorting
    {
        $this->sortProperty = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->sortDirection)) {
            $object->sortDirection = $this->sortDirection;
        }
        if (!is_null($this->sortProperty)) {
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
    public function fromObject(object $object): PaymentLinkOverviewSorting
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
