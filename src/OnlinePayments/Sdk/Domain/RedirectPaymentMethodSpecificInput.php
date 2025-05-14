<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentMethodSpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $paymentOption = null;

    /**
     * @var RedirectPaymentProduct3203SpecificInput
     */
    public $paymentProduct3203SpecificInput = null;

    /**
     * @var RedirectPaymentProduct3204SpecificInput
     */
    public $paymentProduct3204SpecificInput = null;

    /**
     * @var RedirectPaymentProduct3302SpecificInput
     */
    public $paymentProduct3302SpecificInput = null;

    /**
     * @var RedirectPaymentProduct3306SpecificInput
     */
    public $paymentProduct3306SpecificInput = null;

    /**
     * @var RedirectPaymentProduct5001SpecificInput
     */
    public $paymentProduct5001SpecificInput = null;

    /**
     * @var RedirectPaymentProduct5300SpecificInput
     */
    public $paymentProduct5300SpecificInput = null;

    /**
     * @var RedirectPaymentProduct5402SpecificInput
     */
    public $paymentProduct5402SpecificInput = null;

    /**
     * @var RedirectPaymentProduct5403SpecificInput
     */
    public $paymentProduct5403SpecificInput = null;

    /**
     * @var RedirectPaymentProduct5406SpecificInput
     */
    public $paymentProduct5406SpecificInput = null;

    /**
     * @var RedirectPaymentProduct5408SpecificInput
     */
    public $paymentProduct5408SpecificInput = null;

    /**
     * @var RedirectPaymentProduct5410SpecificInput
     */
    public $paymentProduct5410SpecificInput = null;

    /**
     * @var RedirectPaymentProduct809SpecificInput
     */
    public $paymentProduct809SpecificInput = null;

    /**
     * @var RedirectPaymentProduct840SpecificInput
     */
    public $paymentProduct840SpecificInput = null;

    /**
     * @var int
     */
    public $paymentProductId = null;

    /**
     * @var RedirectionData
     */
    public $redirectionData = null;

    /**
     * @var bool
     */
    public $requiresApproval = null;

    /**
     * @var string
     */
    public $token = null;

    /**
     * @var bool
     */
    public $tokenize = null;

    /**
     * @return string
     */
    public function getPaymentOption()
    {
        return $this->paymentOption;
    }

    /**
     * @param string
     */
    public function setPaymentOption($value)
    {
        $this->paymentOption = $value;
    }

    /**
     * @return RedirectPaymentProduct3203SpecificInput
     */
    public function getPaymentProduct3203SpecificInput()
    {
        return $this->paymentProduct3203SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct3203SpecificInput
     */
    public function setPaymentProduct3203SpecificInput($value)
    {
        $this->paymentProduct3203SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct3204SpecificInput
     */
    public function getPaymentProduct3204SpecificInput()
    {
        return $this->paymentProduct3204SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct3204SpecificInput
     */
    public function setPaymentProduct3204SpecificInput($value)
    {
        $this->paymentProduct3204SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct3302SpecificInput
     */
    public function getPaymentProduct3302SpecificInput()
    {
        return $this->paymentProduct3302SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct3302SpecificInput
     */
    public function setPaymentProduct3302SpecificInput($value)
    {
        $this->paymentProduct3302SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct3306SpecificInput
     */
    public function getPaymentProduct3306SpecificInput()
    {
        return $this->paymentProduct3306SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct3306SpecificInput
     */
    public function setPaymentProduct3306SpecificInput($value)
    {
        $this->paymentProduct3306SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5001SpecificInput
     */
    public function getPaymentProduct5001SpecificInput()
    {
        return $this->paymentProduct5001SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct5001SpecificInput
     */
    public function setPaymentProduct5001SpecificInput($value)
    {
        $this->paymentProduct5001SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5300SpecificInput
     */
    public function getPaymentProduct5300SpecificInput()
    {
        return $this->paymentProduct5300SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct5300SpecificInput
     */
    public function setPaymentProduct5300SpecificInput($value)
    {
        $this->paymentProduct5300SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5402SpecificInput
     */
    public function getPaymentProduct5402SpecificInput()
    {
        return $this->paymentProduct5402SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct5402SpecificInput
     */
    public function setPaymentProduct5402SpecificInput($value)
    {
        $this->paymentProduct5402SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5403SpecificInput
     */
    public function getPaymentProduct5403SpecificInput()
    {
        return $this->paymentProduct5403SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct5403SpecificInput
     */
    public function setPaymentProduct5403SpecificInput($value)
    {
        $this->paymentProduct5403SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5406SpecificInput
     */
    public function getPaymentProduct5406SpecificInput()
    {
        return $this->paymentProduct5406SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct5406SpecificInput
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
     * @param RedirectPaymentProduct5408SpecificInput
     */
    public function setPaymentProduct5408SpecificInput($value)
    {
        $this->paymentProduct5408SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5410SpecificInput
     */
    public function getPaymentProduct5410SpecificInput()
    {
        return $this->paymentProduct5410SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct5410SpecificInput
     */
    public function setPaymentProduct5410SpecificInput($value)
    {
        $this->paymentProduct5410SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct809SpecificInput
     */
    public function getPaymentProduct809SpecificInput()
    {
        return $this->paymentProduct809SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct809SpecificInput
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
     * @param RedirectPaymentProduct840SpecificInput
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
     * @param int
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
     * @param RedirectionData
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
     * @param bool
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
     * @param string
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
     * @param bool
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
        if (!is_null($this->paymentOption)) {
            $object->paymentOption = $this->paymentOption;
        }
        if (!is_null($this->paymentProduct3203SpecificInput)) {
            $object->paymentProduct3203SpecificInput = $this->paymentProduct3203SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct3204SpecificInput)) {
            $object->paymentProduct3204SpecificInput = $this->paymentProduct3204SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct3302SpecificInput)) {
            $object->paymentProduct3302SpecificInput = $this->paymentProduct3302SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct3306SpecificInput)) {
            $object->paymentProduct3306SpecificInput = $this->paymentProduct3306SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct5001SpecificInput)) {
            $object->paymentProduct5001SpecificInput = $this->paymentProduct5001SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct5300SpecificInput)) {
            $object->paymentProduct5300SpecificInput = $this->paymentProduct5300SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct5402SpecificInput)) {
            $object->paymentProduct5402SpecificInput = $this->paymentProduct5402SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct5403SpecificInput)) {
            $object->paymentProduct5403SpecificInput = $this->paymentProduct5403SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct5406SpecificInput)) {
            $object->paymentProduct5406SpecificInput = $this->paymentProduct5406SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct5408SpecificInput)) {
            $object->paymentProduct5408SpecificInput = $this->paymentProduct5408SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct5410SpecificInput)) {
            $object->paymentProduct5410SpecificInput = $this->paymentProduct5410SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct809SpecificInput)) {
            $object->paymentProduct809SpecificInput = $this->paymentProduct809SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct840SpecificInput)) {
            $object->paymentProduct840SpecificInput = $this->paymentProduct840SpecificInput->toObject();
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if (!is_null($this->redirectionData)) {
            $object->redirectionData = $this->redirectionData->toObject();
        }
        if (!is_null($this->requiresApproval)) {
            $object->requiresApproval = $this->requiresApproval;
        }
        if (!is_null($this->token)) {
            $object->token = $this->token;
        }
        if (!is_null($this->tokenize)) {
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
        if (property_exists($object, 'paymentProduct3203SpecificInput')) {
            if (!is_object($object->paymentProduct3203SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3203SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct3203SpecificInput();
            $this->paymentProduct3203SpecificInput = $value->fromObject($object->paymentProduct3203SpecificInput);
        }
        if (property_exists($object, 'paymentProduct3204SpecificInput')) {
            if (!is_object($object->paymentProduct3204SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3204SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct3204SpecificInput();
            $this->paymentProduct3204SpecificInput = $value->fromObject($object->paymentProduct3204SpecificInput);
        }
        if (property_exists($object, 'paymentProduct3302SpecificInput')) {
            if (!is_object($object->paymentProduct3302SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3302SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct3302SpecificInput();
            $this->paymentProduct3302SpecificInput = $value->fromObject($object->paymentProduct3302SpecificInput);
        }
        if (property_exists($object, 'paymentProduct3306SpecificInput')) {
            if (!is_object($object->paymentProduct3306SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3306SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct3306SpecificInput();
            $this->paymentProduct3306SpecificInput = $value->fromObject($object->paymentProduct3306SpecificInput);
        }
        if (property_exists($object, 'paymentProduct5001SpecificInput')) {
            if (!is_object($object->paymentProduct5001SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5001SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct5001SpecificInput();
            $this->paymentProduct5001SpecificInput = $value->fromObject($object->paymentProduct5001SpecificInput);
        }
        if (property_exists($object, 'paymentProduct5300SpecificInput')) {
            if (!is_object($object->paymentProduct5300SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5300SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct5300SpecificInput();
            $this->paymentProduct5300SpecificInput = $value->fromObject($object->paymentProduct5300SpecificInput);
        }
        if (property_exists($object, 'paymentProduct5402SpecificInput')) {
            if (!is_object($object->paymentProduct5402SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5402SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct5402SpecificInput();
            $this->paymentProduct5402SpecificInput = $value->fromObject($object->paymentProduct5402SpecificInput);
        }
        if (property_exists($object, 'paymentProduct5403SpecificInput')) {
            if (!is_object($object->paymentProduct5403SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5403SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct5403SpecificInput();
            $this->paymentProduct5403SpecificInput = $value->fromObject($object->paymentProduct5403SpecificInput);
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
        if (property_exists($object, 'paymentProduct5410SpecificInput')) {
            if (!is_object($object->paymentProduct5410SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5410SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct5410SpecificInput();
            $this->paymentProduct5410SpecificInput = $value->fromObject($object->paymentProduct5410SpecificInput);
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
