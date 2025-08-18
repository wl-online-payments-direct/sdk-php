<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GPayThreeDSecure extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $challengeCanvasSize = null;

    /**
     * @var string|null
     */
    public ?string $challengeIndicator = null;

    /**
     * @var string|null
     */
    public ?string $exemptionRequest = null;

    /**
     * @var RedirectionData|null
     */
    public ?RedirectionData $redirectionData = null;

    /**
     * @var bool|null
     */
    public ?bool $skipAuthentication = null;

    /**
     * @return string|null
     */
    public function getChallengeCanvasSize(): ?string
    {
        return $this->challengeCanvasSize;
    }

    /**
     * @param string|null $value
     */
    public function setChallengeCanvasSize(?string $value): void
    {
        $this->challengeCanvasSize = $value;
    }

    /**
     * @return string|null
     */
    public function getChallengeIndicator(): ?string
    {
        return $this->challengeIndicator;
    }

    /**
     * @param string|null $value
     */
    public function setChallengeIndicator(?string $value): void
    {
        $this->challengeIndicator = $value;
    }

    /**
     * @return string|null
     */
    public function getExemptionRequest(): ?string
    {
        return $this->exemptionRequest;
    }

    /**
     * @param string|null $value
     */
    public function setExemptionRequest(?string $value): void
    {
        $this->exemptionRequest = $value;
    }

    /**
     * @return RedirectionData|null
     */
    public function getRedirectionData(): ?RedirectionData
    {
        return $this->redirectionData;
    }

    /**
     * @param RedirectionData|null $value
     */
    public function setRedirectionData(?RedirectionData $value): void
    {
        $this->redirectionData = $value;
    }

    /**
     * @return bool|null
     */
    public function getSkipAuthentication(): ?bool
    {
        return $this->skipAuthentication;
    }

    /**
     * @param bool|null $value
     */
    public function setSkipAuthentication(?bool $value): void
    {
        $this->skipAuthentication = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->challengeCanvasSize)) {
            $object->challengeCanvasSize = $this->challengeCanvasSize;
        }
        if (!is_null($this->challengeIndicator)) {
            $object->challengeIndicator = $this->challengeIndicator;
        }
        if (!is_null($this->exemptionRequest)) {
            $object->exemptionRequest = $this->exemptionRequest;
        }
        if (!is_null($this->redirectionData)) {
            $object->redirectionData = $this->redirectionData->toObject();
        }
        if (!is_null($this->skipAuthentication)) {
            $object->skipAuthentication = $this->skipAuthentication;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): GPayThreeDSecure
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
