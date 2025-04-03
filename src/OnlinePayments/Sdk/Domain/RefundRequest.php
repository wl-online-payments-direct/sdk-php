<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundRequest extends DataObject
{
    /**
     * @var AmountOfMoney
     */
    public $amountOfMoney = null;

    /**
     * @var string
     */
    public $captureId = null;

    /**
     * @var OperationPaymentReferences
     */
    public $operationReferences = null;

    /**
     * @var PaymentReferences
     */
    public $references = null;

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
     * @return string
     */
    public function getCaptureId()
    {
        return $this->captureId;
    }

    /**
     * @param string
     */
    public function setCaptureId($value)
    {
        $this->captureId = $value;
    }

    /**
     * @return OperationPaymentReferences
     */
    public function getOperationReferences()
    {
        return $this->operationReferences;
    }

    /**
     * @param OperationPaymentReferences
     */
    public function setOperationReferences($value)
    {
        $this->operationReferences = $value;
    }

    /**
     * @return PaymentReferences
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * @param PaymentReferences
     */
    public function setReferences($value)
    {
        $this->references = $value;
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
        if (!is_null($this->captureId)) {
            $object->captureId = $this->captureId;
        }
        if (!is_null($this->operationReferences)) {
            $object->operationReferences = $this->operationReferences->toObject();
        }
        if (!is_null($this->references)) {
            $object->references = $this->references->toObject();
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
        if (property_exists($object, 'captureId')) {
            $this->captureId = $object->captureId;
        }
        if (property_exists($object, 'operationReferences')) {
            if (!is_object($object->operationReferences)) {
                throw new UnexpectedValueException('value \'' . print_r($object->operationReferences, true) . '\' is not an object');
            }
            $value = new OperationPaymentReferences();
            $this->operationReferences = $value->fromObject($object->operationReferences);
        }
        if (property_exists($object, 'references')) {
            if (!is_object($object->references)) {
                throw new UnexpectedValueException('value \'' . print_r($object->references, true) . '\' is not an object');
            }
            $value = new PaymentReferences();
            $this->references = $value->fromObject($object->references);
        }
        return $this;
    }
}
