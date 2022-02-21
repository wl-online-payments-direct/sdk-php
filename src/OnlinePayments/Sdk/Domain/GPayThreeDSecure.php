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
class GPayThreeDSecure extends DataObject
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
