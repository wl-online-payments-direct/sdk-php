<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ThreeDSecureResults extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $acsTransactionId = null;

    /**
     * @var string|null
     */
    public ?string $appliedExemption = null;

    /**
     * @var string|null
     */
    public ?string $authenticationStatus = null;

    /**
     * @var string|null
     */
    public ?string $cavv = null;

    /**
     * @var string|null
     */
    public ?string $challengeIndicator = null;

    /**
     * @var string|null
     */
    public ?string $dsTransactionId = null;

    /**
     * @var string|null
     */
    public ?string $eci = null;

    /**
     * @var string|null
     */
    public ?string $exemptionEngineFlow = null;

    /**
     * @var string|null
     */
    public ?string $flow = null;

    /**
     * @var string|null
     */
    public ?string $liability = null;

    /**
     * @var string|null
     */
    public ?string $schemeEci = null;

    /**
     * @var string|null
     */
    public ?string $version = null;

    /**
     * @var string|null
     */
    public ?string $xid = null;

    /**
     * @return string|null
     */
    public function getAcsTransactionId(): ?string
    {
        return $this->acsTransactionId;
    }

    /**
     * @param string|null $value
     */
    public function setAcsTransactionId(?string $value): void
    {
        $this->acsTransactionId = $value;
    }

    /**
     * @return string|null
     */
    public function getAppliedExemption(): ?string
    {
        return $this->appliedExemption;
    }

    /**
     * @param string|null $value
     */
    public function setAppliedExemption(?string $value): void
    {
        $this->appliedExemption = $value;
    }

    /**
     * @return string|null
     */
    public function getAuthenticationStatus(): ?string
    {
        return $this->authenticationStatus;
    }

    /**
     * @param string|null $value
     */
    public function setAuthenticationStatus(?string $value): void
    {
        $this->authenticationStatus = $value;
    }

    /**
     * @return string|null
     */
    public function getCavv(): ?string
    {
        return $this->cavv;
    }

    /**
     * @param string|null $value
     */
    public function setCavv(?string $value): void
    {
        $this->cavv = $value;
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
    public function getDsTransactionId(): ?string
    {
        return $this->dsTransactionId;
    }

    /**
     * @param string|null $value
     */
    public function setDsTransactionId(?string $value): void
    {
        $this->dsTransactionId = $value;
    }

    /**
     * @return string|null
     */
    public function getEci(): ?string
    {
        return $this->eci;
    }

    /**
     * @param string|null $value
     */
    public function setEci(?string $value): void
    {
        $this->eci = $value;
    }

    /**
     * @return string|null
     */
    public function getExemptionEngineFlow(): ?string
    {
        return $this->exemptionEngineFlow;
    }

    /**
     * @param string|null $value
     */
    public function setExemptionEngineFlow(?string $value): void
    {
        $this->exemptionEngineFlow = $value;
    }

    /**
     * @return string|null
     */
    public function getFlow(): ?string
    {
        return $this->flow;
    }

    /**
     * @param string|null $value
     */
    public function setFlow(?string $value): void
    {
        $this->flow = $value;
    }

    /**
     * @return string|null
     */
    public function getLiability(): ?string
    {
        return $this->liability;
    }

    /**
     * @param string|null $value
     */
    public function setLiability(?string $value): void
    {
        $this->liability = $value;
    }

    /**
     * @return string|null
     */
    public function getSchemeEci(): ?string
    {
        return $this->schemeEci;
    }

    /**
     * @param string|null $value
     */
    public function setSchemeEci(?string $value): void
    {
        $this->schemeEci = $value;
    }

    /**
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param string|null $value
     */
    public function setVersion(?string $value): void
    {
        $this->version = $value;
    }

    /**
     * @return string|null
     */
    public function getXid(): ?string
    {
        return $this->xid;
    }

    /**
     * @param string|null $value
     */
    public function setXid(?string $value): void
    {
        $this->xid = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->acsTransactionId)) {
            $object->acsTransactionId = $this->acsTransactionId;
        }
        if (!is_null($this->appliedExemption)) {
            $object->appliedExemption = $this->appliedExemption;
        }
        if (!is_null($this->authenticationStatus)) {
            $object->authenticationStatus = $this->authenticationStatus;
        }
        if (!is_null($this->cavv)) {
            $object->cavv = $this->cavv;
        }
        if (!is_null($this->challengeIndicator)) {
            $object->challengeIndicator = $this->challengeIndicator;
        }
        if (!is_null($this->dsTransactionId)) {
            $object->dsTransactionId = $this->dsTransactionId;
        }
        if (!is_null($this->eci)) {
            $object->eci = $this->eci;
        }
        if (!is_null($this->exemptionEngineFlow)) {
            $object->exemptionEngineFlow = $this->exemptionEngineFlow;
        }
        if (!is_null($this->flow)) {
            $object->flow = $this->flow;
        }
        if (!is_null($this->liability)) {
            $object->liability = $this->liability;
        }
        if (!is_null($this->schemeEci)) {
            $object->schemeEci = $this->schemeEci;
        }
        if (!is_null($this->version)) {
            $object->version = $this->version;
        }
        if (!is_null($this->xid)) {
            $object->xid = $this->xid;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ThreeDSecureResults
    {
        parent::fromObject($object);
        if (property_exists($object, 'acsTransactionId')) {
            $this->acsTransactionId = $object->acsTransactionId;
        }
        if (property_exists($object, 'appliedExemption')) {
            $this->appliedExemption = $object->appliedExemption;
        }
        if (property_exists($object, 'authenticationStatus')) {
            $this->authenticationStatus = $object->authenticationStatus;
        }
        if (property_exists($object, 'cavv')) {
            $this->cavv = $object->cavv;
        }
        if (property_exists($object, 'challengeIndicator')) {
            $this->challengeIndicator = $object->challengeIndicator;
        }
        if (property_exists($object, 'dsTransactionId')) {
            $this->dsTransactionId = $object->dsTransactionId;
        }
        if (property_exists($object, 'eci')) {
            $this->eci = $object->eci;
        }
        if (property_exists($object, 'exemptionEngineFlow')) {
            $this->exemptionEngineFlow = $object->exemptionEngineFlow;
        }
        if (property_exists($object, 'flow')) {
            $this->flow = $object->flow;
        }
        if (property_exists($object, 'liability')) {
            $this->liability = $object->liability;
        }
        if (property_exists($object, 'schemeEci')) {
            $this->schemeEci = $object->schemeEci;
        }
        if (property_exists($object, 'version')) {
            $this->version = $object->version;
        }
        if (property_exists($object, 'xid')) {
            $this->xid = $object->xid;
        }
        return $this;
    }
}
