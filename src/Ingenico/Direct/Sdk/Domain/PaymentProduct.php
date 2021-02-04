<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
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
     * @var AccountOnFile[]
     */
    private $accountsOnFile;

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
     * @var PaymentProductField[]
     */
    private $fields;

    /**
     * @var int
     */
    private $id;

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
     * @return AccountOnFile[]
     */
    public function getAccountsOnFile()
    {
        return $this->accountsOnFile;
    }
    /**
     * @var AccountOnFile[]
     */
    public function setAccountsOnFile($value)
    {
        $this->accountsOnFile = $value;
    }

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
     * @return PaymentProductField[]
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * @var PaymentProductField[]
     */
    public function setFields($value)
    {
        $this->fields = $value;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var int
     */
    public function setId($value)
    {
        $this->id = $value;
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
        if ($this->accountsOnFile !== null) {
            $object->accountsOnFile = [];
            foreach ($this->accountsOnFile as $element) {
                if ($element !== null) {
                    $object->accountsOnFile[] = $element->toObject();
                }
            }
        }
        if ($this->allowsRecurring !== null) {
            $object->allowsRecurring = $this->allowsRecurring;
        }
        if ($this->allowsTokenization !== null) {
            $object->allowsTokenization = $this->allowsTokenization;
        }
        if ($this->displayHints !== null) {
            $object->displayHints = $this->displayHints->toObject();
        }
        if ($this->fields !== null) {
            $object->fields = [];
            foreach ($this->fields as $element) {
                if ($element !== null) {
                    $object->fields[] = $element->toObject();
                }
            }
        }
        if ($this->id !== null) {
            $object->id = $this->id;
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
        if (property_exists($object, 'accountsOnFile')) {
            if (!is_array($object->accountsOnFile) && !is_object($object->accountsOnFile)) {
                throw new UnexpectedValueException('value \'' . print_r($object->accountsOnFile, true) . '\' is not an array or object');
            }
            $this->accountsOnFile = [];
            foreach ($object->accountsOnFile as $element) {
                $value = new AccountOnFile();
                $this->accountsOnFile[] = $value->fromObject($element);
            }
        }
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
        if (property_exists($object, 'fields')) {
            if (!is_array($object->fields) && !is_object($object->fields)) {
                throw new UnexpectedValueException('value \'' . print_r($object->fields, true) . '\' is not an array or object');
            }
            $this->fields = [];
            foreach ($object->fields as $element) {
                $value = new PaymentProductField();
                $this->fields[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
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
