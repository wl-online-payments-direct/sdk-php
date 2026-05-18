<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ValidateCredentialsRequest extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $key = null;

    /**
     * @var string|null
     */
    public ?string $secret = null;

    /**
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @param string|null $value
     */
    public function setKey(?string $value): void
    {
        $this->key = $value;
    }

    /**
     * @return string|null
     */
    public function getSecret(): ?string
    {
        return $this->secret;
    }

    /**
     * @param string|null $value
     */
    public function setSecret(?string $value): void
    {
        $this->secret = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->key)) {
            $object->key = $this->key;
        }
        if (!is_null($this->secret)) {
            $object->secret = $this->secret;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ValidateCredentialsRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'key')) {
            $this->key = $object->key;
        }
        if (property_exists($object, 'secret')) {
            $this->secret = $object->secret;
        }
        return $this;
    }
}
