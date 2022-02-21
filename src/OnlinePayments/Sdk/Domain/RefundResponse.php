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
class RefundResponse extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $id;

    /**
     * @var RefundOutput
     */
    private $refundOutput;

    /**
     * @var string
     */
    private $status;

    /**
     * @var OrderStatusOutput
     */
    private $statusOutput;

    // Methods
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
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
     * @var RefundOutput
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
     * @var string
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
     * @var OrderStatusOutput
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
        if ($this->id !== null) {
            $object->id = $this->id;
        }
        if ($this->refundOutput !== null) {
            $object->refundOutput = $this->refundOutput->toObject();
        }
        if ($this->status !== null) {
            $object->status = $this->status;
        }
        if ($this->statusOutput !== null) {
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
