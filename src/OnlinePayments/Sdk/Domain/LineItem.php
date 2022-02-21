<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class LineItem extends DataObject
{
    // Properties
    /**
     * @var AmountOfMoney
     */
    private $amountOfMoney;

    /**
     * @var LineItemInvoiceData
     */
    private $invoiceData;

    /**
     * @var OrderLineDetails
     */
    private $orderLineDetails;

    // Methods
    /**
     * @return AmountOfMoney
     */
    public function getAmountOfMoney()
    {
        return $this->amountOfMoney;
    }
    /**
     * @var AmountOfMoney
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
     * @var LineItemInvoiceData
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
     * @var OrderLineDetails
     */
    public function setOrderLineDetails($value)
    {
        $this->orderLineDetails = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->amountOfMoney !== null) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if ($this->invoiceData !== null) {
            $object->invoiceData = $this->invoiceData->toObject();
        }
        if ($this->orderLineDetails !== null) {
            $object->orderLineDetails = $this->orderLineDetails->toObject();
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
        return $this;
    }
}
