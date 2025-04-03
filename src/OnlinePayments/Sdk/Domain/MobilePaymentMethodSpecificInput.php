<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MobilePaymentMethodSpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $authorizationMode = null;

    /**
     * @var DecryptedPaymentData
     */
    public $decryptedPaymentData = null;

    /**
     * @var string
     */
    public $encryptedPaymentData = null;

    /**
     * @var string
     */
    public $ephemeralKey = null;

    /**
     * @var MobilePaymentProduct320SpecificInput
     */
    public $paymentProduct320SpecificInput = null;

    /**
     * @var int
     */
    public $paymentProductId = null;

    /**
     * @var string
     */
    public $publicKeyHash = null;

    /**
     * @var bool
     */
    public $requiresApproval = null;

    /**
     * @return string
     */
    public function getAuthorizationMode()
    {
        return $this->authorizationMode;
    }

    /**
     * @param string
     */
    public function setAuthorizationMode($value)
    {
        $this->authorizationMode = $value;
    }

    /**
     * @return DecryptedPaymentData
     */
    public function getDecryptedPaymentData()
    {
        return $this->decryptedPaymentData;
    }

    /**
     * @param DecryptedPaymentData
     */
    public function setDecryptedPaymentData($value)
    {
        $this->decryptedPaymentData = $value;
    }

    /**
     * @return string
     */
    public function getEncryptedPaymentData()
    {
        return $this->encryptedPaymentData;
    }

    /**
     * @param string
     */
    public function setEncryptedPaymentData($value)
    {
        $this->encryptedPaymentData = $value;
    }

    /**
     * @return string
     */
    public function getEphemeralKey()
    {
        return $this->ephemeralKey;
    }

    /**
     * @param string
     */
    public function setEphemeralKey($value)
    {
        $this->ephemeralKey = $value;
    }

    /**
     * @return MobilePaymentProduct320SpecificInput
     */
    public function getPaymentProduct320SpecificInput()
    {
        return $this->paymentProduct320SpecificInput;
    }

    /**
     * @param MobilePaymentProduct320SpecificInput
     */
    public function setPaymentProduct320SpecificInput($value)
    {
        $this->paymentProduct320SpecificInput = $value;
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
    public function getPublicKeyHash()
    {
        return $this->publicKeyHash;
    }

    /**
     * @param string
     */
    public function setPublicKeyHash($value)
    {
        $this->publicKeyHash = $value;
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
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->authorizationMode)) {
            $object->authorizationMode = $this->authorizationMode;
        }
        if (!is_null($this->decryptedPaymentData)) {
            $object->decryptedPaymentData = $this->decryptedPaymentData->toObject();
        }
        if (!is_null($this->encryptedPaymentData)) {
            $object->encryptedPaymentData = $this->encryptedPaymentData;
        }
        if (!is_null($this->ephemeralKey)) {
            $object->ephemeralKey = $this->ephemeralKey;
        }
        if (!is_null($this->paymentProduct320SpecificInput)) {
            $object->paymentProduct320SpecificInput = $this->paymentProduct320SpecificInput->toObject();
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if (!is_null($this->publicKeyHash)) {
            $object->publicKeyHash = $this->publicKeyHash;
        }
        if (!is_null($this->requiresApproval)) {
            $object->requiresApproval = $this->requiresApproval;
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
        if (property_exists($object, 'authorizationMode')) {
            $this->authorizationMode = $object->authorizationMode;
        }
        if (property_exists($object, 'decryptedPaymentData')) {
            if (!is_object($object->decryptedPaymentData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->decryptedPaymentData, true) . '\' is not an object');
            }
            $value = new DecryptedPaymentData();
            $this->decryptedPaymentData = $value->fromObject($object->decryptedPaymentData);
        }
        if (property_exists($object, 'encryptedPaymentData')) {
            $this->encryptedPaymentData = $object->encryptedPaymentData;
        }
        if (property_exists($object, 'ephemeralKey')) {
            $this->ephemeralKey = $object->ephemeralKey;
        }
        if (property_exists($object, 'paymentProduct320SpecificInput')) {
            if (!is_object($object->paymentProduct320SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct320SpecificInput, true) . '\' is not an object');
            }
            $value = new MobilePaymentProduct320SpecificInput();
            $this->paymentProduct320SpecificInput = $value->fromObject($object->paymentProduct320SpecificInput);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'publicKeyHash')) {
            $this->publicKeyHash = $object->publicKeyHash;
        }
        if (property_exists($object, 'requiresApproval')) {
            $this->requiresApproval = $object->requiresApproval;
        }
        return $this;
    }
}
