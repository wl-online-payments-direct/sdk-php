<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ProtectionEligibility extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $eligibility = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @return string|null
     */
    public function getEligibility(): ?string
    {
        return $this->eligibility;
    }

    /**
     * @param string|null $value
     */
    public function setEligibility(?string $value): void
    {
        $this->eligibility = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withEligibility(?string $value): static
    {
        $this->eligibility = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $value
     */
    public function setType(?string $value): void
    {
        $this->type = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withType(?string $value): static
    {
        $this->type = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->eligibility !== null) {
            $object->eligibility = $this->eligibility;
        }
        if ($this->type !== null) {
            $object->type = $this->type;
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
        if (property_exists($object, 'eligibility')) {
            $this->eligibility = $object->eligibility;
        }
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        return $this;
    }
}
