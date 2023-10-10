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
class RedirectPaymentMethodSpecificInput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $paymentOption;

    /**
     * @var RedirectPaymentProduct3306SpecificInput
     */
    private $paymentProduct3306SpecificInput;

    /**
     * @var RedirectPaymentProduct5406SpecificInput
     */
    private $paymentProduct5406SpecificInput;

    /**
     * @var RedirectPaymentProduct5408SpecificInput
     */
    private $paymentProduct5408SpecificInput;

    /**
     * @var RedirectPaymentProduct809SpecificInput
     */
    private $paymentProduct809SpecificInput;

    /**
     * @var RedirectPaymentProduct840SpecificInput
     */
    private $paymentProduct840SpecificInput;

    /**
     * @var int
     */
    private $paymentProductId;

    /**
     * @var RedirectionData
     */
    private $redirectionData;

    /**
     * @var bool
     */
    private $requiresApproval;

    /**
     * @var string
     */
    private $token;

    /**
     * @var bool
     */
    private $tokenize;

    // Methods
    /**
     * @return string
     */
    public function getPaymentOption()
    {
        return $this->paymentOption;
    }
    /**
     * @var string
     */
    public function setPaymentOption($value)
    {
        $this->paymentOption = $value;
    }

    /**
     * @return RedirectPaymentProduct3306SpecificInput
     */
    public function getPaymentProduct3306SpecificInput()
    {
        return $this->paymentProduct3306SpecificInput;
    }
    /**
     * @var RedirectPaymentProduct3306SpecificInput
     */
    public function setPaymentProduct3306SpecificInput($value)
    {
        $this->paymentProduct3306SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5406SpecificInput
     */
    public function getPaymentProduct5406SpecificInput()
    {
        return $this->paymentProduct5406SpecificInput;
    }
    /**
     * @var RedirectPaymentProduct5406SpecificInput
     */
    public function setPaymentProduct5406SpecificInput($value)
    {
        $this->paymentProduct5406SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5408SpecificInput
     */
    public function getPaymentProduct5408SpecificInput()
    {
        return $this->paymentProduct5408SpecificInput;
    }
    /**
     * @var RedirectPaymentProduct5408SpecificInput
     */
    public function setPaymentProduct5408SpecificInput($value)
    {
        $this->paymentProduct5408SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct809SpecificInput
     */
    public function getPaymentProduct809SpecificInput()
    {
        return $this->paymentProduct809SpecificInput;
    }
    /**
     * @var RedirectPaymentProduct809SpecificInput
     */
    public function setPaymentProduct809SpecificInput($value)
    {
        $this->paymentProduct809SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct840SpecificInput
     */
    public function getPaymentProduct840SpecificInput()
    {
        return $this->paymentProduct840SpecificInput;
    }
    /**
     * @var RedirectPaymentProduct840SpecificInput
     */
    public function setPaymentProduct840SpecificInput($value)
    {
        $this->paymentProduct840SpecificInput = $value;
    }

    /**
     * @return int
     */
    public function getPaymentProductId()
    {
        return $this->paymentProductId;
    }
    /**
     * @var int
     */
    public function setPaymentProductId($value)
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return RedirectionData
     */
    public function getRedirectionData()
    {
        return $this->redirectionData;
    }
    /**
     * @var RedirectionData
     */
    public function setRedirectionData($value)
    {
        $this->redirectionData = $value;
    }

    /**
     * @return bool
     */
    public function getRequiresApproval()
    {
        return $this->requiresApproval;
    }
    /**
     * @var bool
     */
    public function setRequiresApproval($value)
    {
        $this->requiresApproval = $value;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * @var string
     */
    public function setToken($value)
    {
        $this->token = $value;
    }

    /**
     * @return bool
     */
    public function getTokenize()
    {
        return $this->tokenize;
    }
    /**
     * @var bool
     */
    public function setTokenize($value)
    {
        $this->tokenize = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->paymentOption !== null) {
            $object->paymentOption = $this->paymentOption;
        }
        if ($this->paymentProduct3306SpecificInput !== null) {
            $object->paymentProduct3306SpecificInput = $this->paymentProduct3306SpecificInput->toObject();
        }
        if ($this->paymentProduct5406SpecificInput !== null) {
            $object->paymentProduct5406SpecificInput = $this->paymentProduct5406SpecificInput->toObject();
        }
        if ($this->paymentProduct5408SpecificInput !== null) {
            $object->paymentProduct5408SpecificInput = $this->paymentProduct5408SpecificInput->toObject();
        }
        if ($this->paymentProduct809SpecificInput !== null) {
            $object->paymentProduct809SpecificInput = $this->paymentProduct809SpecificInput->toObject();
        }
        if ($this->paymentProduct840SpecificInput !== null) {
            $object->paymentProduct840SpecificInput = $this->paymentProduct840SpecificInput->toObject();
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if ($this->redirectionData !== null) {
            $object->redirectionData = $this->redirectionData->toObject();
        }
        if ($this->requiresApproval !== null) {
            $object->requiresApproval = $this->requiresApproval;
        }
        if ($this->token !== null) {
            $object->token = $this->token;
        }
        if ($this->tokenize !== null) {
            $object->tokenize = $this->tokenize;
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
        if (property_exists($object, 'paymentOption')) {
            $this->paymentOption = $object->paymentOption;
        }
        if (property_exists($object, 'paymentProduct3306SpecificInput')) {
            if (!is_object($object->paymentProduct3306SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3306SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct3306SpecificInput();
            $this->paymentProduct3306SpecificInput = $value->fromObject($object->paymentProduct3306SpecificInput);
        }
        if (property_exists($object, 'paymentProduct5406SpecificInput')) {
            if (!is_object($object->paymentProduct5406SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5406SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct5406SpecificInput();
            $this->paymentProduct5406SpecificInput = $value->fromObject($object->paymentProduct5406SpecificInput);
        }
        if (property_exists($object, 'paymentProduct5408SpecificInput')) {
            if (!is_object($object->paymentProduct5408SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5408SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct5408SpecificInput();
            $this->paymentProduct5408SpecificInput = $value->fromObject($object->paymentProduct5408SpecificInput);
        }
        if (property_exists($object, 'paymentProduct809SpecificInput')) {
            if (!is_object($object->paymentProduct809SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct809SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct809SpecificInput();
            $this->paymentProduct809SpecificInput = $value->fromObject($object->paymentProduct809SpecificInput);
        }
        if (property_exists($object, 'paymentProduct840SpecificInput')) {
            if (!is_object($object->paymentProduct840SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct840SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct840SpecificInput();
            $this->paymentProduct840SpecificInput = $value->fromObject($object->paymentProduct840SpecificInput);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'redirectionData')) {
            if (!is_object($object->redirectionData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->redirectionData, true) . '\' is not an object');
            }
            $value = new RedirectionData();
            $this->redirectionData = $value->fromObject($object->redirectionData);
        }
        if (property_exists($object, 'requiresApproval')) {
            $this->requiresApproval = $object->requiresApproval;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        if (property_exists($object, 'tokenize')) {
            $this->tokenize = $object->tokenize;
        }
        return $this;
    }
}
