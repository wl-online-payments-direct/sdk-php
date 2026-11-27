<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreateTokenRequest extends DataObject
{
    /**
     * @var TokenCardSpecificInput|null
     */
    public ?TokenCardSpecificInput $card = null;

    /**
     * @var string|null
     */
    public ?string $encryptedCustomerInput = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @return TokenCardSpecificInput|null
     */
    public function getCard(): ?TokenCardSpecificInput
    {
        return $this->card;
    }

    /**
     * @param TokenCardSpecificInput|null $value
     */
    public function setCard(?TokenCardSpecificInput $value): void
    {
        $this->card = $value;
    }

    /**
     * @param TokenCardSpecificInput|null $value
     * @return $this
     */
    public function withCard(?TokenCardSpecificInput $value): static
    {
        $this->card = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEncryptedCustomerInput(): ?string
    {
        return $this->encryptedCustomerInput;
    }

    /**
     * @param string|null $value
     */
    public function setEncryptedCustomerInput(?string $value): void
    {
        $this->encryptedCustomerInput = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withEncryptedCustomerInput(?string $value): static
    {
        $this->encryptedCustomerInput = $value;
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
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->card !== null) {
            $object->card = $this->card->toObject();
        }
        if ($this->encryptedCustomerInput !== null) {
            $object->encryptedCustomerInput = $this->encryptedCustomerInput;
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
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
        if (property_exists($object, 'card')) {
            if (!is_object($object->card)) {
                throw new UnexpectedValueException('value \'' . print_r($object->card, true) . '\' is not an object');
            }
            $value = new TokenCardSpecificInput();
            $this->card = $value->fromObject($object->card);
        }
        if (property_exists($object, 'encryptedCustomerInput')) {
            $this->encryptedCustomerInput = $object->encryptedCustomerInput;
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        return $this;
    }
}
