<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentMethodSpecificOutput extends DataObject
{
    /**
     * @var string
     */
    public $authorisationCode = null;

    /**
     * @var CustomerBankAccount
     */
    public $customerBankAccount = null;

    /**
     * @var FraudResults
     */
    public $fraudResults = null;

    /**
     * @var string
     */
    public $paymentOption = null;

    /**
     * @var PaymentProduct3203SpecificOutput
     */
    public $paymentProduct3203SpecificOutput = null;

    /**
     * @var PaymentProduct5001SpecificOutput
     */
    public $paymentProduct5001SpecificOutput = null;

    /**
     * @var PaymentProduct5402SpecificOutput
     */
    public $paymentProduct5402SpecificOutput = null;

    /**
     * @var PaymentProduct5500SpecificOutput
     */
    public $paymentProduct5500SpecificOutput = null;

    /**
     * @var PaymentProduct840SpecificOutput
     */
    public $paymentProduct840SpecificOutput = null;

    /**
     * @var int
     */
    public $paymentProductId = null;

    /**
     * @var string
     */
    public $token = null;

    /**
     * @return string
     */
    public function getAuthorisationCode()
    {
        return $this->authorisationCode;
    }

    /**
     * @param string
     */
    public function setAuthorisationCode($value)
    {
        $this->authorisationCode = $value;
    }

    /**
     * @return CustomerBankAccount
     */
    public function getCustomerBankAccount()
    {
        return $this->customerBankAccount;
    }

    /**
     * @param CustomerBankAccount
     */
    public function setCustomerBankAccount($value)
    {
        $this->customerBankAccount = $value;
    }

    /**
     * @return FraudResults
     */
    public function getFraudResults()
    {
        return $this->fraudResults;
    }

    /**
     * @param FraudResults
     */
    public function setFraudResults($value)
    {
        $this->fraudResults = $value;
    }

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
     * @return PaymentProduct3203SpecificOutput
     */
    public function getPaymentProduct3203SpecificOutput()
    {
        return $this->paymentProduct3203SpecificOutput;
    }

    /**
     * @param PaymentProduct3203SpecificOutput
     */
    public function setPaymentProduct3203SpecificOutput($value)
    {
        $this->paymentProduct3203SpecificOutput = $value;
    }

    /**
     * @return PaymentProduct5001SpecificOutput
     */
    public function getPaymentProduct5001SpecificOutput()
    {
        return $this->paymentProduct5001SpecificOutput;
    }

    /**
     * @param PaymentProduct5001SpecificOutput
     */
    public function setPaymentProduct5001SpecificOutput($value)
    {
        $this->paymentProduct5001SpecificOutput = $value;
    }

    /**
     * @return PaymentProduct5402SpecificOutput
     */
    public function getPaymentProduct5402SpecificOutput()
    {
        return $this->paymentProduct5402SpecificOutput;
    }

    /**
     * @param PaymentProduct5402SpecificOutput
     */
    public function setPaymentProduct5402SpecificOutput($value)
    {
        $this->paymentProduct5402SpecificOutput = $value;
    }

    /**
     * @return PaymentProduct5500SpecificOutput
     */
    public function getPaymentProduct5500SpecificOutput()
    {
        return $this->paymentProduct5500SpecificOutput;
    }

    /**
     * @param PaymentProduct5500SpecificOutput
     */
    public function setPaymentProduct5500SpecificOutput($value)
    {
        $this->paymentProduct5500SpecificOutput = $value;
    }

    /**
     * @return PaymentProduct840SpecificOutput
     */
    public function getPaymentProduct840SpecificOutput()
    {
        return $this->paymentProduct840SpecificOutput;
    }

    /**
     * @param PaymentProduct840SpecificOutput
     */
    public function setPaymentProduct840SpecificOutput($value)
    {
        $this->paymentProduct840SpecificOutput = $value;
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
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->authorisationCode)) {
            $object->authorisationCode = $this->authorisationCode;
        }
        if (!is_null($this->customerBankAccount)) {
            $object->customerBankAccount = $this->customerBankAccount->toObject();
        }
        if (!is_null($this->fraudResults)) {
            $object->fraudResults = $this->fraudResults->toObject();
        }
        if (!is_null($this->paymentOption)) {
            $object->paymentOption = $this->paymentOption;
        }
        if (!is_null($this->paymentProduct3203SpecificOutput)) {
            $object->paymentProduct3203SpecificOutput = $this->paymentProduct3203SpecificOutput->toObject();
        }
        if (!is_null($this->paymentProduct5001SpecificOutput)) {
            $object->paymentProduct5001SpecificOutput = $this->paymentProduct5001SpecificOutput->toObject();
        }
        if (!is_null($this->paymentProduct5402SpecificOutput)) {
            $object->paymentProduct5402SpecificOutput = $this->paymentProduct5402SpecificOutput->toObject();
        }
        if (!is_null($this->paymentProduct5500SpecificOutput)) {
            $object->paymentProduct5500SpecificOutput = $this->paymentProduct5500SpecificOutput->toObject();
        }
        if (!is_null($this->paymentProduct840SpecificOutput)) {
            $object->paymentProduct840SpecificOutput = $this->paymentProduct840SpecificOutput->toObject();
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if (!is_null($this->token)) {
            $object->token = $this->token;
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
        if (property_exists($object, 'authorisationCode')) {
            $this->authorisationCode = $object->authorisationCode;
        }
        if (property_exists($object, 'customerBankAccount')) {
            if (!is_object($object->customerBankAccount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customerBankAccount, true) . '\' is not an object');
            }
            $value = new CustomerBankAccount();
            $this->customerBankAccount = $value->fromObject($object->customerBankAccount);
        }
        if (property_exists($object, 'fraudResults')) {
            if (!is_object($object->fraudResults)) {
                throw new UnexpectedValueException('value \'' . print_r($object->fraudResults, true) . '\' is not an object');
            }
            $value = new FraudResults();
            $this->fraudResults = $value->fromObject($object->fraudResults);
        }
        if (property_exists($object, 'paymentOption')) {
            $this->paymentOption = $object->paymentOption;
        }
        if (property_exists($object, 'paymentProduct3203SpecificOutput')) {
            if (!is_object($object->paymentProduct3203SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3203SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct3203SpecificOutput();
            $this->paymentProduct3203SpecificOutput = $value->fromObject($object->paymentProduct3203SpecificOutput);
        }
        if (property_exists($object, 'paymentProduct5001SpecificOutput')) {
            if (!is_object($object->paymentProduct5001SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5001SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct5001SpecificOutput();
            $this->paymentProduct5001SpecificOutput = $value->fromObject($object->paymentProduct5001SpecificOutput);
        }
        if (property_exists($object, 'paymentProduct5402SpecificOutput')) {
            if (!is_object($object->paymentProduct5402SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5402SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct5402SpecificOutput();
            $this->paymentProduct5402SpecificOutput = $value->fromObject($object->paymentProduct5402SpecificOutput);
        }
        if (property_exists($object, 'paymentProduct5500SpecificOutput')) {
            if (!is_object($object->paymentProduct5500SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5500SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct5500SpecificOutput();
            $this->paymentProduct5500SpecificOutput = $value->fromObject($object->paymentProduct5500SpecificOutput);
        }
        if (property_exists($object, 'paymentProduct840SpecificOutput')) {
            if (!is_object($object->paymentProduct840SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct840SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct840SpecificOutput();
            $this->paymentProduct840SpecificOutput = $value->fromObject($object->paymentProduct840SpecificOutput);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        return $this;
    }
}
