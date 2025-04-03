<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct130SpecificThreeDSecure extends DataObject
{
    /**
     * @var bool
     */
    public $acquirerExemption = null;

    /**
     * @var string
     */
    public $merchantScore = null;

    /**
     * @var int
     */
    public $numberOfItems = null;

    /**
     * @var string
     */
    public $usecase = null;

    /**
     * @return bool
     */
    public function getAcquirerExemption()
    {
        return $this->acquirerExemption;
    }

    /**
     * @param bool
     */
    public function setAcquirerExemption($value)
    {
        $this->acquirerExemption = $value;
    }

    /**
     * @return string
     */
    public function getMerchantScore()
    {
        return $this->merchantScore;
    }

    /**
     * @param string
     */
    public function setMerchantScore($value)
    {
        $this->merchantScore = $value;
    }

    /**
     * @return int
     */
    public function getNumberOfItems()
    {
        return $this->numberOfItems;
    }

    /**
     * @param int
     */
    public function setNumberOfItems($value)
    {
        $this->numberOfItems = $value;
    }

    /**
     * @return string
     */
    public function getUsecase()
    {
        return $this->usecase;
    }

    /**
     * @param string
     */
    public function setUsecase($value)
    {
        $this->usecase = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->acquirerExemption)) {
            $object->acquirerExemption = $this->acquirerExemption;
        }
        if (!is_null($this->merchantScore)) {
            $object->merchantScore = $this->merchantScore;
        }
        if (!is_null($this->numberOfItems)) {
            $object->numberOfItems = $this->numberOfItems;
        }
        if (!is_null($this->usecase)) {
            $object->usecase = $this->usecase;
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
        if (property_exists($object, 'acquirerExemption')) {
            $this->acquirerExemption = $object->acquirerExemption;
        }
        if (property_exists($object, 'merchantScore')) {
            $this->merchantScore = $object->merchantScore;
        }
        if (property_exists($object, 'numberOfItems')) {
            $this->numberOfItems = $object->numberOfItems;
        }
        if (property_exists($object, 'usecase')) {
            $this->usecase = $object->usecase;
        }
        return $this;
    }
}
