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
     * @return $this
     */
    public function withDiscountAmount(?int $value): static
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
     * @return $this
     */
    public function withProductBrand(?string $value): static
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
     * @return $this
     */
    public function withProductCode(?string $value): static
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
     * @return $this
     */
    public function withProductName(?string $value): static
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
     * @return $this
     */
    public function withProductPrice(?int $value): static
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
     * @return $this
     */
    public function withProductType(?string $value): static
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
     * @return $this
     */
    public function withQuantity(?int $value): static
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
     * @return $this
     */
    public function withTaxAmount(?int $value): static
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
     * @return $this
     */
    public function withTaxPercentage(?float $value): static
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
     * @return $this
     */
    public function withUnit(?string $value): static
    {
        $this->unit = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->discountAmount !== null) {
            $object->discountAmount = $this->discountAmount;
        }
        if ($this->productBrand !== null) {
            $object->productBrand = $this->productBrand;
        }
        if ($this->productCode !== null) {
            $object->productCode = $this->productCode;
        }
        if ($this->productName !== null) {
            $object->productName = $this->productName;
        }
        if ($this->productPrice !== null) {
            $object->productPrice = $this->productPrice;
        }
        if ($this->productType !== null) {
            $object->productType = $this->productType;
        }
        if ($this->quantity !== null) {
            $object->quantity = $this->quantity;
        }
        if ($this->taxAmount !== null) {
            $object->taxAmount = $this->taxAmount;
        }
        if ($this->taxPercentage !== null) {
            $object->taxPercentage = $this->taxPercentage;
        }
        if ($this->unit !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
