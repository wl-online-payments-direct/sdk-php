<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductFiltersHostedFields extends DataObject
{
    /**
     * @var int[]|null
     */
    public ?array $exclude = null;

    /**
     * @var int[]|null
     */
    public ?array $restrictTo = null;

    /**
     * @return int[]|null
     */
    public function getExclude(): ?array
    {
        return $this->exclude;
    }

    /**
     * @param int[]|null $value
     */
    public function setExclude(?array $value): void
    {
        $this->exclude = $value;
    }

    /**
     * @param int[]|null $value
     * @return $this
     */
    public function withExclude(?array $value): static
    {
        $this->exclude = $value;
        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getRestrictTo(): ?array
    {
        return $this->restrictTo;
    }

    /**
     * @param int[]|null $value
     */
    public function setRestrictTo(?array $value): void
    {
        $this->restrictTo = $value;
    }

    /**
     * @param int[]|null $value
     * @return $this
     */
    public function withRestrictTo(?array $value): static
    {
        $this->restrictTo = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->exclude !== null) {
            $object->exclude = [];
            foreach ($this->exclude as $element) {
                if ($element !== null) {
                    $object->exclude[] = $element;
                }
            }
        }
        if ($this->restrictTo !== null) {
            $object->restrictTo = [];
            foreach ($this->restrictTo as $element) {
                if ($element !== null) {
                    $object->restrictTo[] = $element;
                }
            }
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
        if (property_exists($object, 'exclude')) {
            if (!is_array($object->exclude) && !is_object($object->exclude)) {
                throw new UnexpectedValueException('value \'' . print_r($object->exclude, true) . '\' is not an array or object');
            }
            $this->exclude = [];
            foreach ($object->exclude as $element) {
                    $this->exclude[] = $element;
            }
        }
        if (property_exists($object, 'restrictTo')) {
            if (!is_array($object->restrictTo) && !is_object($object->restrictTo)) {
                throw new UnexpectedValueException('value \'' . print_r($object->restrictTo, true) . '\' is not an array or object');
            }
            $this->restrictTo = [];
            foreach ($object->restrictTo as $element) {
                    $this->restrictTo[] = $element;
            }
        }
        return $this;
    }
}
