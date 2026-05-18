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
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var RefundOutput|null
     */
    public ?RefundOutput $refundOutput = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var OrderStatusOutput|null
     */
    public ?OrderStatusOutput $statusOutput = null;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $value
     */
    public function setId(?string $value): void
    {
        $this->id = $value;
    }

    /**
     * @return RefundOutput|null
     */
    public function getRefundOutput(): ?RefundOutput
    {
        return $this->refundOutput;
    }

    /**
     * @param RefundOutput|null $value
     */
    public function setRefundOutput(?RefundOutput $value): void
    {
        $this->refundOutput = $value;
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
     * @return OrderStatusOutput|null
     */
    public function getStatusOutput(): ?OrderStatusOutput
    {
        return $this->statusOutput;
    }

    /**
     * @param OrderStatusOutput|null $value
     */
    public function setStatusOutput(?OrderStatusOutput $value): void
    {
        $this->statusOutput = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): RefundResponse
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
