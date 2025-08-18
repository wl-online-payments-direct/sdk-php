<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MandateResponse extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $alias = null;

    /**
     * @var MandateCustomerResponse|null
     */
    public ?MandateCustomerResponse $customer = null;

    /**
     * @var string|null
     */
    public ?string $customerReference = null;

    /**
     * @var string|null
     */
    public ?string $mandatePdf = null;

    /**
     * @var string|null
     */
    public ?string $recurrenceType = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string|null
     */
    public ?string $uniqueMandateReference = null;

    /**
     * @return string|null
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param string|null $value
     */
    public function setAlias(?string $value): void
    {
        $this->alias = $value;
    }

    /**
     * @return MandateCustomerResponse|null
     */
    public function getCustomer(): ?MandateCustomerResponse
    {
        return $this->customer;
    }

    /**
     * @param MandateCustomerResponse|null $value
     */
    public function setCustomer(?MandateCustomerResponse $value): void
    {
        $this->customer = $value;
    }

    /**
     * @return string|null
     */
    public function getCustomerReference(): ?string
    {
        return $this->customerReference;
    }

    /**
     * @param string|null $value
     */
    public function setCustomerReference(?string $value): void
    {
        $this->customerReference = $value;
    }

    /**
     * @return string|null
     */
    public function getMandatePdf(): ?string
    {
        return $this->mandatePdf;
    }

    /**
     * @param string|null $value
     */
    public function setMandatePdf(?string $value): void
    {
        $this->mandatePdf = $value;
    }

    /**
     * @return string|null
     */
    public function getRecurrenceType(): ?string
    {
        return $this->recurrenceType;
    }

    /**
     * @param string|null $value
     */
    public function setRecurrenceType(?string $value): void
    {
        $this->recurrenceType = $value;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $value
     */
    public function setStatus(?string $value): void
    {
        $this->status = $value;
    }

    /**
     * @return string|null
     */
    public function getUniqueMandateReference(): ?string
    {
        return $this->uniqueMandateReference;
    }

    /**
     * @param string|null $value
     */
    public function setUniqueMandateReference(?string $value): void
    {
        $this->uniqueMandateReference = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->alias)) {
            $object->alias = $this->alias;
        }
        if (!is_null($this->customer)) {
            $object->customer = $this->customer->toObject();
        }
        if (!is_null($this->customerReference)) {
            $object->customerReference = $this->customerReference;
        }
        if (!is_null($this->mandatePdf)) {
            $object->mandatePdf = $this->mandatePdf;
        }
        if (!is_null($this->recurrenceType)) {
            $object->recurrenceType = $this->recurrenceType;
        }
        if (!is_null($this->status)) {
            $object->status = $this->status;
        }
        if (!is_null($this->uniqueMandateReference)) {
            $object->uniqueMandateReference = $this->uniqueMandateReference;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): MandateResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'alias')) {
            $this->alias = $object->alias;
        }
        if (property_exists($object, 'customer')) {
            if (!is_object($object->customer)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customer, true) . '\' is not an object');
            }
            $value = new MandateCustomerResponse();
            $this->customer = $value->fromObject($object->customer);
        }
        if (property_exists($object, 'customerReference')) {
            $this->customerReference = $object->customerReference;
        }
        if (property_exists($object, 'mandatePdf')) {
            $this->mandatePdf = $object->mandatePdf;
        }
        if (property_exists($object, 'recurrenceType')) {
            $this->recurrenceType = $object->recurrenceType;
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'uniqueMandateReference')) {
            $this->uniqueMandateReference = $object->uniqueMandateReference;
        }
        return $this;
    }
}
