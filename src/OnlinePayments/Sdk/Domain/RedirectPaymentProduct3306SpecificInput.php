<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct3306SpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $extraMerchantData = null;

    /**
     * @return string|null
     */
    public function getExtraMerchantData(): ?string
    {
        return $this->extraMerchantData;
    }

    /**
     * @param string|null $value
     */
    public function setExtraMerchantData(?string $value): void
    {
        $this->extraMerchantData = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->extraMerchantData)) {
            $object->extraMerchantData = $this->extraMerchantData;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RedirectPaymentProduct3306SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'extraMerchantData')) {
            $this->extraMerchantData = $object->extraMerchantData;
        }
        return $this;
    }
}
