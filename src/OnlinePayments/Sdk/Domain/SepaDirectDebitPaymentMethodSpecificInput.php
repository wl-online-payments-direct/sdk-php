<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SepaDirectDebitPaymentMethodSpecificInput extends DataObject
{
    /**
     * @var SepaDirectDebitPaymentProduct771SpecificInput|null
     */
    public ?SepaDirectDebitPaymentProduct771SpecificInput $paymentProduct771SpecificInput = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @return SepaDirectDebitPaymentProduct771SpecificInput|null
     */
    public function getPaymentProduct771SpecificInput(): ?SepaDirectDebitPaymentProduct771SpecificInput
    {
        return $this->paymentProduct771SpecificInput;
    }

    /**
     * @param SepaDirectDebitPaymentProduct771SpecificInput|null $value
     */
    public function setPaymentProduct771SpecificInput(?SepaDirectDebitPaymentProduct771SpecificInput $value): void
    {
        $this->paymentProduct771SpecificInput = $value;
    }

    /**
     * @param SepaDirectDebitPaymentProduct771SpecificInput|null $value
     * @return $this
     */
    public function withPaymentProduct771SpecificInput(?SepaDirectDebitPaymentProduct771SpecificInput $value): static
    {
        $this->paymentProduct771SpecificInput = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPaymentProductId(): ?int
    {
        return $this->paymentProductId;
    }

    /**
     * @param int|null $value
     */
    public function setPaymentProductId(?int $value): void
    {
        $this->paymentProductId = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withPaymentProductId(?int $value): static
    {
        $this->paymentProductId = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->paymentProduct771SpecificInput !== null) {
            $object->paymentProduct771SpecificInput = $this->paymentProduct771SpecificInput->toObject();
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
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
        if (property_exists($object, 'paymentProduct771SpecificInput')) {
            if (!is_object($object->paymentProduct771SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct771SpecificInput, true) . '\' is not an object');
            }
            $value = new SepaDirectDebitPaymentProduct771SpecificInput();
            $this->paymentProduct771SpecificInput = $value->fromObject($object->paymentProduct771SpecificInput);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        return $this;
    }
}
