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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->address)) {
            $object->address = $this->address->toObject();
        }
        if (!is_null($this->companyIdentificationNumber)) {
            $object->companyIdentificationNumber = $this->companyIdentificationNumber;
        }
        if (!is_null($this->companyName)) {
            $object->companyName = $this->companyName;
        }
        if (!is_null($this->merchantCategoryCode)) {
            $object->merchantCategoryCode = $this->merchantCategoryCode;
        }
        if (!is_null($this->merchantId)) {
            $object->merchantId = $this->merchantId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SubMerchant
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
        return $this;
    }
}
