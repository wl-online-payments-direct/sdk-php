<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class LineItem extends DataObject
{
    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $amountOfMoney = null;

    /**
     * @var LineItemInvoiceData|null
     */
    public ?LineItemInvoiceData $invoiceData = null;

    /**
     * @var OrderLineDetails|null
     */
    public ?OrderLineDetails $orderLineDetails = null;

    /**
     * @var OtherDetails|null
     */
    public ?OtherDetails $otherDetails = null;

    /**
     * @return AmountOfMoney|null
     */
    public function getAmountOfMoney(): ?AmountOfMoney
    {
        return $this->amountOfMoney;
    }

    /**
     * @param AmountOfMoney|null $value
     */
    public function setAmountOfMoney(?AmountOfMoney $value): void
    {
        $this->amountOfMoney = $value;
    }

    /**
     * @return LineItemInvoiceData|null
     */
    public function getInvoiceData(): ?LineItemInvoiceData
    {
        return $this->invoiceData;
    }

    /**
     * @param LineItemInvoiceData|null $value
     */
    public function setInvoiceData(?LineItemInvoiceData $value): void
    {
        $this->invoiceData = $value;
    }

    /**
     * @return OrderLineDetails|null
     */
    public function getOrderLineDetails(): ?OrderLineDetails
    {
        return $this->orderLineDetails;
    }

    /**
     * @param OrderLineDetails|null $value
     */
    public function setOrderLineDetails(?OrderLineDetails $value): void
    {
        $this->orderLineDetails = $value;
    }

    /**
     * @return OtherDetails|null
     */
    public function getOtherDetails(): ?OtherDetails
    {
        return $this->otherDetails;
    }

    /**
     * @param OtherDetails|null $value
     */
    public function setOtherDetails(?OtherDetails $value): void
    {
        $this->otherDetails = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->amountOfMoney)) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if (!is_null($this->invoiceData)) {
            $object->invoiceData = $this->invoiceData->toObject();
        }
        if (!is_null($this->orderLineDetails)) {
            $object->orderLineDetails = $this->orderLineDetails->toObject();
        }
        if (!is_null($this->otherDetails)) {
            $object->otherDetails = $this->otherDetails->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): LineItem
    {
        parent::fromObject($object);
        if (property_exists($object, 'amountOfMoney')) {
            if (!is_object($object->amountOfMoney)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amountOfMoney, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amountOfMoney = $value->fromObject($object->amountOfMoney);
        }
        if (property_exists($object, 'invoiceData')) {
            if (!is_object($object->invoiceData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->invoiceData, true) . '\' is not an object');
            }
            $value = new LineItemInvoiceData();
            $this->invoiceData = $value->fromObject($object->invoiceData);
        }
        if (property_exists($object, 'orderLineDetails')) {
            if (!is_object($object->orderLineDetails)) {
                throw new UnexpectedValueException('value \'' . print_r($object->orderLineDetails, true) . '\' is not an object');
            }
            $value = new OrderLineDetails();
            $this->orderLineDetails = $value->fromObject($object->orderLineDetails);
        }
        if (property_exists($object, 'otherDetails')) {
            if (!is_object($object->otherDetails)) {
                throw new UnexpectedValueException('value \'' . print_r($object->otherDetails, true) . '\' is not an object');
            }
            $value = new OtherDetails();
            $this->otherDetails = $value->fromObject($object->otherDetails);
        }
        return $this;
    }
}
