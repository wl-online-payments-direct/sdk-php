<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CurrencyConversionInput extends DataObject
{
    /**
     * @var bool|null
    */
    public ?bool $acceptedByUser = null;

    /**
     * @var string|null
    */
    public ?string $dccSessionId = null;

    /**
     * @return bool|null
    */
    public function getAcceptedByUser(): ?bool
    {
        return $this->acceptedByUser;
    }

    /**
     * @param bool|null $value
    */
    public function setAcceptedByUser(?bool $value): void
    {
        $this->acceptedByUser = $value;
    }

    /**
     * @param bool|null $value
     * @return CurrencyConversionInput
    */
    public function withAcceptedByUser(?bool $value): CurrencyConversionInput
    {
        $this->acceptedByUser = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getDccSessionId(): ?string
    {
        return $this->dccSessionId;
    }

    /**
     * @param string|null $value
    */
    public function setDccSessionId(?string $value): void
    {
        $this->dccSessionId = $value;
    }

    /**
     * @param string|null $value
     * @return CurrencyConversionInput
    */
    public function withDccSessionId(?string $value): CurrencyConversionInput
    {
        $this->dccSessionId = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->acceptedByUser)) {
            $object->acceptedByUser = $this->acceptedByUser;
        }
        if (!is_null($this->dccSessionId)) {
            $object->dccSessionId = $this->dccSessionId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CurrencyConversionInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'acceptedByUser')) {
            $this->acceptedByUser = $object->acceptedByUser;
        }
        if (property_exists($object, 'dccSessionId')) {
            $this->dccSessionId = $object->dccSessionId;
        }
        return $this;
    }
}
