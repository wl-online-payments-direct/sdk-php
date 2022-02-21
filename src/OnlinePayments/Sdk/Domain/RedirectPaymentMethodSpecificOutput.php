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
class RedirectPaymentMethodSpecificOutput extends DataObject
{
    // Properties
    /**
     * @var FraudResults
     */
    private $fraudResults;

    /**
     * @var string
     */
    private $paymentOption;

    /**
     * @var PaymentProduct5402SpecificOutput
     */
    private $paymentProduct5402SpecificOutput;

    /**
     * @var PaymentProduct5500SpecificOutput
     */
    private $paymentProduct5500SpecificOutput;

    /**
     * @var PaymentProduct840SpecificOutput
     */
    private $paymentProduct840SpecificOutput;

    /**
     * @var int
     */
    private $paymentProductId;

    /**
     * @var string
     */
    private $token;

    // Methods
    /**
     * @return FraudResults
     */
    public function getFraudResults()
    {
        return $this->fraudResults;
    }
    /**
     * @var FraudResults
     */
    public function setFraudResults($value)
    {
        $this->fraudResults = $value;
    }

    /**
     * @return string
     */
    public function getPaymentOption()
    {
        return $this->paymentOption;
    }
    /**
     * @var string
     */
    public function setPaymentOption($value)
    {
        $this->paymentOption = $value;
    }

    /**
     * @return PaymentProduct5402SpecificOutput
     */
    public function getPaymentProduct5402SpecificOutput()
    {
        return $this->paymentProduct5402SpecificOutput;
    }
    /**
     * @var PaymentProduct5402SpecificOutput
     */
    public function setPaymentProduct5402SpecificOutput($value)
    {
        $this->paymentProduct5402SpecificOutput = $value;
    }

    /**
     * @return PaymentProduct5500SpecificOutput
     */
    public function getPaymentProduct5500SpecificOutput()
    {
        return $this->paymentProduct5500SpecificOutput;
    }
    /**
     * @var PaymentProduct5500SpecificOutput
     */
    public function setPaymentProduct5500SpecificOutput($value)
    {
        $this->paymentProduct5500SpecificOutput = $value;
    }

    /**
     * @return PaymentProduct840SpecificOutput
     */
    public function getPaymentProduct840SpecificOutput()
    {
        return $this->paymentProduct840SpecificOutput;
    }
    /**
     * @var PaymentProduct840SpecificOutput
     */
    public function setPaymentProduct840SpecificOutput($value)
    {
        $this->paymentProduct840SpecificOutput = $value;
    }

    /**
     * @return int
     */
    public function getPaymentProductId()
    {
        return $this->paymentProductId;
    }
    /**
     * @var int
     */
    public function setPaymentProductId($value)
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * @var string
     */
    public function setToken($value)
    {
        $this->token = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->fraudResults !== null) {
            $object->fraudResults = $this->fraudResults->toObject();
        }
        if ($this->paymentOption !== null) {
            $object->paymentOption = $this->paymentOption;
        }
        if ($this->paymentProduct5402SpecificOutput !== null) {
            $object->paymentProduct5402SpecificOutput = $this->paymentProduct5402SpecificOutput->toObject();
        }
        if ($this->paymentProduct5500SpecificOutput !== null) {
            $object->paymentProduct5500SpecificOutput = $this->paymentProduct5500SpecificOutput->toObject();
        }
        if ($this->paymentProduct840SpecificOutput !== null) {
            $object->paymentProduct840SpecificOutput = $this->paymentProduct840SpecificOutput->toObject();
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if ($this->token !== null) {
            $object->token = $this->token;
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
        if (property_exists($object, 'paymentOption')) {
            $this->paymentOption = $object->paymentOption;
        }
        if (property_exists($object, 'paymentProduct5402SpecificOutput')) {
            if (!is_object($object->paymentProduct5402SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5402SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct5402SpecificOutput();
            $this->paymentProduct5402SpecificOutput = $value->fromObject($object->paymentProduct5402SpecificOutput);
        }
        if (property_exists($object, 'paymentProduct5500SpecificOutput')) {
            if (!is_object($object->paymentProduct5500SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5500SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct5500SpecificOutput();
            $this->paymentProduct5500SpecificOutput = $value->fromObject($object->paymentProduct5500SpecificOutput);
        }
        if (property_exists($object, 'paymentProduct840SpecificOutput')) {
            if (!is_object($object->paymentProduct840SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct840SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct840SpecificOutput();
            $this->paymentProduct840SpecificOutput = $value->fromObject($object->paymentProduct840SpecificOutput);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        return $this;
    }
}
