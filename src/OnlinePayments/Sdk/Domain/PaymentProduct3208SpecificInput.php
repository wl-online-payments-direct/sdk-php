<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct3208SpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $merchantFinanceCode = null;

    /**
     * @return string|null
     */
    public function getMerchantFinanceCode(): ?string
    {
        return $this->merchantFinanceCode;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantFinanceCode(?string $value): void
    {
        $this->merchantFinanceCode = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->merchantFinanceCode)) {
            $object->merchantFinanceCode = $this->merchantFinanceCode;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct3208SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'merchantFinanceCode')) {
            $this->merchantFinanceCode = $object->merchantFinanceCode;
        }
        return $this;
    }
}
