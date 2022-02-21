<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class OrderLineDetails extends DataObject
{
    // Properties
    /**
     * @var int
     */
    private $discountAmount;

    /**
     * @var string
     */
    private $productCode;

    /**
     * @var string
     */
    private $productName;

    /**
     * @var int
     */
    private $productPrice;

    /**
     * @var string
     */
    private $productType;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var int
     */
    private $taxAmount;

    /**
     * @var string
     */
    private $unit;

    // Methods
    /**
     * @return int
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }
    /**
     * @var int
     */
    public function setDiscountAmount($value)
    {
        $this->discountAmount = $value;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }
    /**
     * @var string
     */
    public function setProductCode($value)
    {
        $this->productCode = $value;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }
    /**
     * @var string
     */
    public function setProductName($value)
    {
        $this->productName = $value;
    }

    /**
     * @return int
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }
    /**
     * @var int
     */
    public function setProductPrice($value)
    {
        $this->productPrice = $value;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }
    /**
     * @var string
     */
    public function setProductType($value)
    {
        $this->productType = $value;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * @var int
     */
    public function setQuantity($value)
    {
        $this->quantity = $value;
    }

    /**
     * @return int
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }
    /**
     * @var int
     */
    public function setTaxAmount($value)
    {
        $this->taxAmount = $value;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }
    /**
     * @var string
     */
    public function setUnit($value)
    {
        $this->unit = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->discountAmount !== null) {
            $object->discountAmount = $this->discountAmount;
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
        if ($this->unit !== null) {
            $object->unit = $this->unit;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'discountAmount')) {
            $this->discountAmount = $object->discountAmount;
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
