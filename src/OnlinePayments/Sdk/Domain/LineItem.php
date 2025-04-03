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
     * @var AmountOfMoney
     */
    public $amountOfMoney = null;

    /**
     * @var LineItemInvoiceData
     */
    public $invoiceData = null;

    /**
     * @var OrderLineDetails
     */
    public $orderLineDetails = null;

    /**
     * @var OtherDetails
     */
    public $otherDetails = null;

    /**
     * @return AmountOfMoney
     */
    public function getAmountOfMoney()
    {
        return $this->amountOfMoney;
    }

    /**
     * @param AmountOfMoney
     */
    public function setAmountOfMoney($value)
    {
        $this->amountOfMoney = $value;
    }

    /**
     * @return LineItemInvoiceData
     */
    public function getInvoiceData()
    {
        return $this->invoiceData;
    }

    /**
     * @param LineItemInvoiceData
     */
    public function setInvoiceData($value)
    {
        $this->invoiceData = $value;
    }

    /**
     * @return OrderLineDetails
     */
    public function getOrderLineDetails()
    {
        return $this->orderLineDetails;
    }

    /**
     * @param OrderLineDetails
     */
    public function setOrderLineDetails($value)
    {
        $this->orderLineDetails = $value;
    }

    /**
     * @return OtherDetails
     */
    public function getOtherDetails()
    {
        return $this->otherDetails;
    }

    /**
     * @param OtherDetails
     */
    public function setOtherDetails($value)
    {
        $this->otherDetails = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
    public function fromObject($object)
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
