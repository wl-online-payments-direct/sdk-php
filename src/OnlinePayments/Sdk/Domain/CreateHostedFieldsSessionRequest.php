<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreateHostedFieldsSessionRequest extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $locale = null;

    /**
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @param string|null $value
     */
    public function setLocale(?string $value): void
    {
        $this->locale = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->locale)) {
            $object->locale = $this->locale;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CreateHostedFieldsSessionRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'locale')) {
            $this->locale = $object->locale;
        }
        return $this;
    }
}
