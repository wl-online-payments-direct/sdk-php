<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GetHostedCheckoutResponse extends DataObject
{
    /**
     * @var CreatedPaymentOutput|null
    */
    public ?CreatedPaymentOutput $createdPaymentOutput = null;

    /**
     * @var string|null
    */
    public ?string $status = null;

    /**
     * @return CreatedPaymentOutput|null
    */
    public function getCreatedPaymentOutput(): ?CreatedPaymentOutput
    {
        return $this->createdPaymentOutput;
    }

    /**
     * @param CreatedPaymentOutput|null $value
    */
    public function setCreatedPaymentOutput(?CreatedPaymentOutput $value): void
    {
        $this->createdPaymentOutput = $value;
    }

    /**
     * @param CreatedPaymentOutput|null $value
     * @return GetHostedCheckoutResponse
    */
    public function withCreatedPaymentOutput(?CreatedPaymentOutput $value): GetHostedCheckoutResponse
    {
        $this->createdPaymentOutput = $value;
        return $this;
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
     * @param string|null $value
     * @return GetHostedCheckoutResponse
    */
    public function withStatus(?string $value): GetHostedCheckoutResponse
    {
        $this->status = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->createdPaymentOutput)) {
            $object->createdPaymentOutput = $this->createdPaymentOutput->toObject();
        }
        if (!is_null($this->status)) {
            $object->status = $this->status;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): GetHostedCheckoutResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'createdPaymentOutput')) {
            if (!is_object($object->createdPaymentOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->createdPaymentOutput, true) . '\' is not an object');
            }
            $value = new CreatedPaymentOutput();
            $this->createdPaymentOutput = $value->fromObject($object->createdPaymentOutput);
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        return $this;
    }
}
