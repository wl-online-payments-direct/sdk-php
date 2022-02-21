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
     * @var PaymentProductDisplayHints[]
     */
    private $displayHintsList;

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
     * @var PaymentProduct302SpecificData
     */
    private $paymentProduct302SpecificData;

    /**
     * @var PaymentProduct320SpecificData
     */
    private $paymentProduct320SpecificData;

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
     * @return PaymentProductDisplayHints[]
     */
    public function getDisplayHintsList()
    {
        return $this->displayHintsList;
    }
    /**
     * @var PaymentProductDisplayHints[]
     */
    public function setDisplayHintsList($value)
    {
        $this->displayHintsList = $value;
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
     * @return PaymentProduct302SpecificData
     */
    public function getPaymentProduct302SpecificData()
    {
        return $this->paymentProduct302SpecificData;
    }
    /**
     * @var PaymentProduct302SpecificData
     */
    public function setPaymentProduct302SpecificData($value)
    {
        $this->paymentProduct302SpecificData = $value;
    }

    /**
     * @return PaymentProduct320SpecificData
     */
    public function getPaymentProduct320SpecificData()
    {
        return $this->paymentProduct320SpecificData;
    }
    /**
     * @var PaymentProduct320SpecificData
     */
    public function setPaymentProduct320SpecificData($value)
    {
        $this->paymentProduct320SpecificData = $value;
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
        if ($this->displayHintsList !== null) {
            $object->displayHintsList = [];
            foreach ($this->displayHintsList as $element) {
                if ($element !== null) {
                    $object->displayHintsList[] = $element->toObject();
                }
            }
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
        if ($this->paymentProduct302SpecificData !== null) {
            $object->paymentProduct302SpecificData = $this->paymentProduct302SpecificData->toObject();
        }
        if ($this->paymentProduct320SpecificData !== null) {
            $object->paymentProduct320SpecificData = $this->paymentProduct320SpecificData->toObject();
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
        if (property_exists($object, 'displayHintsList')) {
            if (!is_array($object->displayHintsList) && !is_object($object->displayHintsList)) {
                throw new UnexpectedValueException('value \'' . print_r($object->displayHintsList, true) . '\' is not an array or object');
            }
            $this->displayHintsList = [];
            foreach ($object->displayHintsList as $element) {
                $value = new PaymentProductDisplayHints();
                $this->displayHintsList[] = $value->fromObject($element);
            }
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
        if (property_exists($object, 'paymentProduct302SpecificData')) {
            if (!is_object($object->paymentProduct302SpecificData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct302SpecificData, true) . '\' is not an object');
            }
            $value = new PaymentProduct302SpecificData();
            $this->paymentProduct302SpecificData = $value->fromObject($object->paymentProduct302SpecificData);
        }
        if (property_exists($object, 'paymentProduct320SpecificData')) {
            if (!is_object($object->paymentProduct320SpecificData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct320SpecificData, true) . '\' is not an object');
            }
            $value = new PaymentProduct320SpecificData();
            $this->paymentProduct320SpecificData = $value->fromObject($object->paymentProduct320SpecificData);
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
