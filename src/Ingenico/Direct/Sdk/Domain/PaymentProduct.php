<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference/index.html
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
 */
class PaymentProduct extends DataObject
{
    // Properties
    /**
     * @var bool
     */
    private $allowsRecurring;

    /**
     * @var bool
     */
    private $allowsTokenization;

    /**
     * @var PaymentProductDisplayHints
     */
    private $displayHints;

    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $maxAmount;

    /**
     * @var int
     */
    private $minAmount;

    /**
     * @var string
     */
    private $paymentMethod;

    /**
     * @var string
     */
    private $paymentProductGroup;

    /**
     * @var bool
     */
    private $usesRedirectionTo3rdParty;

    // Methods
    /**
     * @return bool
     */
    public function getAllowsRecurring()
    {
        return $this->allowsRecurring;
    }
    /**
     * @var bool
     */
    public function setAllowsRecurring($value)
    {
        $this->allowsRecurring = $value;
    }

    /**
     * @return bool
     */
    public function getAllowsTokenization()
    {
        return $this->allowsTokenization;
    }
    /**
     * @var bool
     */
    public function setAllowsTokenization($value)
    {
        $this->allowsTokenization = $value;
    }

    /**
     * @return PaymentProductDisplayHints
     */
    public function getDisplayHints()
    {
        return $this->displayHints;
    }
    /**
     * @var PaymentProductDisplayHints
     */
    public function setDisplayHints($value)
    {
        $this->displayHints = $value;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    public function setId($value)
    {
        $this->id = $value;
    }

    /**
     * @return int
     */
    public function getMaxAmount()
    {
        return $this->maxAmount;
    }
    /**
     * @var int
     */
    public function setMaxAmount($value)
    {
        $this->maxAmount = $value;
    }

    /**
     * @return int
     */
    public function getMinAmount()
    {
        return $this->minAmount;
    }
    /**
     * @var int
     */
    public function setMinAmount($value)
    {
        $this->minAmount = $value;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
    /**
     * @var string
     */
    public function setPaymentMethod($value)
    {
        $this->paymentMethod = $value;
    }

    /**
     * @return string
     */
    public function getPaymentProductGroup()
    {
        return $this->paymentProductGroup;
    }
    /**
     * @var string
     */
    public function setPaymentProductGroup($value)
    {
        $this->paymentProductGroup = $value;
    }

    /**
     * @return bool
     */
    public function getUsesRedirectionTo3rdParty()
    {
        return $this->usesRedirectionTo3rdParty;
    }
    /**
     * @var bool
     */
    public function setUsesRedirectionTo3rdParty($value)
    {
        $this->usesRedirectionTo3rdParty = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->allowsRecurring !== null) {
            $object->allowsRecurring = $this->allowsRecurring;
        }
        if ($this->allowsTokenization !== null) {
            $object->allowsTokenization = $this->allowsTokenization;
        }
        if ($this->displayHints !== null) {
            $object->displayHints = $this->displayHints->toObject();
        }
        if ($this->id !== null) {
            $object->id = $this->id;
        }
        if ($this->maxAmount !== null) {
            $object->maxAmount = $this->maxAmount;
        }
        if ($this->minAmount !== null) {
            $object->minAmount = $this->minAmount;
        }
        if ($this->paymentMethod !== null) {
            $object->paymentMethod = $this->paymentMethod;
        }
        if ($this->paymentProductGroup !== null) {
            $object->paymentProductGroup = $this->paymentProductGroup;
        }
        if ($this->usesRedirectionTo3rdParty !== null) {
            $object->usesRedirectionTo3rdParty = $this->usesRedirectionTo3rdParty;
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
        if (property_exists($object, 'allowsRecurring')) {
            $this->allowsRecurring = $object->allowsRecurring;
        }
        if (property_exists($object, 'allowsTokenization')) {
            $this->allowsTokenization = $object->allowsTokenization;
        }
        if (property_exists($object, 'displayHints')) {
            if (!is_object($object->displayHints)) {
                throw new UnexpectedValueException('value \'' . print_r($object->displayHints, true) . '\' is not an object');
            }
            $value = new PaymentProductDisplayHints();
            $this->displayHints = $value->fromObject($object->displayHints);
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'maxAmount')) {
            $this->maxAmount = $object->maxAmount;
        }
        if (property_exists($object, 'minAmount')) {
            $this->minAmount = $object->minAmount;
        }
        if (property_exists($object, 'paymentMethod')) {
            $this->paymentMethod = $object->paymentMethod;
        }
        if (property_exists($object, 'paymentProductGroup')) {
            $this->paymentProductGroup = $object->paymentProductGroup;
        }
        if (property_exists($object, 'usesRedirectionTo3rdParty')) {
            $this->usesRedirectionTo3rdParty = $object->usesRedirectionTo3rdParty;
        }
        return $this;
    }
}
