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
     * @var AutoCapture|null
     */
    public ?AutoCapture $autoCapture = null;

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
     * @param string|null $value
     * @return $this
     */
    public function withAuthorizationMode(?string $value): static
    {
        $this->authorizationMode = $value;
        return $this;
    }

    /**
     * @return AutoCapture|null
     */
    public function getAutoCapture(): ?AutoCapture
    {
        return $this->autoCapture;
    }

    /**
     * @param AutoCapture|null $value
     */
    public function setAutoCapture(?AutoCapture $value): void
    {
        $this->autoCapture = $value;
    }

    /**
     * @param AutoCapture|null $value
     * @return $this
     */
    public function withAutoCapture(?AutoCapture $value): static
    {
        $this->autoCapture = $value;
        return $this;
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
     * @param DecryptedPaymentData|null $value
     * @return $this
     */
    public function withDecryptedPaymentData(?DecryptedPaymentData $value): static
    {
        $this->decryptedPaymentData = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withEncryptedPaymentData(?string $value): static
    {
        $this->encryptedPaymentData = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withEphemeralKey(?string $value): static
    {
        $this->ephemeralKey = $value;
        return $this;
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
     * @param MobilePaymentProduct302SpecificInput|null $value
     * @return $this
     */
    public function withPaymentProduct302SpecificInput(?MobilePaymentProduct302SpecificInput $value): static
    {
        $this->paymentProduct302SpecificInput = $value;
        return $this;
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
     * @param MobilePaymentProduct320SpecificInput|null $value
     * @return $this
     */
    public function withPaymentProduct320SpecificInput(?MobilePaymentProduct320SpecificInput $value): static
    {
        $this->paymentProduct320SpecificInput = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withPaymentProductId(?int $value): static
    {
        $this->paymentProductId = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withPublicKeyHash(?string $value): static
    {
        $this->publicKeyHash = $value;
        return $this;
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
     * @param bool|null $value
     * @return $this
     */
    public function withRequiresApproval(?bool $value): static
    {
        $this->requiresApproval = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->authorizationMode !== null) {
            $object->authorizationMode = $this->authorizationMode;
        }
        if ($this->autoCapture !== null) {
            $object->autoCapture = $this->autoCapture->toObject();
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
        if ($this->paymentProduct302SpecificInput !== null) {
            $object->paymentProduct302SpecificInput = $this->paymentProduct302SpecificInput->toObject();
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'authorizationMode')) {
            $this->authorizationMode = $object->authorizationMode;
        }
        if (property_exists($object, 'autoCapture')) {
            if (!is_object($object->autoCapture)) {
                throw new UnexpectedValueException('value \'' . print_r($object->autoCapture, true) . '\' is not an object');
            }
            $value = new AutoCapture();
            $this->autoCapture = $value->fromObject($object->autoCapture);
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
