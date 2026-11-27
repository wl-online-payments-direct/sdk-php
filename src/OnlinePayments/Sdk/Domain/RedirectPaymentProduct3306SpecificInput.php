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
     * @param string|null $value
     * @return $this
     */
    public function withExtraMerchantData(?string $value): static
    {
        $this->extraMerchantData = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->extraMerchantData !== null) {
            $object->extraMerchantData = $this->extraMerchantData;
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
        if (property_exists($object, 'extraMerchantData')) {
            $this->extraMerchantData = $object->extraMerchantData;
        }
        return $this;
    }
}
