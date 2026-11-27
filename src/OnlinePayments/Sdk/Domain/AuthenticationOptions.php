<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AuthenticationOptions extends DataObject
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
    public ?string $merchantCategoryCode = null;

    /**
     * @var string|null
     */
    public ?string $merchantCountryCode = null;

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
     * @param string|null $value
     * @return $this
     */
    public function withAcquirerBIN(?string $value): static
    {
        $this->acquirerBIN = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withAcquirerMerchantId(?string $value): static
    {
        $this->acquirerMerchantId = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantCategoryCode(): ?string
    {
        return $this->merchantCategoryCode;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantCategoryCode(?string $value): void
    {
        $this->merchantCategoryCode = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withMerchantCategoryCode(?string $value): static
    {
        $this->merchantCategoryCode = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantCountryCode(): ?string
    {
        return $this->merchantCountryCode;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantCountryCode(?string $value): void
    {
        $this->merchantCountryCode = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withMerchantCountryCode(?string $value): static
    {
        $this->merchantCountryCode = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->acquirerBIN !== null) {
            $object->acquirerBIN = $this->acquirerBIN;
        }
        if ($this->acquirerMerchantId !== null) {
            $object->acquirerMerchantId = $this->acquirerMerchantId;
        }
        if ($this->merchantCategoryCode !== null) {
            $object->merchantCategoryCode = $this->merchantCategoryCode;
        }
        if ($this->merchantCountryCode !== null) {
            $object->merchantCountryCode = $this->merchantCountryCode;
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
        if (property_exists($object, 'acquirerBIN')) {
            $this->acquirerBIN = $object->acquirerBIN;
        }
        if (property_exists($object, 'acquirerMerchantId')) {
            $this->acquirerMerchantId = $object->acquirerMerchantId;
        }
        if (property_exists($object, 'merchantCategoryCode')) {
            $this->merchantCategoryCode = $object->merchantCategoryCode;
        }
        if (property_exists($object, 'merchantCountryCode')) {
            $this->merchantCountryCode = $object->merchantCountryCode;
        }
        return $this;
    }
}
