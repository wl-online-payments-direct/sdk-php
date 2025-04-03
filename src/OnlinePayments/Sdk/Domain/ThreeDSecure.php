<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ThreeDSecure extends DataObject
{
    /**
     * @var int
     */
    public $authenticationAmount = null;

    /**
     * @var string
     */
    public $challengeCanvasSize = null;

    /**
     * @var string
     */
    public $challengeIndicator = null;

    /**
     * @var string
     */
    public $deviceChannel = null;

    /**
     * @var string
     */
    public $exemptionRequest = null;

    /**
     * @var ExternalCardholderAuthenticationData
     */
    public $externalCardholderAuthenticationData = null;

    /**
     * @var int
     */
    public $merchantFraudRate = null;

    /**
     * @var ThreeDSecureData
     */
    public $priorThreeDSecureData = null;

    /**
     * @var RedirectionData
     */
    public $redirectionData = null;

    /**
     * @var bool
     */
    public $secureCorporatePayment = null;

    /**
     * @var bool
     */
    public $skipAuthentication = null;

    /**
     * @var bool
     */
    public $skipSoftDecline = null;

    /**
     * @return int
     */
    public function getAuthenticationAmount()
    {
        return $this->authenticationAmount;
    }

    /**
     * @param int
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
     * @param string
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
     * @param string
     */
    public function setChallengeIndicator($value)
    {
        $this->challengeIndicator = $value;
    }

    /**
     * @return string
     */
    public function getDeviceChannel()
    {
        return $this->deviceChannel;
    }

    /**
     * @param string
     */
    public function setDeviceChannel($value)
    {
        $this->deviceChannel = $value;
    }

    /**
     * @return string
     */
    public function getExemptionRequest()
    {
        return $this->exemptionRequest;
    }

    /**
     * @param string
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
     * @param ExternalCardholderAuthenticationData
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
     * @param int
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
     * @param ThreeDSecureData
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
     * @param RedirectionData
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
     * @param bool
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
     * @param bool
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
     * @param bool
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
        if (!is_null($this->authenticationAmount)) {
            $object->authenticationAmount = $this->authenticationAmount;
        }
        if (!is_null($this->challengeCanvasSize)) {
            $object->challengeCanvasSize = $this->challengeCanvasSize;
        }
        if (!is_null($this->challengeIndicator)) {
            $object->challengeIndicator = $this->challengeIndicator;
        }
        if (!is_null($this->deviceChannel)) {
            $object->deviceChannel = $this->deviceChannel;
        }
        if (!is_null($this->exemptionRequest)) {
            $object->exemptionRequest = $this->exemptionRequest;
        }
        if (!is_null($this->externalCardholderAuthenticationData)) {
            $object->externalCardholderAuthenticationData = $this->externalCardholderAuthenticationData->toObject();
        }
        if (!is_null($this->merchantFraudRate)) {
            $object->merchantFraudRate = $this->merchantFraudRate;
        }
        if (!is_null($this->priorThreeDSecureData)) {
            $object->priorThreeDSecureData = $this->priorThreeDSecureData->toObject();
        }
        if (!is_null($this->redirectionData)) {
            $object->redirectionData = $this->redirectionData->toObject();
        }
        if (!is_null($this->secureCorporatePayment)) {
            $object->secureCorporatePayment = $this->secureCorporatePayment;
        }
        if (!is_null($this->skipAuthentication)) {
            $object->skipAuthentication = $this->skipAuthentication;
        }
        if (!is_null($this->skipSoftDecline)) {
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
        if (property_exists($object, 'deviceChannel')) {
            $this->deviceChannel = $object->deviceChannel;
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
