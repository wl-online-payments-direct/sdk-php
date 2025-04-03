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
     * @var int
     */
    public $discountAmount = null;

    /**
     * @var string
     */
    public $productBrand = null;

    /**
     * @var string
     */
    public $productCode = null;

    /**
     * @var string
     */
    public $productName = null;

    /**
     * @var int
     */
    public $productPrice = null;

    /**
     * @var string
     */
    public $productType = null;

    /**
     * @var int
     */
    public $quantity = null;

    /**
     * @var int
     */
    public $taxAmount = null;

    /**
     * @var string
     */
    public $unit = null;

    /**
     * @return int
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * @param int
     */
    public function setDiscountAmount($value)
    {
        $this->discountAmount = $value;
    }

    /**
     * @return string
     */
    public function getProductBrand()
    {
        return $this->productBrand;
    }

    /**
     * @param string
     */
    public function setProductBrand($value)
    {
        $this->productBrand = $value;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param string
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
     * @param string
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
     * @param int
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
     * @param string
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
     * @param int
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
     * @param int
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
     * @param string
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
    public function fromObject($object)
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
