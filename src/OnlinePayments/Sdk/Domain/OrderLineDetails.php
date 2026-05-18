<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class OrderLineDetails extends DataObject
{
    /**
     * @var int|null
     */
    public ?int $discountAmount = null;

    /**
     * @var string|null
     */
    public ?string $productBrand = null;

    /**
     * @var string|null
     */
    public ?string $productCode = null;

    /**
     * @var string|null
     */
    public ?string $productName = null;

    /**
     * @var int|null
     */
    public ?int $productPrice = null;

    /**
     * @var string|null
     */
    public ?string $productType = null;

    /**
     * @var int|null
     */
    public ?int $quantity = null;

    /**
     * @var int|null
     */
    public ?int $taxAmount = null;

    /**
     * @var string|null
     */
    public ?string $unit = null;

    /**
     * @return int|null
     */
    public function getDiscountAmount(): ?int
    {
        return $this->discountAmount;
    }

    /**
     * @param int|null $value
     */
    public function setDiscountAmount(?int $value): void
    {
        $this->discountAmount = $value;
    }

    /**
     * @return string|null
     */
    public function getProductBrand(): ?string
    {
        return $this->productBrand;
    }

    /**
     * @param string|null $value
     */
    public function setProductBrand(?string $value): void
    {
        $this->productBrand = $value;
    }

    /**
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * @param string|null $value
     */
    public function setProductCode(?string $value): void
    {
        $this->productCode = $value;
    }

    /**
     * @return string|null
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string|null $value
     */
    public function setProductName(?string $value): void
    {
        $this->productName = $value;
    }

    /**
     * @return int|null
     */
    public function getProductPrice(): ?int
    {
        return $this->productPrice;
    }

    /**
     * @param int|null $value
     */
    public function setProductPrice(?int $value): void
    {
        $this->productPrice = $value;
    }

    /**
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }

    /**
     * @param string|null $value
     */
    public function setProductType(?string $value): void
    {
        $this->productType = $value;
    }

    /**
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int|null $value
     */
    public function setQuantity(?int $value): void
    {
        $this->quantity = $value;
    }

    /**
     * @return int|null
     */
    public function getTaxAmount(): ?int
    {
        return $this->taxAmount;
    }

    /**
     * @param int|null $value
     */
    public function setTaxAmount(?int $value): void
    {
        $this->taxAmount = $value;
    }

    /**
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * @param string|null $value
     */
    public function setUnit(?string $value): void
    {
        $this->unit = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->discountAmount)) {
            $object->discountAmount = $this->discountAmount;
        }
        if (!is_null($this->productBrand)) {
            $object->productBrand = $this->productBrand;
        }
        if (!is_null($this->productCode)) {
            $object->productCode = $this->productCode;
        }
        if (!is_null($this->productName)) {
            $object->productName = $this->productName;
        }
        if (!is_null($this->productPrice)) {
            $object->productPrice = $this->productPrice;
        }
        if (!is_null($this->productType)) {
            $object->productType = $this->productType;
        }
        if (!is_null($this->quantity)) {
            $object->quantity = $this->quantity;
        }
        if (!is_null($this->taxAmount)) {
            $object->taxAmount = $this->taxAmount;
        }
        if (!is_null($this->unit)) {
            $object->unit = $this->unit;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): OrderLineDetails
    {
        parent::fromObject($object);
        if (property_exists($object, 'discountAmount')) {
            $this->discountAmount = $object->discountAmount;
        }
        if (property_exists($object, 'productBrand')) {
            $this->productBrand = $object->productBrand;
        }
        if (property_exists($object, 'productCode')) {
            $this->productCode = $object->productCode;
        }
        if (property_exists($object, 'productName')) {
            $this->productName = $object->productName;
        }
        if (property_exists($object, 'productPrice')) {
            $this->productPrice = $object->productPrice;
        }
        if (property_exists($object, 'productType')) {
            $this->productType = $object->productType;
        }
        if (property_exists($object, 'quantity')) {
            $this->quantity = $object->quantity;
        }
        if (property_exists($object, 'taxAmount')) {
            $this->taxAmount = $object->taxAmount;
        }
        if (property_exists($object, 'unit')) {
            $this->unit = $object->unit;
        }
        return $this;
    }
}
