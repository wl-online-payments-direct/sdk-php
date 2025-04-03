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
     * @var FraudResults
     */
    public $fraudResults = null;

    /**
     * @var PaymentProduct771SpecificOutput
     */
    public $paymentProduct771SpecificOutput = null;

    /**
     * @var int
     */
    public $paymentProductId = null;

    /**
     * @return FraudResults
     */
    public function getFraudResults()
    {
        return $this->fraudResults;
    }

    /**
     * @param FraudResults
     */
    public function setFraudResults($value)
    {
        $this->fraudResults = $value;
    }

    /**
     * @return PaymentProduct771SpecificOutput
     */
    public function getPaymentProduct771SpecificOutput()
    {
        return $this->paymentProduct771SpecificOutput;
    }

    /**
     * @param PaymentProduct771SpecificOutput
     */
    public function setPaymentProduct771SpecificOutput($value)
    {
        $this->paymentProduct771SpecificOutput = $value;
    }

    /**
     * @return int
     */
    public function getPaymentProductId()
    {
        return $this->paymentProductId;
    }

    /**
     * @param int
     */
    public function setPaymentProductId($value)
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
    public function fromObject($object)
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
