<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GetIINDetailsResponse extends DataObject
{
    /**
     * @var string
     */
    public $cardType = null;

    /**
     * @var IINDetail[]
     */
    public $coBrands = null;

    /**
     * @var string
     */
    public $countryCode = null;

    /**
     * @var bool
     */
    public $isAllowedInContext = null;

    /**
     * @var int
     */
    public $paymentProductId = null;

    /**
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * @param string
     */
    public function setCardType($value)
    {
        $this->cardType = $value;
    }

    /**
     * @return IINDetail[]
     */
    public function getCoBrands()
    {
        return $this->coBrands;
    }

    /**
     * @param IINDetail[]
     */
    public function setCoBrands($value)
    {
        $this->coBrands = $value;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string
     */
    public function setCountryCode($value)
    {
        $this->countryCode = $value;
    }

    /**
     * @return bool
     */
    public function getIsAllowedInContext()
    {
        return $this->isAllowedInContext;
    }

    /**
     * @param bool
     */
    public function setIsAllowedInContext($value)
    {
        $this->isAllowedInContext = $value;
    }

    /**
     * @return int
     */
    public function getPaymentProductId()
    {
        return $this->paymentProductId;
    }

    /**
     * @param int
     */
    public function setPaymentProductId($value)
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->cardType)) {
            $object->cardType = $this->cardType;
        }
        if (!is_null($this->coBrands)) {
            $object->coBrands = [];
            foreach ($this->coBrands as $element) {
                if (!is_null($element)) {
                    $object->coBrands[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->countryCode)) {
            $object->countryCode = $this->countryCode;
        }
        if (!is_null($this->isAllowedInContext)) {
            $object->isAllowedInContext = $this->isAllowedInContext;
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
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
        if (property_exists($object, 'cardType')) {
            $this->cardType = $object->cardType;
        }
        if (property_exists($object, 'coBrands')) {
            if (!is_array($object->coBrands) && !is_object($object->coBrands)) {
                throw new UnexpectedValueException('value \'' . print_r($object->coBrands, true) . '\' is not an array or object');
            }
            $this->coBrands = [];
            foreach ($object->coBrands as $element) {
                $value = new IINDetail();
                $this->coBrands[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'countryCode')) {
            $this->countryCode = $object->countryCode;
        }
        if (property_exists($object, 'isAllowedInContext')) {
            $this->isAllowedInContext = $object->isAllowedInContext;
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        return $this;
    }
}
