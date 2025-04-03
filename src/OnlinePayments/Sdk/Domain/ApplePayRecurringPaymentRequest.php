<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ApplePayRecurringPaymentRequest extends DataObject
{
    /**
     * @var string
     */
    public $billingAgreement = null;

    /**
     * @var string
     */
    public $managementUrl = null;

    /**
     * @var string
     */
    public $paymentDescription = null;

    /**
     * @var ApplePayLineItem
     */
    public $regularBilling = null;

    /**
     * @var ApplePayLineItem
     */
    public $trialBilling = null;

    /**
     * @return string
     */
    public function getBillingAgreement()
    {
        return $this->billingAgreement;
    }

    /**
     * @param string
     */
    public function setBillingAgreement($value)
    {
        $this->billingAgreement = $value;
    }

    /**
     * @return string
     */
    public function getManagementUrl()
    {
        return $this->managementUrl;
    }

    /**
     * @param string
     */
    public function setManagementUrl($value)
    {
        $this->managementUrl = $value;
    }

    /**
     * @return string
     */
    public function getPaymentDescription()
    {
        return $this->paymentDescription;
    }

    /**
     * @param string
     */
    public function setPaymentDescription($value)
    {
        $this->paymentDescription = $value;
    }

    /**
     * @return ApplePayLineItem
     */
    public function getRegularBilling()
    {
        return $this->regularBilling;
    }

    /**
     * @param ApplePayLineItem
     */
    public function setRegularBilling($value)
    {
        $this->regularBilling = $value;
    }

    /**
     * @return ApplePayLineItem
     */
    public function getTrialBilling()
    {
        return $this->trialBilling;
    }

    /**
     * @param ApplePayLineItem
     */
    public function setTrialBilling($value)
    {
        $this->trialBilling = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->billingAgreement)) {
            $object->billingAgreement = $this->billingAgreement;
        }
        if (!is_null($this->managementUrl)) {
            $object->managementUrl = $this->managementUrl;
        }
        if (!is_null($this->paymentDescription)) {
            $object->paymentDescription = $this->paymentDescription;
        }
        if (!is_null($this->regularBilling)) {
            $object->regularBilling = $this->regularBilling->toObject();
        }
        if (!is_null($this->trialBilling)) {
            $object->trialBilling = $this->trialBilling->toObject();
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
        if (property_exists($object, 'billingAgreement')) {
            $this->billingAgreement = $object->billingAgreement;
        }
        if (property_exists($object, 'managementUrl')) {
            $this->managementUrl = $object->managementUrl;
        }
        if (property_exists($object, 'paymentDescription')) {
            $this->paymentDescription = $object->paymentDescription;
        }
        if (property_exists($object, 'regularBilling')) {
            if (!is_object($object->regularBilling)) {
                throw new UnexpectedValueException('value \'' . print_r($object->regularBilling, true) . '\' is not an object');
            }
            $value = new ApplePayLineItem();
            $this->regularBilling = $value->fromObject($object->regularBilling);
        }
        if (property_exists($object, 'trialBilling')) {
            if (!is_object($object->trialBilling)) {
                throw new UnexpectedValueException('value \'' . print_r($object->trialBilling, true) . '\' is not an object');
            }
            $value = new ApplePayLineItem();
            $this->trialBilling = $value->fromObject($object->trialBilling);
        }
        return $this;
    }
}
