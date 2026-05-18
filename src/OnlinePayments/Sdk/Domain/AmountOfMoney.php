<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AmountOfMoney extends DataObject
{
    /**
     * @var int|null
     */
    public ?int $amount = null;

    /**
     * @var string|null
     */
    public ?string $currencyCode = null;

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
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * @param string|null $value
     */
    public function setCurrencyCode(?string $value): void
    {
        $this->currencyCode = $value;
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
        if (!is_null($this->currencyCode)) {
            $object->currencyCode = $this->currencyCode;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): AmountOfMoney
    {
        parent::fromObject($object);
        if (property_exists($object, 'amount')) {
            $this->amount = $object->amount;
        }
        if (property_exists($object, 'currencyCode')) {
            $this->currencyCode = $object->currencyCode;
        }
        return $this;
    }
}
