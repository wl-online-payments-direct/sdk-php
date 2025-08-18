<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ThreeDSecureBase extends DataObject
{
    /**
     * @var int|null
     */
    public ?int $authenticationAmount = null;

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
     * @var int|null
     */
    public ?int $merchantFraudRate = null;

    /**
     * @var ThreeDSecureData|null
     */
    public ?ThreeDSecureData $priorThreeDSecureData = null;

    /**
     * @var bool|null
     */
    public ?bool $secureCorporatePayment = null;

    /**
     * @var bool|null
     */
    public ?bool $skipAuthentication = null;

    /**
     * @var bool|null
     */
    public ?bool $skipSoftDecline = null;

    /**
     * @return int|null
     */
    public function getAuthenticationAmount(): ?int
    {
        return $this->authenticationAmount;
    }

    /**
     * @param int|null $value
     */
    public function setAuthenticationAmount(?int $value): void
    {
        $this->authenticationAmount = $value;
    }

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
     * @return int|null
     */
    public function getMerchantFraudRate(): ?int
    {
        return $this->merchantFraudRate;
    }

    /**
     * @param int|null $value
     */
    public function setMerchantFraudRate(?int $value): void
    {
        $this->merchantFraudRate = $value;
    }

    /**
     * @return ThreeDSecureData|null
     */
    public function getPriorThreeDSecureData(): ?ThreeDSecureData
    {
        return $this->priorThreeDSecureData;
    }

    /**
     * @param ThreeDSecureData|null $value
     */
    public function setPriorThreeDSecureData(?ThreeDSecureData $value): void
    {
        $this->priorThreeDSecureData = $value;
    }

    /**
     * @return bool|null
     */
    public function getSecureCorporatePayment(): ?bool
    {
        return $this->secureCorporatePayment;
    }

    /**
     * @param bool|null $value
     */
    public function setSecureCorporatePayment(?bool $value): void
    {
        $this->secureCorporatePayment = $value;
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
     * @return bool|null
     */
    public function getSkipSoftDecline(): ?bool
    {
        return $this->skipSoftDecline;
    }

    /**
     * @param bool|null $value
     */
    public function setSkipSoftDecline(?bool $value): void
    {
        $this->skipSoftDecline = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
        if (!is_null($this->exemptionRequest)) {
            $object->exemptionRequest = $this->exemptionRequest;
        }
        if (!is_null($this->merchantFraudRate)) {
            $object->merchantFraudRate = $this->merchantFraudRate;
        }
        if (!is_null($this->priorThreeDSecureData)) {
            $object->priorThreeDSecureData = $this->priorThreeDSecureData->toObject();
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
    public function fromObject(object $object): ThreeDSecureBase
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
