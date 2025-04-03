<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct extends DataObject
{
    /**
     * @var AccountOnFile[]
     */
    public $accountsOnFile = null;

    /**
     * @var bool
     */
    public $allowsAuthentication = null;

    /**
     * @var bool
     */
    public $allowsRecurring = null;

    /**
     * @var bool
     */
    public $allowsTokenization = null;

    /**
     * @var PaymentProductDisplayHints
     */
    public $displayHints = null;

    /**
     * @var PaymentProductDisplayHints[]
     */
    public $displayHintsList = null;

    /**
     * @var PaymentProductField[]
     */
    public $fields = null;

    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $paymentMethod = null;

    /**
     * @var PaymentProduct302SpecificData
     */
    public $paymentProduct302SpecificData = null;

    /**
     * @var PaymentProduct320SpecificData
     */
    public $paymentProduct320SpecificData = null;

    /**
     * @var string
     */
    public $paymentProductGroup = null;

    /**
     * @var bool
     */
    public $usesRedirectionTo3rdParty = null;

    /**
     * @return AccountOnFile[]
     */
    public function getAccountsOnFile()
    {
        return $this->accountsOnFile;
    }

    /**
     * @param AccountOnFile[]
     */
    public function setAccountsOnFile($value)
    {
        $this->accountsOnFile = $value;
    }

    /**
     * @return bool
     */
    public function getAllowsAuthentication()
    {
        return $this->allowsAuthentication;
    }

    /**
     * @param bool
     */
    public function setAllowsAuthentication($value)
    {
        $this->allowsAuthentication = $value;
    }

    /**
     * @return bool
     */
    public function getAllowsRecurring()
    {
        return $this->allowsRecurring;
    }

    /**
     * @param bool
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
     * @param bool
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
     * @param PaymentProductDisplayHints
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
     * @param PaymentProductDisplayHints[]
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
     * @param PaymentProductField[]
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
     * @param int
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
     * @param string
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
     * @param PaymentProduct302SpecificData
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
     * @param PaymentProduct320SpecificData
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
     * @param string
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
     * @param bool
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
        if (!is_null($this->accountsOnFile)) {
            $object->accountsOnFile = [];
            foreach ($this->accountsOnFile as $element) {
                if (!is_null($element)) {
                    $object->accountsOnFile[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->allowsAuthentication)) {
            $object->allowsAuthentication = $this->allowsAuthentication;
        }
        if (!is_null($this->allowsRecurring)) {
            $object->allowsRecurring = $this->allowsRecurring;
        }
        if (!is_null($this->allowsTokenization)) {
            $object->allowsTokenization = $this->allowsTokenization;
        }
        if (!is_null($this->displayHints)) {
            $object->displayHints = $this->displayHints->toObject();
        }
        if (!is_null($this->displayHintsList)) {
            $object->displayHintsList = [];
            foreach ($this->displayHintsList as $element) {
                if (!is_null($element)) {
                    $object->displayHintsList[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->fields)) {
            $object->fields = [];
            foreach ($this->fields as $element) {
                if (!is_null($element)) {
                    $object->fields[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->paymentMethod)) {
            $object->paymentMethod = $this->paymentMethod;
        }
        if (!is_null($this->paymentProduct302SpecificData)) {
            $object->paymentProduct302SpecificData = $this->paymentProduct302SpecificData->toObject();
        }
        if (!is_null($this->paymentProduct320SpecificData)) {
            $object->paymentProduct320SpecificData = $this->paymentProduct320SpecificData->toObject();
        }
        if (!is_null($this->paymentProductGroup)) {
            $object->paymentProductGroup = $this->paymentProductGroup;
        }
        if (!is_null($this->usesRedirectionTo3rdParty)) {
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
        if (property_exists($object, 'allowsAuthentication')) {
            $this->allowsAuthentication = $object->allowsAuthentication;
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
