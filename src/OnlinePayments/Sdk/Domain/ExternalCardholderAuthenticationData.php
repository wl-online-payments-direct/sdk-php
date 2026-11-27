<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ExternalCardholderAuthenticationData extends DataObject
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
    public ?string $cavv = null;

    /**
     * @var string|null
     */
    public ?string $cavvAlgorithm = null;

    /**
     * @var string|null
     */
    public ?string $directoryServerTransactionId = null;

    /**
     * @var int|null
     */
    public ?int $eci = null;

    /**
     * @var string|null
     */
    public ?string $flow = null;

    /**
     * @var int|null
     */
    public ?int $schemeRiskScore = null;

    /**
     * @var string|null
     */
    public ?string $threeDSecureVersion = null;

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
    public function getCavvAlgorithm(): ?string
    {
        return $this->cavvAlgorithm;
    }

    /**
     * @param string|null $value
     */
    public function setCavvAlgorithm(?string $value): void
    {
        $this->cavvAlgorithm = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withCavvAlgorithm(?string $value): static
    {
        $this->cavvAlgorithm = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDirectoryServerTransactionId(): ?string
    {
        return $this->directoryServerTransactionId;
    }

    /**
     * @param string|null $value
     */
    public function setDirectoryServerTransactionId(?string $value): void
    {
        $this->directoryServerTransactionId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withDirectoryServerTransactionId(?string $value): static
    {
        $this->directoryServerTransactionId = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEci(): ?int
    {
        return $this->eci;
    }

    /**
     * @param int|null $value
     */
    public function setEci(?int $value): void
    {
        $this->eci = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withEci(?int $value): static
    {
        $this->eci = $value;
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
     * @return int|null
     */
    public function getSchemeRiskScore(): ?int
    {
        return $this->schemeRiskScore;
    }

    /**
     * @param int|null $value
     */
    public function setSchemeRiskScore(?int $value): void
    {
        $this->schemeRiskScore = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withSchemeRiskScore(?int $value): static
    {
        $this->schemeRiskScore = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getThreeDSecureVersion(): ?string
    {
        return $this->threeDSecureVersion;
    }

    /**
     * @param string|null $value
     */
    public function setThreeDSecureVersion(?string $value): void
    {
        $this->threeDSecureVersion = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withThreeDSecureVersion(?string $value): static
    {
        $this->threeDSecureVersion = $value;
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
        if ($this->cavv !== null) {
            $object->cavv = $this->cavv;
        }
        if ($this->cavvAlgorithm !== null) {
            $object->cavvAlgorithm = $this->cavvAlgorithm;
        }
        if ($this->directoryServerTransactionId !== null) {
            $object->directoryServerTransactionId = $this->directoryServerTransactionId;
        }
        if ($this->eci !== null) {
            $object->eci = $this->eci;
        }
        if ($this->flow !== null) {
            $object->flow = $this->flow;
        }
        if ($this->schemeRiskScore !== null) {
            $object->schemeRiskScore = $this->schemeRiskScore;
        }
        if ($this->threeDSecureVersion !== null) {
            $object->threeDSecureVersion = $this->threeDSecureVersion;
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
        if (property_exists($object, 'cavv')) {
            $this->cavv = $object->cavv;
        }
        if (property_exists($object, 'cavvAlgorithm')) {
            $this->cavvAlgorithm = $object->cavvAlgorithm;
        }
        if (property_exists($object, 'directoryServerTransactionId')) {
            $this->directoryServerTransactionId = $object->directoryServerTransactionId;
        }
        if (property_exists($object, 'eci')) {
            $this->eci = $object->eci;
        }
        if (property_exists($object, 'flow')) {
            $this->flow = $object->flow;
        }
        if (property_exists($object, 'schemeRiskScore')) {
            $this->schemeRiskScore = $object->schemeRiskScore;
        }
        if (property_exists($object, 'threeDSecureVersion')) {
            $this->threeDSecureVersion = $object->threeDSecureVersion;
        }
        if (property_exists($object, 'xid')) {
            $this->xid = $object->xid;
        }
        return $this;
    }
}
