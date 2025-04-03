<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MobilePaymentMethodSpecificOutput extends DataObject
{
    /**
     * @var string
     */
    public $authorisationCode = null;

    /**
     * @var CardFraudResults
     */
    public $fraudResults = null;

    /**
     * @var string
     */
    public $network = null;

    /**
     * @var MobilePaymentData
     */
    public $paymentData = null;

    /**
     * @var int
     */
    public $paymentProductId = null;

    /**
     * @var ThreeDSecureResults
     */
    public $threeDSecureResults = null;

    /**
     * @return string
     */
    public function getAuthorisationCode()
    {
        return $this->authorisationCode;
    }

    /**
     * @param string
     */
    public function setAuthorisationCode($value)
    {
        $this->authorisationCode = $value;
    }

    /**
     * @return CardFraudResults
     */
    public function getFraudResults()
    {
        return $this->fraudResults;
    }

    /**
     * @param CardFraudResults
     */
    public function setFraudResults($value)
    {
        $this->fraudResults = $value;
    }

    /**
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * @param string
     */
    public function setNetwork($value)
    {
        $this->network = $value;
    }

    /**
     * @return MobilePaymentData
     */
    public function getPaymentData()
    {
        return $this->paymentData;
    }

    /**
     * @param MobilePaymentData
     */
    public function setPaymentData($value)
    {
        $this->paymentData = $value;
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
     * @return ThreeDSecureResults
     */
    public function getThreeDSecureResults()
    {
        return $this->threeDSecureResults;
    }

    /**
     * @param ThreeDSecureResults
     */
    public function setThreeDSecureResults($value)
    {
        $this->threeDSecureResults = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->authorisationCode)) {
            $object->authorisationCode = $this->authorisationCode;
        }
        if (!is_null($this->fraudResults)) {
            $object->fraudResults = $this->fraudResults->toObject();
        }
        if (!is_null($this->network)) {
            $object->network = $this->network;
        }
        if (!is_null($this->paymentData)) {
            $object->paymentData = $this->paymentData->toObject();
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if (!is_null($this->threeDSecureResults)) {
            $object->threeDSecureResults = $this->threeDSecureResults->toObject();
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
        if (property_exists($object, 'authorisationCode')) {
            $this->authorisationCode = $object->authorisationCode;
        }
        if (property_exists($object, 'fraudResults')) {
            if (!is_object($object->fraudResults)) {
                throw new UnexpectedValueException('value \'' . print_r($object->fraudResults, true) . '\' is not an object');
            }
            $value = new CardFraudResults();
            $this->fraudResults = $value->fromObject($object->fraudResults);
        }
        if (property_exists($object, 'network')) {
            $this->network = $object->network;
        }
        if (property_exists($object, 'paymentData')) {
            if (!is_object($object->paymentData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentData, true) . '\' is not an object');
            }
            $value = new MobilePaymentData();
            $this->paymentData = $value->fromObject($object->paymentData);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'threeDSecureResults')) {
            if (!is_object($object->threeDSecureResults)) {
                throw new UnexpectedValueException('value \'' . print_r($object->threeDSecureResults, true) . '\' is not an object');
            }
            $value = new ThreeDSecureResults();
            $this->threeDSecureResults = $value->fromObject($object->threeDSecureResults);
        }
        return $this;
    }
}
