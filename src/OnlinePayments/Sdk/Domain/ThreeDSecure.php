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
class ThreeDSecure extends DataObject
{
    // Properties
    /**
     * @var int
     */
    private $authenticationAmount;

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
     * @var ExternalCardholderAuthenticationData
     */
    private $externalCardholderAuthenticationData;

    /**
     * @var int
     */
    private $merchantFraudRate;

    /**
     * @var ThreeDSecureData
     */
    private $priorThreeDSecureData;

    /**
     * @var RedirectionData
     */
    private $redirectionData;

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
     * @return int
     */
    public function getAuthenticationAmount()
    {
        return $this->authenticationAmount;
    }
    /**
     * @var int
     */
    public function setAuthenticationAmount($value)
    {
        $this->authenticationAmount = $value;
    }

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
     * @return ExternalCardholderAuthenticationData
     */
    public function getExternalCardholderAuthenticationData()
    {
        return $this->externalCardholderAuthenticationData;
    }
    /**
     * @var ExternalCardholderAuthenticationData
     */
    public function setExternalCardholderAuthenticationData($value)
    {
        $this->externalCardholderAuthenticationData = $value;
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
     * @return RedirectionData
     */
    public function getRedirectionData()
    {
        return $this->redirectionData;
    }
    /**
     * @var RedirectionData
     */
    public function setRedirectionData($value)
    {
        $this->redirectionData = $value;
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
        if ($this->authenticationAmount !== null) {
            $object->authenticationAmount = $this->authenticationAmount;
        }
        if ($this->challengeCanvasSize !== null) {
            $object->challengeCanvasSize = $this->challengeCanvasSize;
        }
        if ($this->challengeIndicator !== null) {
            $object->challengeIndicator = $this->challengeIndicator;
        }
        if ($this->exemptionRequest !== null) {
            $object->exemptionRequest = $this->exemptionRequest;
        }
        if ($this->externalCardholderAuthenticationData !== null) {
            $object->externalCardholderAuthenticationData = $this->externalCardholderAuthenticationData->toObject();
        }
        if ($this->merchantFraudRate !== null) {
            $object->merchantFraudRate = $this->merchantFraudRate;
        }
        if ($this->priorThreeDSecureData !== null) {
            $object->priorThreeDSecureData = $this->priorThreeDSecureData->toObject();
        }
        if ($this->redirectionData !== null) {
            $object->redirectionData = $this->redirectionData->toObject();
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
        if (property_exists($object, 'authenticationAmount')) {
            $this->authenticationAmount = $object->authenticationAmount;
        }
        if (property_exists($object, 'challengeCanvasSize')) {
            $this->challengeCanvasSize = $object->challengeCanvasSize;
        }
        if (property_exists($object, 'challengeIndicator')) {
            $this->challengeIndicator = $object->challengeIndicator;
        }
        if (property_exists($object, 'exemptionRequest')) {
            $this->exemptionRequest = $object->exemptionRequest;
        }
        if (property_exists($object, 'externalCardholderAuthenticationData')) {
            if (!is_object($object->externalCardholderAuthenticationData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->externalCardholderAuthenticationData, true) . '\' is not an object');
            }
            $value = new ExternalCardholderAuthenticationData();
            $this->externalCardholderAuthenticationData = $value->fromObject($object->externalCardholderAuthenticationData);
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
        if (property_exists($object, 'redirectionData')) {
            if (!is_object($object->redirectionData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->redirectionData, true) . '\' is not an object');
            }
            $value = new RedirectionData();
            $this->redirectionData = $value->fromObject($object->redirectionData);
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
