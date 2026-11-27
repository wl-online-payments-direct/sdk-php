<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GetPaymentLinksByMerchantGroupRequest extends DataObject
{
    /**
     * @var PaymentLinkOverviewFiltering|null
     */
    public ?PaymentLinkOverviewFiltering $filtering = null;

    /**
     * @var Pagination|null
     */
    public ?Pagination $pagination = null;

    /**
     * @var PaymentLinkOverviewSorting|null
     */
    public ?PaymentLinkOverviewSorting $sorting = null;

    /**
     * @return PaymentLinkOverviewFiltering|null
     */
    public function getFiltering(): ?PaymentLinkOverviewFiltering
    {
        return $this->filtering;
    }

    /**
     * @param PaymentLinkOverviewFiltering|null $value
     */
    public function setFiltering(?PaymentLinkOverviewFiltering $value): void
    {
        $this->filtering = $value;
    }

    /**
     * @param PaymentLinkOverviewFiltering|null $value
     * @return $this
     */
    public function withFiltering(?PaymentLinkOverviewFiltering $value): static
    {
        $this->filtering = $value;
        return $this;
    }

    /**
     * @return Pagination|null
     */
    public function getPagination(): ?Pagination
    {
        return $this->pagination;
    }

    /**
     * @param Pagination|null $value
     */
    public function setPagination(?Pagination $value): void
    {
        $this->pagination = $value;
    }

    /**
     * @param Pagination|null $value
     * @return $this
     */
    public function withPagination(?Pagination $value): static
    {
        $this->pagination = $value;
        return $this;
    }

    /**
     * @return PaymentLinkOverviewSorting|null
     */
    public function getSorting(): ?PaymentLinkOverviewSorting
    {
        return $this->sorting;
    }

    /**
     * @param PaymentLinkOverviewSorting|null $value
     */
    public function setSorting(?PaymentLinkOverviewSorting $value): void
    {
        $this->sorting = $value;
    }

    /**
     * @param PaymentLinkOverviewSorting|null $value
     * @return $this
     */
    public function withSorting(?PaymentLinkOverviewSorting $value): static
    {
        $this->sorting = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->filtering !== null) {
            $object->filtering = $this->filtering->toObject();
        }
        if ($this->pagination !== null) {
            $object->pagination = $this->pagination->toObject();
        }
        if ($this->sorting !== null) {
            $object->sorting = $this->sorting->toObject();
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
        if (property_exists($object, 'filtering')) {
            if (!is_object($object->filtering)) {
                throw new UnexpectedValueException('value \'' . print_r($object->filtering, true) . '\' is not an object');
            }
            $value = new PaymentLinkOverviewFiltering();
            $this->filtering = $value->fromObject($object->filtering);
        }
        if (property_exists($object, 'pagination')) {
            if (!is_object($object->pagination)) {
                throw new UnexpectedValueException('value \'' . print_r($object->pagination, true) . '\' is not an object');
            }
            $value = new Pagination();
            $this->pagination = $value->fromObject($object->pagination);
        }
        if (property_exists($object, 'sorting')) {
            if (!is_object($object->sorting)) {
                throw new UnexpectedValueException('value \'' . print_r($object->sorting, true) . '\' is not an object');
            }
            $value = new PaymentLinkOverviewSorting();
            $this->sorting = $value->fromObject($object->sorting);
        }
        return $this;
    }
}
