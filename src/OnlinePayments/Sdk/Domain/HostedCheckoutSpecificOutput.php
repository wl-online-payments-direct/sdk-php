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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->hostedCheckoutId)) {
            $object->hostedCheckoutId = $this->hostedCheckoutId;
        }
        if (!is_null($this->variant)) {
            $object->variant = $this->variant;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): HostedCheckoutSpecificOutput
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
