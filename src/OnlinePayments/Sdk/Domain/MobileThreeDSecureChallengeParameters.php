<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MobileThreeDSecureChallengeParameters extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $acsReferenceNumber = null;

    /**
     * @var string|null
     */
    public ?string $acsSignedContent = null;

    /**
     * @var string|null
     */
    public ?string $acsTransactionId = null;

    /**
     * @var string|null
     */
    public ?string $threeDServerTransactionId = null;

    /**
     * @return string|null
     */
    public function getAcsReferenceNumber(): ?string
    {
        return $this->acsReferenceNumber;
    }

    /**
     * @param string|null $value
     */
    public function setAcsReferenceNumber(?string $value): void
    {
        $this->acsReferenceNumber = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withAcsReferenceNumber(?string $value): static
    {
        $this->acsReferenceNumber = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcsSignedContent(): ?string
    {
        return $this->acsSignedContent;
    }

    /**
     * @param string|null $value
     */
    public function setAcsSignedContent(?string $value): void
    {
        $this->acsSignedContent = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withAcsSignedContent(?string $value): static
    {
        $this->acsSignedContent = $value;
        return $this;
    }

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
    public function getThreeDServerTransactionId(): ?string
    {
        return $this->threeDServerTransactionId;
    }

    /**
     * @param string|null $value
     */
    public function setThreeDServerTransactionId(?string $value): void
    {
        $this->threeDServerTransactionId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withThreeDServerTransactionId(?string $value): static
    {
        $this->threeDServerTransactionId = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->acsReferenceNumber !== null) {
            $object->acsReferenceNumber = $this->acsReferenceNumber;
        }
        if ($this->acsSignedContent !== null) {
            $object->acsSignedContent = $this->acsSignedContent;
        }
        if ($this->acsTransactionId !== null) {
            $object->acsTransactionId = $this->acsTransactionId;
        }
        if ($this->threeDServerTransactionId !== null) {
            $object->threeDServerTransactionId = $this->threeDServerTransactionId;
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
        if (property_exists($object, 'acsReferenceNumber')) {
            $this->acsReferenceNumber = $object->acsReferenceNumber;
        }
        if (property_exists($object, 'acsSignedContent')) {
            $this->acsSignedContent = $object->acsSignedContent;
        }
        if (property_exists($object, 'acsTransactionId')) {
            $this->acsTransactionId = $object->acsTransactionId;
        }
        if (property_exists($object, 'threeDServerTransactionId')) {
            $this->threeDServerTransactionId = $object->threeDServerTransactionId;
        }
        return $this;
    }
}
