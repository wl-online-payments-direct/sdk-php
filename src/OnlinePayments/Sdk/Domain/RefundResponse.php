<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundResponse extends DataObject
{
    /**
     * @var string
     */
    public $id = null;

    /**
     * @var RefundOutput
     */
    public $refundOutput = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @var OrderStatusOutput
     */
    public $statusOutput = null;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string
     */
    public function setId($value)
    {
        $this->id = $value;
    }

    /**
     * @return RefundOutput
     */
    public function getRefundOutput()
    {
        return $this->refundOutput;
    }

    /**
     * @param RefundOutput
     */
    public function setRefundOutput($value)
    {
        $this->refundOutput = $value;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string
     */
    public function setStatus($value)
    {
        $this->status = $value;
    }

    /**
     * @return OrderStatusOutput
     */
    public function getStatusOutput()
    {
        return $this->statusOutput;
    }

    /**
     * @param OrderStatusOutput
     */
    public function setStatusOutput($value)
    {
        $this->statusOutput = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->refundOutput)) {
            $object->refundOutput = $this->refundOutput->toObject();
        }
        if (!is_null($this->status)) {
            $object->status = $this->status;
        }
        if (!is_null($this->statusOutput)) {
            $object->statusOutput = $this->statusOutput->toObject();
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
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'refundOutput')) {
            if (!is_object($object->refundOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->refundOutput, true) . '\' is not an object');
            }
            $value = new RefundOutput();
            $this->refundOutput = $value->fromObject($object->refundOutput);
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'statusOutput')) {
            if (!is_object($object->statusOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->statusOutput, true) . '\' is not an object');
            }
            $value = new OrderStatusOutput();
            $this->statusOutput = $value->fromObject($object->statusOutput);
        }
        return $this;
    }
}
