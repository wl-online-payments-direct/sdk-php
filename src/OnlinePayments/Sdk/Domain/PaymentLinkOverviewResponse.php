<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentLinkOverviewResponse extends DataObject
{
    /**
     * @var Pagination|null
     */
    public ?Pagination $pagination = null;

    /**
     * @var PaymentLinkOverviewEntry[]|null
     */
    public ?array $paymentLinkOverviewEntries = null;

    /**
     * @var int|null
     */
    public ?int $total = null;

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
     * @return PaymentLinkOverviewEntry[]|null
     */
    public function getPaymentLinkOverviewEntries(): ?array
    {
        return $this->paymentLinkOverviewEntries;
    }

    /**
     * @param PaymentLinkOverviewEntry[]|null $value
     */
    public function setPaymentLinkOverviewEntries(?array $value): void
    {
        $this->paymentLinkOverviewEntries = $value;
    }

    /**
     * @param PaymentLinkOverviewEntry[]|null $value
     * @return $this
     */
    public function withPaymentLinkOverviewEntries(?array $value): static
    {
        $this->paymentLinkOverviewEntries = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param int|null $value
     */
    public function setTotal(?int $value): void
    {
        $this->total = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withTotal(?int $value): static
    {
        $this->total = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->pagination !== null) {
            $object->pagination = $this->pagination->toObject();
        }
        if ($this->paymentLinkOverviewEntries !== null) {
            $object->paymentLinkOverviewEntries = [];
            foreach ($this->paymentLinkOverviewEntries as $element) {
                if ($element !== null) {
                    $object->paymentLinkOverviewEntries[] = $element->toObject();
                }
            }
        }
        if ($this->total !== null) {
            $object->total = $this->total;
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
        if (property_exists($object, 'pagination')) {
            if (!is_object($object->pagination)) {
                throw new UnexpectedValueException('value \'' . print_r($object->pagination, true) . '\' is not an object');
            }
            $value = new Pagination();
            $this->pagination = $value->fromObject($object->pagination);
        }
        if (property_exists($object, 'paymentLinkOverviewEntries')) {
            if (!is_array($object->paymentLinkOverviewEntries) && !is_object($object->paymentLinkOverviewEntries)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentLinkOverviewEntries, true) . '\' is not an array or object');
            }
            $this->paymentLinkOverviewEntries = [];
            foreach ($object->paymentLinkOverviewEntries as $element) {
                $value = new PaymentLinkOverviewEntry();
                $this->paymentLinkOverviewEntries[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'total')) {
            $this->total = $object->total;
        }
        return $this;
    }
}
