<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SepaDirectDebitPaymentMethodSpecificOutput extends DataObject
{
    /**
     * @var FraudResults|null
     */
    public ?FraudResults $fraudResults = null;

    /**
     * @var PaymentProduct771SpecificOutput|null
     */
    public ?PaymentProduct771SpecificOutput $paymentProduct771SpecificOutput = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @return FraudResults|null
     */
    public function getFraudResults(): ?FraudResults
    {
        return $this->fraudResults;
    }

    /**
     * @param FraudResults|null $value
     */
    public function setFraudResults(?FraudResults $value): void
    {
        $this->fraudResults = $value;
    }

    /**
     * @return PaymentProduct771SpecificOutput|null
     */
    public function getPaymentProduct771SpecificOutput(): ?PaymentProduct771SpecificOutput
    {
        return $this->paymentProduct771SpecificOutput;
    }

    /**
     * @param PaymentProduct771SpecificOutput|null $value
     */
    public function setPaymentProduct771SpecificOutput(?PaymentProduct771SpecificOutput $value): void
    {
        $this->paymentProduct771SpecificOutput = $value;
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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->fraudResults)) {
            $object->fraudResults = $this->fraudResults->toObject();
        }
        if (!is_null($this->paymentProduct771SpecificOutput)) {
            $object->paymentProduct771SpecificOutput = $this->paymentProduct771SpecificOutput->toObject();
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SepaDirectDebitPaymentMethodSpecificOutput
    {
        parent::fromObject($object);
        if (property_exists($object, 'fraudResults')) {
            if (!is_object($object->fraudResults)) {
                throw new UnexpectedValueException('value \'' . print_r($object->fraudResults, true) . '\' is not an object');
            }
            $value = new FraudResults();
            $this->fraudResults = $value->fromObject($object->fraudResults);
        }
        if (property_exists($object, 'paymentProduct771SpecificOutput')) {
            if (!is_object($object->paymentProduct771SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct771SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct771SpecificOutput();
            $this->paymentProduct771SpecificOutput = $value->fromObject($object->paymentProduct771SpecificOutput);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        return $this;
    }
}
