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
class MobilePaymentMethodSpecificInput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $authorizationMode;

    /**
     * @var DecryptedPaymentData
     */
    private $decryptedPaymentData;

    /**
     * @var string
     */
    private $encryptedPaymentData;

    /**
     * @var string
     */
    private $ephemeralKey;

    /**
     * @var MobilePaymentProduct320SpecificInput
     */
    private $paymentProduct320SpecificInput;

    /**
     * @var int
     */
    private $paymentProductId;

    /**
     * @var string
     */
    private $publicKeyHash;

    /**
     * @var bool
     */
    private $requiresApproval;

    // Methods
    /**
     * @return string
     */
    public function getAuthorizationMode()
    {
        return $this->authorizationMode;
    }
    /**
     * @var string
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
     * @var DecryptedPaymentData
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
     * @var string
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
     * @var string
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
     * @var MobilePaymentProduct320SpecificInput
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
     * @var int
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
     * @var string
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
     * @var bool
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
        if ($this->authorizationMode !== null) {
            $object->authorizationMode = $this->authorizationMode;
        }
        if ($this->decryptedPaymentData !== null) {
            $object->decryptedPaymentData = $this->decryptedPaymentData->toObject();
        }
        if ($this->encryptedPaymentData !== null) {
            $object->encryptedPaymentData = $this->encryptedPaymentData;
        }
        if ($this->ephemeralKey !== null) {
            $object->ephemeralKey = $this->ephemeralKey;
        }
        if ($this->paymentProduct320SpecificInput !== null) {
            $object->paymentProduct320SpecificInput = $this->paymentProduct320SpecificInput->toObject();
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if ($this->publicKeyHash !== null) {
            $object->publicKeyHash = $this->publicKeyHash;
        }
        if ($this->requiresApproval !== null) {
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
