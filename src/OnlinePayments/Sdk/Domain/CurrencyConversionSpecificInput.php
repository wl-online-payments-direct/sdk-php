<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CurrencyConversionSpecificInput extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $dccEnabled = null;

    /**
     * @return bool|null
     */
    public function getDccEnabled(): ?bool
    {
        return $this->dccEnabled;
    }

    /**
     * @param bool|null $value
     */
    public function setDccEnabled(?bool $value): void
    {
        $this->dccEnabled = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->dccEnabled)) {
            $object->dccEnabled = $this->dccEnabled;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CurrencyConversionSpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'dccEnabled')) {
            $this->dccEnabled = $object->dccEnabled;
        }
        return $this;
    }
}
