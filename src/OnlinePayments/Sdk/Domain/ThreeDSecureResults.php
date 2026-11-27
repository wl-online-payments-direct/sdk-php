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
     * @param string|null $value
     * @return $this
     */
    public function withAcsTransactionId(?string $value): static
    {
        $this->acsTransactionId = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withAppliedExemption(?string $value): static
    {
        $this->appliedExemption = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withAuthenticationStatus(?string $value): static
    {
        $this->authenticationStatus = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withCavv(?string $value): static
    {
        $this->cavv = $value;
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
     * @param string|null $value
     * @return $this
     */
    public function withDsTransactionId(?string $value): static
    {
        $this->dsTransactionId = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withEci(?string $value): static
    {
        $this->eci = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withExemptionEngineFlow(?string $value): static
    {
        $this->exemptionEngineFlow = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withFlow(?string $value): static
    {
        $this->flow = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withLiability(?string $value): static
    {
        $this->liability = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withSchemeEci(?string $value): static
    {
        $this->schemeEci = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withVersion(?string $value): static
    {
        $this->version = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withXid(?string $value): static
    {
        $this->xid = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->acsTransactionId !== null) {
            $object->acsTransactionId = $this->acsTransactionId;
        }
        if ($this->appliedExemption !== null) {
            $object->appliedExemption = $this->appliedExemption;
        }
        if ($this->authenticationStatus !== null) {
            $object->authenticationStatus = $this->authenticationStatus;
        }
        if ($this->cavv !== null) {
            $object->cavv = $this->cavv;
        }
        if ($this->challengeIndicator !== null) {
            $object->challengeIndicator = $this->challengeIndicator;
        }
        if ($this->dsTransactionId !== null) {
            $object->dsTransactionId = $this->dsTransactionId;
        }
        if ($this->eci !== null) {
            $object->eci = $this->eci;
        }
        if ($this->exemptionEngineFlow !== null) {
            $object->exemptionEngineFlow = $this->exemptionEngineFlow;
        }
        if ($this->flow !== null) {
            $object->flow = $this->flow;
        }
        if ($this->liability !== null) {
            $object->liability = $this->liability;
        }
        if ($this->schemeEci !== null) {
            $object->schemeEci = $this->schemeEci;
        }
        if ($this->version !== null) {
            $object->version = $this->version;
        }
        if ($this->xid !== null) {
            $object->xid = $this->xid;
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
