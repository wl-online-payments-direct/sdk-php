<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AccountOnFile extends DataObject
{
    /**
     * @var AccountOnFileAttribute[]|null
    */
    public ?array $attributes = null;

    /**
     * @var AccountOnFileDisplayHints|null
    */
    public ?AccountOnFileDisplayHints $displayHints = null;

    /**
     * @var string|null
    */
    public ?string $id = null;

    /**
     * @var int|null
    */
    public ?int $paymentProductId = null;

    /**
     * @return AccountOnFileAttribute[]|null
    */
    public function getAttributes(): ?array
    {
        return $this->attributes;
    }

    /**
     * @param AccountOnFileAttribute[]|null $value
    */
    public function setAttributes(?array $value): void
    {
        $this->attributes = $value;
    }

    /**
     * @param AccountOnFileAttribute[]|null $value
     * @return AccountOnFile
    */
    public function withAttributes(?array $value): AccountOnFile
    {
        $this->attributes = $value;
        return $this;
    }

    /**
     * @return AccountOnFileDisplayHints|null
    */
    public function getDisplayHints(): ?AccountOnFileDisplayHints
    {
        return $this->displayHints;
    }

    /**
     * @param AccountOnFileDisplayHints|null $value
    */
    public function setDisplayHints(?AccountOnFileDisplayHints $value): void
    {
        $this->displayHints = $value;
    }

    /**
     * @param AccountOnFileDisplayHints|null $value
     * @return AccountOnFile
    */
    public function withDisplayHints(?AccountOnFileDisplayHints $value): AccountOnFile
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
     * @return AccountOnFile
    */
    public function withId(?string $value): AccountOnFile
    {
        $this->id = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getPaymentProductId(): ?int
    {
        return $this->paymentProductId;
    }

    /**
     * @param int|null $value
    */
    public function setPaymentProductId(?int $value): void
    {
        $this->paymentProductId = $value;
    }

    /**
     * @param int|null $value
     * @return AccountOnFile
    */
    public function withPaymentProductId(?int $value): AccountOnFile
    {
        $this->paymentProductId = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->attributes)) {
            $object->attributes = [];
            foreach ($this->attributes as $element) {
                if (!is_null($element)) {
                    $object->attributes[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->displayHints)) {
            $object->displayHints = $this->displayHints->toObject();
        }
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): AccountOnFile
    {
        parent::fromObject($object);
        if (property_exists($object, 'attributes')) {
            if (!is_array($object->attributes) && !is_object($object->attributes)) {
                throw new UnexpectedValueException('value \'' . print_r($object->attributes, true) . '\' is not an array or object');
            }
            $this->attributes = [];
            foreach ($object->attributes as $element) {
                $value = new AccountOnFileAttribute();
                $this->attributes[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'displayHints')) {
            if (!is_object($object->displayHints)) {
                throw new UnexpectedValueException('value \'' . print_r($object->displayHints, true) . '\' is not an object');
            }
            $value = new AccountOnFileDisplayHints();
            $this->displayHints = $value->fromObject($object->displayHints);
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        return $this;
    }
}
