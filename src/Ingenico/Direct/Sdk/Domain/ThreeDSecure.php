<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference/index.html
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
 */
class ThreeDSecure extends DataObject
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
     * @var ExternalCardholderAuthenticationData
     */
    private $externalCardholderAuthenticationData;

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
    private $skipAuthentication;

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
        if ($this->externalCardholderAuthenticationData !== null) {
            $object->externalCardholderAuthenticationData = $this->externalCardholderAuthenticationData->toObject();
        }
        if ($this->priorThreeDSecureData !== null) {
            $object->priorThreeDSecureData = $this->priorThreeDSecureData->toObject();
        }
        if ($this->redirectionData !== null) {
            $object->redirectionData = $this->redirectionData->toObject();
        }
        if ($this->skipAuthentication !== null) {
            $object->skipAuthentication = $this->skipAuthentication;
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
        if (property_exists($object, 'externalCardholderAuthenticationData')) {
            if (!is_object($object->externalCardholderAuthenticationData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->externalCardholderAuthenticationData, true) . '\' is not an object');
            }
            $value = new ExternalCardholderAuthenticationData();
            $this->externalCardholderAuthenticationData = $value->fromObject($object->externalCardholderAuthenticationData);
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
        if (property_exists($object, 'skipAuthentication')) {
            $this->skipAuthentication = $object->skipAuthentication;
        }
        return $this;
    }
}
