<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductField extends DataObject
{
    /**
     * @var PaymentProductFieldDataRestrictions|null
     */
    public ?PaymentProductFieldDataRestrictions $dataRestrictions = null;

    /**
     * @var PaymentProductFieldDisplayHints|null
     */
    public ?PaymentProductFieldDisplayHints $displayHints = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @return PaymentProductFieldDataRestrictions|null
     */
    public function getDataRestrictions(): ?PaymentProductFieldDataRestrictions
    {
        return $this->dataRestrictions;
    }

    /**
     * @param PaymentProductFieldDataRestrictions|null $value
     */
    public function setDataRestrictions(?PaymentProductFieldDataRestrictions $value): void
    {
        $this->dataRestrictions = $value;
    }

    /**
     * @param PaymentProductFieldDataRestrictions|null $value
     * @return $this
     */
    public function withDataRestrictions(?PaymentProductFieldDataRestrictions $value): static
    {
        $this->dataRestrictions = $value;
        return $this;
    }

    /**
     * @return PaymentProductFieldDisplayHints|null
     */
    public function getDisplayHints(): ?PaymentProductFieldDisplayHints
    {
        return $this->displayHints;
    }

    /**
     * @param PaymentProductFieldDisplayHints|null $value
     */
    public function setDisplayHints(?PaymentProductFieldDisplayHints $value): void
    {
        $this->displayHints = $value;
    }

    /**
     * @param PaymentProductFieldDisplayHints|null $value
     * @return $this
     */
    public function withDisplayHints(?PaymentProductFieldDisplayHints $value): static
    {
        $this->displayHints = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $value
     */
    public function setId(?string $value): void
    {
        $this->id = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withId(?string $value): static
    {
        $this->id = $value;
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
        if ($this->dataRestrictions !== null) {
            $object->dataRestrictions = $this->dataRestrictions->toObject();
        }
        if ($this->displayHints !== null) {
            $object->displayHints = $this->displayHints->toObject();
        }
        if ($this->id !== null) {
            $object->id = $this->id;
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
        if (property_exists($object, 'dataRestrictions')) {
            if (!is_object($object->dataRestrictions)) {
                throw new UnexpectedValueException('value \'' . print_r($object->dataRestrictions, true) . '\' is not an object');
            }
            $value = new PaymentProductFieldDataRestrictions();
            $this->dataRestrictions = $value->fromObject($object->dataRestrictions);
        }
        if (property_exists($object, 'displayHints')) {
            if (!is_object($object->displayHints)) {
                throw new UnexpectedValueException('value \'' . print_r($object->displayHints, true) . '\' is not an object');
            }
            $value = new PaymentProductFieldDisplayHints();
            $this->displayHints = $value->fromObject($object->displayHints);
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        return $this;
    }
}
