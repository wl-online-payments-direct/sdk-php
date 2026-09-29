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
     * @var float|null
    */
    public ?float $taxPercentage = null;

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
     * @param int|null $value
     * @return OrderLineDetails
    */
    public function withDiscountAmount(?int $value): OrderLineDetails
    {
        $this->discountAmount = $value;
        return $this;
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
     * @param string|null $value
     * @return OrderLineDetails
    */
    public function withProductBrand(?string $value): OrderLineDetails
    {
        $this->productBrand = $value;
        return $this;
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
     * @param string|null $value
     * @return OrderLineDetails
    */
    public function withProductCode(?string $value): OrderLineDetails
    {
        $this->productCode = $value;
        return $this;
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
     * @param string|null $value
     * @return OrderLineDetails
    */
    public function withProductName(?string $value): OrderLineDetails
    {
        $this->productName = $value;
        return $this;
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
     * @param int|null $value
     * @return OrderLineDetails
    */
    public function withProductPrice(?int $value): OrderLineDetails
    {
        $this->productPrice = $value;
        return $this;
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
     * @param string|null $value
     * @return OrderLineDetails
    */
    public function withProductType(?string $value): OrderLineDetails
    {
        $this->productType = $value;
        return $this;
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
     * @param int|null $value
     * @return OrderLineDetails
    */
    public function withQuantity(?int $value): OrderLineDetails
    {
        $this->quantity = $value;
        return $this;
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
     * @param int|null $value
     * @return OrderLineDetails
    */
    public function withTaxAmount(?int $value): OrderLineDetails
    {
        $this->taxAmount = $value;
        return $this;
    }

    /**
     * @return float|null
    */
    public function getTaxPercentage(): ?float
    {
        return $this->taxPercentage;
    }

    /**
     * @param float|null $value
    */
    public function setTaxPercentage(?float $value): void
    {
        $this->taxPercentage = $value;
    }

    /**
     * @param float|null $value
     * @return OrderLineDetails
    */
    public function withTaxPercentage(?float $value): OrderLineDetails
    {
        $this->taxPercentage = $value;
        return $this;
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
     * @param string|null $value
     * @return OrderLineDetails
    */
    public function withUnit(?string $value): OrderLineDetails
    {
        $this->unit = $value;
        return $this;
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
        if (!is_null($this->taxPercentage)) {
            $object->taxPercentage = $this->taxPercentage;
        }
        if (!is_null($this->unit)) {
            $object->unit = $this->unit;
        }
        return $object;
    }

    /**
     * @param object $object
     *
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
        if (property_exists($object, 'taxPercentage')) {
            $this->taxPercentage = $object->taxPercentage;
        }
        if (property_exists($object, 'unit')) {
            $this->unit = $object->unit;
        }
        return $this;
    }
}
