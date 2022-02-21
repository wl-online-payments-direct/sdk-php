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
class ThreeDSecureBase extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $challengeCanvasSize;

    /**
     * @var string
     */
    private $challengeIndicator;

    /**
     * @var string
     */
    private $exemptionRequest;

    /**
     * @var int
     */
    private $merchantFraudRate;

    /**
     * @var ThreeDSecureData
     */
    private $priorThreeDSecureData;

    /**
     * @var bool
     */
    private $secureCorporatePayment;

    /**
     * @var bool
     */
    private $skipAuthentication;

    /**
     * @var bool
     */
    private $skipSoftDecline;

    // Methods
    /**
     * @return string
     */
    public function getChallengeCanvasSize()
    {
        return $this->challengeCanvasSize;
    }
    /**
     * @var string
     */
    public function setChallengeCanvasSize($value)
    {
        $this->challengeCanvasSize = $value;
    }

    /**
     * @return string
     */
    public function getChallengeIndicator()
    {
        return $this->challengeIndicator;
    }
    /**
     * @var string
     */
    public function setChallengeIndicator($value)
    {
        $this->challengeIndicator = $value;
    }

    /**
     * @return string
     */
    public function getExemptionRequest()
    {
        return $this->exemptionRequest;
    }
    /**
     * @var string
     */
    public function setExemptionRequest($value)
    {
        $this->exemptionRequest = $value;
    }

    /**
     * @return int
     */
    public function getMerchantFraudRate()
    {
        return $this->merchantFraudRate;
    }
    /**
     * @var int
     */
    public function setMerchantFraudRate($value)
    {
        $this->merchantFraudRate = $value;
    }

    /**
     * @return ThreeDSecureData
     */
    public function getPriorThreeDSecureData()
    {
        return $this->priorThreeDSecureData;
    }
    /**
     * @var ThreeDSecureData
     */
    public function setPriorThreeDSecureData($value)
    {
        $this->priorThreeDSecureData = $value;
    }

    /**
     * @return bool
     */
    public function getSecureCorporatePayment()
    {
        return $this->secureCorporatePayment;
    }
    /**
     * @var bool
     */
    public function setSecureCorporatePayment($value)
    {
        $this->secureCorporatePayment = $value;
    }

    /**
     * @return bool
     */
    public function getSkipAuthentication()
    {
        return $this->skipAuthentication;
    }
    /**
     * @var bool
     */
    public function setSkipAuthentication($value)
    {
        $this->skipAuthentication = $value;
    }

    /**
     * @return bool
     */
    public function getSkipSoftDecline()
    {
        return $this->skipSoftDecline;
    }
    /**
     * @var bool
     */
    public function setSkipSoftDecline($value)
    {
        $this->skipSoftDecline = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->challengeCanvasSize !== null) {
            $object->challengeCanvasSize = $this->challengeCanvasSize;
        }
        if ($this->challengeIndicator !== null) {
            $object->challengeIndicator = $this->challengeIndicator;
        }
        if ($this->exemptionRequest !== null) {
            $object->exemptionRequest = $this->exemptionRequest;
        }
        if ($this->merchantFraudRate !== null) {
            $object->merchantFraudRate = $this->merchantFraudRate;
        }
        if ($this->priorThreeDSecureData !== null) {
            $object->priorThreeDSecureData = $this->priorThreeDSecureData->toObject();
        }
        if ($this->secureCorporatePayment !== null) {
            $object->secureCorporatePayment = $this->secureCorporatePayment;
        }
        if ($this->skipAuthentication !== null) {
            $object->skipAuthentication = $this->skipAuthentication;
        }
        if ($this->skipSoftDecline !== null) {
            $object->skipSoftDecline = $this->skipSoftDecline;
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
        if (property_exists($object, 'challengeCanvasSize')) {
            $this->challengeCanvasSize = $object->challengeCanvasSize;
        }
        if (property_exists($object, 'challengeIndicator')) {
            $this->challengeIndicator = $object->challengeIndicator;
        }
        if (property_exists($object, 'exemptionRequest')) {
            $this->exemptionRequest = $object->exemptionRequest;
        }
        if (property_exists($object, 'merchantFraudRate')) {
            $this->merchantFraudRate = $object->merchantFraudRate;
        }
        if (property_exists($object, 'priorThreeDSecureData')) {
            if (!is_object($object->priorThreeDSecureData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->priorThreeDSecureData, true) . '\' is not an object');
            }
            $value = new ThreeDSecureData();
            $this->priorThreeDSecureData = $value->fromObject($object->priorThreeDSecureData);
        }
        if (property_exists($object, 'secureCorporatePayment')) {
            $this->secureCorporatePayment = $object->secureCorporatePayment;
        }
        if (property_exists($object, 'skipAuthentication')) {
            $this->skipAuthentication = $object->skipAuthentication;
        }
        if (property_exists($object, 'skipSoftDecline')) {
            $this->skipSoftDecline = $object->skipSoftDecline;
        }
        return $this;
    }
}
