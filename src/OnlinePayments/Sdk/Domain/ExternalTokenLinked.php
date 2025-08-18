<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ExternalTokenLinked extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $ComputedToken = null;

    /**
     * @var string|null
     * @deprecated Use the field ComputedToken instead.
     */
    public ?string $GTSComputedToken = null;

    /**
     * @var string|null
     */
    public ?string $GeneratedToken = null;

    /**
     * @return string|null
     */
    public function getComputedToken(): ?string
    {
        return $this->ComputedToken;
    }

    /**
     * @param string|null $value
     */
    public function setComputedToken(?string $value): void
    {
        $this->ComputedToken = $value;
    }

    /**
     * @return string|null
     * @deprecated Use the field ComputedToken instead.
     */
    public function getGTSComputedToken(): ?string
    {
        return $this->GTSComputedToken;
    }

    /**
     * @param string|null $value
     * @deprecated Use the field ComputedToken instead.
     */
    public function setGTSComputedToken(?string $value): void
    {
        $this->GTSComputedToken = $value;
    }

    /**
     * @return string|null
     */
    public function getGeneratedToken(): ?string
    {
        return $this->GeneratedToken;
    }

    /**
     * @param string|null $value
     */
    public function setGeneratedToken(?string $value): void
    {
        $this->GeneratedToken = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->ComputedToken)) {
            $object->ComputedToken = $this->ComputedToken;
        }
        if (!is_null($this->GTSComputedToken)) {
            $object->GTSComputedToken = $this->GTSComputedToken;
        }
        if (!is_null($this->GeneratedToken)) {
            $object->GeneratedToken = $this->GeneratedToken;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ExternalTokenLinked
    {
        parent::fromObject($object);
        if (property_exists($object, 'ComputedToken')) {
            $this->ComputedToken = $object->ComputedToken;
        }
        if (property_exists($object, 'GTSComputedToken')) {
            $this->GTSComputedToken = $object->GTSComputedToken;
        }
        if (property_exists($object, 'GeneratedToken')) {
            $this->GeneratedToken = $object->GeneratedToken;
        }
        return $this;
    }
}
