<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RevokeMandateRequest extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $revocationReason = null;

    /**
     * @return string|null
     */
    public function getRevocationReason(): ?string
    {
        return $this->revocationReason;
    }

    /**
     * @param string|null $value
     */
    public function setRevocationReason(?string $value): void
    {
        $this->revocationReason = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->revocationReason)) {
            $object->revocationReason = $this->revocationReason;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RevokeMandateRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'revocationReason')) {
            $this->revocationReason = $object->revocationReason;
        }
        return $this;
    }
}
