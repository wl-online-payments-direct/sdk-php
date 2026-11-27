<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreatePaymentResponse extends DataObject
{
    /**
     * @var PaymentCreationOutput|null
     */
    public ?PaymentCreationOutput $creationOutput = null;

    /**
     * @var MerchantAction|null
     */
    public ?MerchantAction $merchantAction = null;

    /**
     * @var PaymentResponse|null
     */
    public ?PaymentResponse $payment = null;

    /**
     * @return PaymentCreationOutput|null
     */
    public function getCreationOutput(): ?PaymentCreationOutput
    {
        return $this->creationOutput;
    }

    /**
     * @param PaymentCreationOutput|null $value
     */
    public function setCreationOutput(?PaymentCreationOutput $value): void
    {
        $this->creationOutput = $value;
    }

    /**
     * @param PaymentCreationOutput|null $value
     * @return $this
     */
    public function withCreationOutput(?PaymentCreationOutput $value): static
    {
        $this->creationOutput = $value;
        return $this;
    }

    /**
     * @return MerchantAction|null
     */
    public function getMerchantAction(): ?MerchantAction
    {
        return $this->merchantAction;
    }

    /**
     * @param MerchantAction|null $value
     */
    public function setMerchantAction(?MerchantAction $value): void
    {
        $this->merchantAction = $value;
    }

    /**
     * @param MerchantAction|null $value
     * @return $this
     */
    public function withMerchantAction(?MerchantAction $value): static
    {
        $this->merchantAction = $value;
        return $this;
    }

    /**
     * @return PaymentResponse|null
     */
    public function getPayment(): ?PaymentResponse
    {
        return $this->payment;
    }

    /**
     * @param PaymentResponse|null $value
     */
    public function setPayment(?PaymentResponse $value): void
    {
        $this->payment = $value;
    }

    /**
     * @param PaymentResponse|null $value
     * @return $this
     */
    public function withPayment(?PaymentResponse $value): static
    {
        $this->payment = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->creationOutput !== null) {
            $object->creationOutput = $this->creationOutput->toObject();
        }
        if ($this->merchantAction !== null) {
            $object->merchantAction = $this->merchantAction->toObject();
        }
        if ($this->payment !== null) {
            $object->payment = $this->payment->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'creationOutput')) {
            if (!is_object($object->creationOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->creationOutput, true) . '\' is not an object');
            }
            $value = new PaymentCreationOutput();
            $this->creationOutput = $value->fromObject($object->creationOutput);
        }
        if (property_exists($object, 'merchantAction')) {
            if (!is_object($object->merchantAction)) {
                throw new UnexpectedValueException('value \'' . print_r($object->merchantAction, true) . '\' is not an object');
            }
            $value = new MerchantAction();
            $this->merchantAction = $value->fromObject($object->merchantAction);
        }
        if (property_exists($object, 'payment')) {
            if (!is_object($object->payment)) {
                throw new UnexpectedValueException('value \'' . print_r($object->payment, true) . '\' is not an object');
            }
            $value = new PaymentResponse();
            $this->payment = $value->fromObject($object->payment);
        }
        return $this;
    }
}
