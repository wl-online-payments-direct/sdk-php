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
     * @param string|null $value
     * @return $this
     */
    public function withKey(?string $value): static
    {
        $this->key = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withSecret(?string $value): static
    {
        $this->secret = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->key !== null) {
            $object->key = $this->key;
        }
        if ($this->secret !== null) {
            $object->secret = $this->secret;
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
        if (property_exists($object, 'key')) {
            $this->key = $object->key;
        }
        if (property_exists($object, 'secret')) {
            $this->secret = $object->secret;
        }
        return $this;
    }
}
