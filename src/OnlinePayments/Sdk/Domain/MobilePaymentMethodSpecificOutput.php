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
class MobilePaymentMethodSpecificOutput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $authorisationCode;

    /**
     * @var CardFraudResults
     */
    private $fraudResults;

    /**
     * @var string
     */
    private $network;

    /**
     * @var MobilePaymentData
     */
    private $paymentData;

    /**
     * @var int
     */
    private $paymentProductId;

    /**
     * @var ThreeDSecureResults
     */
    private $threeDSecureResults;

    // Methods
    /**
     * @return string
     */
    public function getAuthorisationCode()
    {
        return $this->authorisationCode;
    }
    /**
     * @var string
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
     * @var CardFraudResults
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
     * @var string
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
     * @var MobilePaymentData
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
     * @var int
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
     * @var ThreeDSecureResults
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
        if ($this->authorisationCode !== null) {
            $object->authorisationCode = $this->authorisationCode;
        }
        if ($this->fraudResults !== null) {
            $object->fraudResults = $this->fraudResults->toObject();
        }
        if ($this->network !== null) {
            $object->network = $this->network;
        }
        if ($this->paymentData !== null) {
            $object->paymentData = $this->paymentData->toObject();
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if ($this->threeDSecureResults !== null) {
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
