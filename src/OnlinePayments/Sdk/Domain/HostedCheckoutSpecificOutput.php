<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class HostedCheckoutSpecificOutput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $hostedCheckoutId = null;

    /**
     * @var string|null
     */
    public ?string $variant = null;

    /**
     * @return string|null
     */
    public function getHostedCheckoutId(): ?string
    {
        return $this->hostedCheckoutId;
    }

    /**
     * @param string|null $value
     */
    public function setHostedCheckoutId(?string $value): void
    {
        $this->hostedCheckoutId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withHostedCheckoutId(?string $value): static
    {
        $this->hostedCheckoutId = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVariant(): ?string
    {
        return $this->variant;
    }

    /**
     * @param string|null $value
     */
    public function setVariant(?string $value): void
    {
        $this->variant = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withVariant(?string $value): static
    {
        $this->variant = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->hostedCheckoutId !== null) {
            $object->hostedCheckoutId = $this->hostedCheckoutId;
        }
        if ($this->variant !== null) {
            $object->variant = $this->variant;
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
        if (property_exists($object, 'hostedCheckoutId')) {
            $this->hostedCheckoutId = $object->hostedCheckoutId;
        }
        if (property_exists($object, 'variant')) {
            $this->variant = $object->variant;
        }
        return $this;
    }
}
