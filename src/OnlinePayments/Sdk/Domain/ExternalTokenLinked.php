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
     *
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
     * @param string|null $value
     * @return $this
     */
    public function withComputedToken(?string $value): static
    {
        $this->ComputedToken = $value;
        return $this;
    }

    /**
     * @return string|null
     *
     * @deprecated Use the field ComputedToken instead.
     */
    public function getGTSComputedToken(): ?string
    {
        return $this->GTSComputedToken;
    }

    /**
     * @param string|null $value
     *
     * @deprecated Use the field ComputedToken instead.
     */
    public function setGTSComputedToken(?string $value): void
    {
        $this->GTSComputedToken = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     *
     * @deprecated Use the field ComputedToken instead.
     */
    public function withGTSComputedToken(?string $value): static
    {
        $this->GTSComputedToken = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withGeneratedToken(?string $value): static
    {
        $this->GeneratedToken = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->ComputedToken !== null) {
            $object->ComputedToken = $this->ComputedToken;
        }
        if ($this->GTSComputedToken !== null) {
            $object->GTSComputedToken = $this->GTSComputedToken;
        }
        if ($this->GeneratedToken !== null) {
            $object->GeneratedToken = $this->GeneratedToken;
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
