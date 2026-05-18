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
     * @var string|null
     */
    public ?string $authorizationMode = null;

    /**
     * @var DecryptedPaymentData|null
     */
    public ?DecryptedPaymentData $decryptedPaymentData = null;

    /**
     * @var string|null
     */
    public ?string $encryptedPaymentData = null;

    /**
     * @var string|null
     */
    public ?string $ephemeralKey = null;

    /**
     * @var MobilePaymentProduct302SpecificInput|null
     */
    public ?MobilePaymentProduct302SpecificInput $paymentProduct302SpecificInput = null;

    /**
     * @var MobilePaymentProduct320SpecificInput|null
     */
    public ?MobilePaymentProduct320SpecificInput $paymentProduct320SpecificInput = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @var string|null
     */
    public ?string $publicKeyHash = null;

    /**
     * @var bool|null
     */
    public ?bool $requiresApproval = null;

    /**
     * @return string|null
     */
    public function getAuthorizationMode(): ?string
    {
        return $this->authorizationMode;
    }

    /**
     * @param string|null $value
     */
    public function setAuthorizationMode(?string $value): void
    {
        $this->authorizationMode = $value;
    }

    /**
     * @return DecryptedPaymentData|null
     */
    public function getDecryptedPaymentData(): ?DecryptedPaymentData
    {
        return $this->decryptedPaymentData;
    }

    /**
     * @param DecryptedPaymentData|null $value
     */
    public function setDecryptedPaymentData(?DecryptedPaymentData $value): void
    {
        $this->decryptedPaymentData = $value;
    }

    /**
     * @return string|null
     */
    public function getEncryptedPaymentData(): ?string
    {
        return $this->encryptedPaymentData;
    }

    /**
     * @param string|null $value
     */
    public function setEncryptedPaymentData(?string $value): void
    {
        $this->encryptedPaymentData = $value;
    }

    /**
     * @return string|null
     */
    public function getEphemeralKey(): ?string
    {
        return $this->ephemeralKey;
    }

    /**
     * @param string|null $value
     */
    public function setEphemeralKey(?string $value): void
    {
        $this->ephemeralKey = $value;
    }

    /**
     * @return MobilePaymentProduct302SpecificInput|null
     */
    public function getPaymentProduct302SpecificInput(): ?MobilePaymentProduct302SpecificInput
    {
        return $this->paymentProduct302SpecificInput;
    }

    /**
     * @param MobilePaymentProduct302SpecificInput|null $value
     */
    public function setPaymentProduct302SpecificInput(?MobilePaymentProduct302SpecificInput $value): void
    {
        $this->paymentProduct302SpecificInput = $value;
    }

    /**
     * @return MobilePaymentProduct320SpecificInput|null
     */
    public function getPaymentProduct320SpecificInput(): ?MobilePaymentProduct320SpecificInput
    {
        return $this->paymentProduct320SpecificInput;
    }

    /**
     * @param MobilePaymentProduct320SpecificInput|null $value
     */
    public function setPaymentProduct320SpecificInput(?MobilePaymentProduct320SpecificInput $value): void
    {
        $this->paymentProduct320SpecificInput = $value;
    }

    /**
     * @return int|null
     */
    public function getPaymentProductId(): ?int
    {
        return $this->paymentProductId;
    }

    /**
     * @param int|null $value
     */
    public function setPaymentProductId(?int $value): void
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return string|null
     */
    public function getPublicKeyHash(): ?string
    {
        return $this->publicKeyHash;
    }

    /**
     * @param string|null $value
     */
    public function setPublicKeyHash(?string $value): void
    {
        $this->publicKeyHash = $value;
    }

    /**
     * @return bool|null
     */
    public function getRequiresApproval(): ?bool
    {
        return $this->requiresApproval;
    }

    /**
     * @param bool|null $value
     */
    public function setRequiresApproval(?bool $value): void
    {
        $this->requiresApproval = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
        if (!is_null($this->paymentProduct302SpecificInput)) {
            $object->paymentProduct302SpecificInput = $this->paymentProduct302SpecificInput->toObject();
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
    public function fromObject(object $object): MobilePaymentMethodSpecificInput
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
        if (property_exists($object, 'paymentProduct302SpecificInput')) {
            if (!is_object($object->paymentProduct302SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct302SpecificInput, true) . '\' is not an object');
            }
            $value = new MobilePaymentProduct302SpecificInput();
            $this->paymentProduct302SpecificInput = $value->fromObject($object->paymentProduct302SpecificInput);
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
