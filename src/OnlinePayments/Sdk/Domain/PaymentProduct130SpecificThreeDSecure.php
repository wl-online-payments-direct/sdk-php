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
class PaymentProduct130SpecificThreeDSecure extends DataObject
{
    // Properties
    /**
     * @var bool
     */
    private $acquirerExemption;

    /**
     * @var string
     */
    private $merchantScore;

    /**
     * @var int
     */
    private $numberOfItems;

    /**
     * @var string
     */
    private $usecase;

    // Methods
    /**
     * @return bool
     */
    public function getAcquirerExemption()
    {
        return $this->acquirerExemption;
    }
    /**
     * @var bool
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
     * @var string
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
     * @var int
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
     * @var string
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
        if ($this->acquirerExemption !== null) {
            $object->acquirerExemption = $this->acquirerExemption;
        }
        if ($this->merchantScore !== null) {
            $object->merchantScore = $this->merchantScore;
        }
        if ($this->numberOfItems !== null) {
            $object->numberOfItems = $this->numberOfItems;
        }
        if ($this->usecase !== null) {
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
