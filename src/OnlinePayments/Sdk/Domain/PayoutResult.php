<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PayoutResult extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var PayoutOutput|null
     */
    public ?PayoutOutput $payoutOutput = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var PayoutStatusOutput|null
     */
    public ?PayoutStatusOutput $statusOutput = null;

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
     * @return PayoutOutput|null
     */
    public function getPayoutOutput(): ?PayoutOutput
    {
        return $this->payoutOutput;
    }

    /**
     * @param PayoutOutput|null $value
     */
    public function setPayoutOutput(?PayoutOutput $value): void
    {
        $this->payoutOutput = $value;
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
     * @return PayoutStatusOutput|null
     */
    public function getStatusOutput(): ?PayoutStatusOutput
    {
        return $this->statusOutput;
    }

    /**
     * @param PayoutStatusOutput|null $value
     */
    public function setStatusOutput(?PayoutStatusOutput $value): void
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
        if (!is_null($this->payoutOutput)) {
            $object->payoutOutput = $this->payoutOutput->toObject();
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
    public function fromObject(object $object): PayoutResult
    {
        parent::fromObject($object);
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'payoutOutput')) {
            if (!is_object($object->payoutOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->payoutOutput, true) . '\' is not an object');
            }
            $value = new PayoutOutput();
            $this->payoutOutput = $value->fromObject($object->payoutOutput);
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'statusOutput')) {
            if (!is_object($object->statusOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->statusOutput, true) . '\' is not an object');
            }
            $value = new PayoutStatusOutput();
            $this->statusOutput = $value->fromObject($object->statusOutput);
        }
        return $this;
    }
}
