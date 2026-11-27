<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentsReportResponse extends DataObject
{
    /**
     * @var CursorPaginationInfo|null
     */
    public ?CursorPaginationInfo $pagination = null;

    /**
     * @var PaymentSummary[]|null
     */
    public ?array $payments = null;

    /**
     * @return CursorPaginationInfo|null
     */
    public function getPagination(): ?CursorPaginationInfo
    {
        return $this->pagination;
    }

    /**
     * @param CursorPaginationInfo|null $value
     */
    public function setPagination(?CursorPaginationInfo $value): void
    {
        $this->pagination = $value;
    }

    /**
     * @param CursorPaginationInfo|null $value
     * @return $this
     */
    public function withPagination(?CursorPaginationInfo $value): static
    {
        $this->pagination = $value;
        return $this;
    }

    /**
     * @return PaymentSummary[]|null
     */
    public function getPayments(): ?array
    {
        return $this->payments;
    }

    /**
     * @param PaymentSummary[]|null $value
     */
    public function setPayments(?array $value): void
    {
        $this->payments = $value;
    }

    /**
     * @param PaymentSummary[]|null $value
     * @return $this
     */
    public function withPayments(?array $value): static
    {
        $this->payments = $value;
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
        if ($this->payments !== null) {
            $object->payments = [];
            foreach ($this->payments as $element) {
                if ($element !== null) {
                    $object->payments[] = $element->toObject();
                }
            }
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
            $value = new CursorPaginationInfo();
            $this->pagination = $value->fromObject($object->pagination);
        }
        if (property_exists($object, 'payments')) {
            if (!is_array($object->payments) && !is_object($object->payments)) {
                throw new UnexpectedValueException('value \'' . print_r($object->payments, true) . '\' is not an array or object');
            }
            $this->payments = [];
            foreach ($object->payments as $element) {
                $value = new PaymentSummary();
                $this->payments[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
