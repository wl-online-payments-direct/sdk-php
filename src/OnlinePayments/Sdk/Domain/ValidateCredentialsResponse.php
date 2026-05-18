<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ValidateCredentialsResponse extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $result = null;

    /**
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * @param string|null $value
     */
    public function setResult(?string $value): void
    {
        $this->result = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->result)) {
            $object->result = $this->result;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ValidateCredentialsResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'result')) {
            $this->result = $object->result;
        }
        return $this;
    }
}
