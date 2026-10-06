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
     * @return PaymentLinkOverviewResponse
    */
    public function withPagination(?Pagination $value): PaymentLinkOverviewResponse
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
     * @return PaymentLinkOverviewResponse
    */
    public function withPaymentLinkOverviewEntries(?array $value): PaymentLinkOverviewResponse
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
     * @return PaymentLinkOverviewResponse
    */
    public function withTotal(?int $value): PaymentLinkOverviewResponse
    {
        $this->total = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->pagination)) {
            $object->pagination = $this->pagination->toObject();
        }
        if (!is_null($this->paymentLinkOverviewEntries)) {
            $object->paymentLinkOverviewEntries = [];
            foreach ($this->paymentLinkOverviewEntries as $element) {
                if (!is_null($element)) {
                    $object->paymentLinkOverviewEntries[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->total)) {
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
    public function fromObject(object $object): PaymentLinkOverviewResponse
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
