<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class VisaAuthenticationOptions extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $acquirerBIN = null;

    /**
     * @var string|null
     */
    public ?string $acquirerMerchantId = null;

    /**
     * @var string|null
     */
    public ?string $merchantName = null;

    /**
     * @return string|null
     */
    public function getAcquirerBIN(): ?string
    {
        return $this->acquirerBIN;
    }

    /**
     * @param string|null $value
     */
    public function setAcquirerBIN(?string $value): void
    {
        $this->acquirerBIN = $value;
    }

    /**
     * @return string|null
     */
    public function getAcquirerMerchantId(): ?string
    {
        return $this->acquirerMerchantId;
    }

    /**
     * @param string|null $value
     */
    public function setAcquirerMerchantId(?string $value): void
    {
        $this->acquirerMerchantId = $value;
    }

    /**
     * @return string|null
     */
    public function getMerchantName(): ?string
    {
        return $this->merchantName;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantName(?string $value): void
    {
        $this->merchantName = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->acquirerBIN)) {
            $object->acquirerBIN = $this->acquirerBIN;
        }
        if (!is_null($this->acquirerMerchantId)) {
            $object->acquirerMerchantId = $this->acquirerMerchantId;
        }
        if (!is_null($this->merchantName)) {
            $object->merchantName = $this->merchantName;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): VisaAuthenticationOptions
    {
        parent::fromObject($object);
        if (property_exists($object, 'acquirerBIN')) {
            $this->acquirerBIN = $object->acquirerBIN;
        }
        if (property_exists($object, 'acquirerMerchantId')) {
            $this->acquirerMerchantId = $object->acquirerMerchantId;
        }
        if (property_exists($object, 'merchantName')) {
            $this->merchantName = $object->merchantName;
        }
        return $this;
    }
}
