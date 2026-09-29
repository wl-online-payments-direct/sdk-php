<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AmountBreakdown extends DataObject
{
    /**
     * @var int|null
    */
    public ?int $amount = null;

    /**
     * @var string|null
    */
    public ?string $type = null;

    /**
     * @return int|null
    */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int|null $value
    */
    public function setAmount(?int $value): void
    {
        $this->amount = $value;
    }

    /**
     * @param int|null $value
     * @return AmountBreakdown
    */
    public function withAmount(?int $value): AmountBreakdown
    {
        $this->amount = $value;
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
     * @return AmountBreakdown
    */
    public function withType(?string $value): AmountBreakdown
    {
        $this->type = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->amount)) {
            $object->amount = $this->amount;
        }
        if (!is_null($this->type)) {
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
    public function fromObject(object $object): AmountBreakdown
    {
        parent::fromObject($object);
        if (property_exists($object, 'amount')) {
            $this->amount = $object->amount;
        }
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        return $this;
    }
}
