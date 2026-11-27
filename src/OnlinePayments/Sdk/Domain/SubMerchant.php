<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SubMerchant extends DataObject
{
    /**
     * @var Address|null
     */
    public ?Address $address = null;

    /**
     * @var string|null
     */
    public ?string $companyIdentificationNumber = null;

    /**
     * @var string|null
     */
    public ?string $companyName = null;

    /**
     * @var string|null
     */
    public ?string $merchantCategoryCode = null;

    /**
     * @var string|null
     */
    public ?string $merchantId = null;

    /**
     * @var string|null
     */
    public ?string $website = null;

    /**
     * @return Address|null
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * @param Address|null $value
     */
    public function setAddress(?Address $value): void
    {
        $this->address = $value;
    }

    /**
     * @param Address|null $value
     * @return $this
     */
    public function withAddress(?Address $value): static
    {
        $this->address = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompanyIdentificationNumber(): ?string
    {
        return $this->companyIdentificationNumber;
    }

    /**
     * @param string|null $value
     */
    public function setCompanyIdentificationNumber(?string $value): void
    {
        $this->companyIdentificationNumber = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withCompanyIdentificationNumber(?string $value): static
    {
        $this->companyIdentificationNumber = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @param string|null $value
     */
    public function setCompanyName(?string $value): void
    {
        $this->companyName = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withCompanyName(?string $value): static
    {
        $this->companyName = $value;
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
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantId(?string $value): void
    {
        $this->merchantId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withMerchantId(?string $value): static
    {
        $this->merchantId = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @param string|null $value
     */
    public function setWebsite(?string $value): void
    {
        $this->website = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withWebsite(?string $value): static
    {
        $this->website = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->address !== null) {
            $object->address = $this->address->toObject();
        }
        if ($this->companyIdentificationNumber !== null) {
            $object->companyIdentificationNumber = $this->companyIdentificationNumber;
        }
        if ($this->companyName !== null) {
            $object->companyName = $this->companyName;
        }
        if ($this->merchantCategoryCode !== null) {
            $object->merchantCategoryCode = $this->merchantCategoryCode;
        }
        if ($this->merchantId !== null) {
            $object->merchantId = $this->merchantId;
        }
        if ($this->website !== null) {
            $object->website = $this->website;
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
        if (property_exists($object, 'address')) {
            if (!is_object($object->address)) {
                throw new UnexpectedValueException('value \'' . print_r($object->address, true) . '\' is not an object');
            }
            $value = new Address();
            $this->address = $value->fromObject($object->address);
        }
        if (property_exists($object, 'companyIdentificationNumber')) {
            $this->companyIdentificationNumber = $object->companyIdentificationNumber;
        }
        if (property_exists($object, 'companyName')) {
            $this->companyName = $object->companyName;
        }
        if (property_exists($object, 'merchantCategoryCode')) {
            $this->merchantCategoryCode = $object->merchantCategoryCode;
        }
        if (property_exists($object, 'merchantId')) {
            $this->merchantId = $object->merchantId;
        }
        if (property_exists($object, 'website')) {
            $this->website = $object->website;
        }
        return $this;
    }
}
