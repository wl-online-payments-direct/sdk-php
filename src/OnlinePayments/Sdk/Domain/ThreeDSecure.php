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
    public ?string $deviceChannel = null;

    /**
     * @var string|null
     */
    public ?string $exemptionRequest = null;

    /**
     * @var ExternalCardholderAuthenticationData|null
     */
    public ?ExternalCardholderAuthenticationData $externalCardholderAuthenticationData = null;

    /**
     * @var int|null
     */
    public ?int $merchantFraudRate = null;

    /**
     * @var ThreeDSecureData|null
     */
    public ?ThreeDSecureData $priorThreeDSecureData = null;

    /**
     * @var RedirectionData|null
     */
    public ?RedirectionData $redirectionData = null;

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
     * @param int|null $value
     * @return $this
     */
    public function withAuthenticationAmount(?int $value): static
    {
        $this->authenticationAmount = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withChallengeCanvasSize(?string $value): static
    {
        $this->challengeCanvasSize = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withChallengeIndicator(?string $value): static
    {
        $this->challengeIndicator = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeviceChannel(): ?string
    {
        return $this->deviceChannel;
    }

    /**
     * @param string|null $value
     */
    public function setDeviceChannel(?string $value): void
    {
        $this->deviceChannel = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withDeviceChannel(?string $value): static
    {
        $this->deviceChannel = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withExemptionRequest(?string $value): static
    {
        $this->exemptionRequest = $value;
        return $this;
    }

    /**
     * @return ExternalCardholderAuthenticationData|null
     */
    public function getExternalCardholderAuthenticationData(): ?ExternalCardholderAuthenticationData
    {
        return $this->externalCardholderAuthenticationData;
    }

    /**
     * @param ExternalCardholderAuthenticationData|null $value
     */
    public function setExternalCardholderAuthenticationData(?ExternalCardholderAuthenticationData $value): void
    {
        $this->externalCardholderAuthenticationData = $value;
    }

    /**
     * @param ExternalCardholderAuthenticationData|null $value
     * @return $this
     */
    public function withExternalCardholderAuthenticationData(?ExternalCardholderAuthenticationData $value): static
    {
        $this->externalCardholderAuthenticationData = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withMerchantFraudRate(?int $value): static
    {
        $this->merchantFraudRate = $value;
        return $this;
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
     * @param ThreeDSecureData|null $value
     * @return $this
     */
    public function withPriorThreeDSecureData(?ThreeDSecureData $value): static
    {
        $this->priorThreeDSecureData = $value;
        return $this;
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
     * @param RedirectionData|null $value
     * @return $this
     */
    public function withRedirectionData(?RedirectionData $value): static
    {
        $this->redirectionData = $value;
        return $this;
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
     * @param bool|null $value
     * @return $this
     */
    public function withSecureCorporatePayment(?bool $value): static
    {
        $this->secureCorporatePayment = $value;
        return $this;
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
     * @param bool|null $value
     * @return $this
     */
    public function withSkipAuthentication(?bool $value): static
    {
        $this->skipAuthentication = $value;
        return $this;
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
     * @param bool|null $value
     * @return $this
     */
    public function withSkipSoftDecline(?bool $value): static
    {
        $this->skipSoftDecline = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
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
        if ($this->deviceChannel !== null) {
            $object->deviceChannel = $this->deviceChannel;
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
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
