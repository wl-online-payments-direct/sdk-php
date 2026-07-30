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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->pagination)) {
            $object->pagination = $this->pagination->toObject();
        }
        if (!is_null($this->payments)) {
            $object->payments = [];
            foreach ($this->payments as $element) {
                if (!is_null($element)) {
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
    public function fromObject(object $object): PaymentsReportResponse
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
