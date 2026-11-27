<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreatePaymentRequest extends DataObject
{
    /**
     * @var CardPaymentMethodSpecificInput|null
     */
    public ?CardPaymentMethodSpecificInput $cardPaymentMethodSpecificInput = null;

    /**
     * @var string|null
     */
    public ?string $encryptedCustomerInput = null;

    /**
     * @var Feedbacks|null
     */
    public ?Feedbacks $feedbacks = null;

    /**
     * @var FraudFields|null
     */
    public ?FraudFields $fraudFields = null;

    /**
     * @var string|null
     */
    public ?string $hostedFieldsSessionId = null;

    /**
     * @var string|null
     */
    public ?string $hostedTokenizationId = null;

    /**
     * @var MobilePaymentMethodSpecificInput|null
     */
    public ?MobilePaymentMethodSpecificInput $mobilePaymentMethodSpecificInput = null;

    /**
     * @var OmnichannelPaymentSpecificInput|null
     */
    public ?OmnichannelPaymentSpecificInput $omnichannelPaymentSpecificInput = null;

    /**
     * @var Order|null
     */
    public ?Order $order = null;

    /**
     * @var RedirectPaymentMethodSpecificInput|null
     */
    public ?RedirectPaymentMethodSpecificInput $redirectPaymentMethodSpecificInput = null;

    /**
     * @var SepaDirectDebitPaymentMethodSpecificInput|null
     */
    public ?SepaDirectDebitPaymentMethodSpecificInput $sepaDirectDebitPaymentMethodSpecificInput = null;

    /**
     * @return CardPaymentMethodSpecificInput|null
     */
    public function getCardPaymentMethodSpecificInput(): ?CardPaymentMethodSpecificInput
    {
        return $this->cardPaymentMethodSpecificInput;
    }

    /**
     * @param CardPaymentMethodSpecificInput|null $value
     */
    public function setCardPaymentMethodSpecificInput(?CardPaymentMethodSpecificInput $value): void
    {
        $this->cardPaymentMethodSpecificInput = $value;
    }

    /**
     * @param CardPaymentMethodSpecificInput|null $value
     * @return $this
     */
    public function withCardPaymentMethodSpecificInput(?CardPaymentMethodSpecificInput $value): static
    {
        $this->cardPaymentMethodSpecificInput = $value;
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
     * @return Feedbacks|null
     */
    public function getFeedbacks(): ?Feedbacks
    {
        return $this->feedbacks;
    }

    /**
     * @param Feedbacks|null $value
     */
    public function setFeedbacks(?Feedbacks $value): void
    {
        $this->feedbacks = $value;
    }

    /**
     * @param Feedbacks|null $value
     * @return $this
     */
    public function withFeedbacks(?Feedbacks $value): static
    {
        $this->feedbacks = $value;
        return $this;
    }

    /**
     * @return FraudFields|null
     */
    public function getFraudFields(): ?FraudFields
    {
        return $this->fraudFields;
    }

    /**
     * @param FraudFields|null $value
     */
    public function setFraudFields(?FraudFields $value): void
    {
        $this->fraudFields = $value;
    }

    /**
     * @param FraudFields|null $value
     * @return $this
     */
    public function withFraudFields(?FraudFields $value): static
    {
        $this->fraudFields = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHostedFieldsSessionId(): ?string
    {
        return $this->hostedFieldsSessionId;
    }

    /**
     * @param string|null $value
     */
    public function setHostedFieldsSessionId(?string $value): void
    {
        $this->hostedFieldsSessionId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withHostedFieldsSessionId(?string $value): static
    {
        $this->hostedFieldsSessionId = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHostedTokenizationId(): ?string
    {
        return $this->hostedTokenizationId;
    }

    /**
     * @param string|null $value
     */
    public function setHostedTokenizationId(?string $value): void
    {
        $this->hostedTokenizationId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withHostedTokenizationId(?string $value): static
    {
        $this->hostedTokenizationId = $value;
        return $this;
    }

    /**
     * @return MobilePaymentMethodSpecificInput|null
     */
    public function getMobilePaymentMethodSpecificInput(): ?MobilePaymentMethodSpecificInput
    {
        return $this->mobilePaymentMethodSpecificInput;
    }

    /**
     * @param MobilePaymentMethodSpecificInput|null $value
     */
    public function setMobilePaymentMethodSpecificInput(?MobilePaymentMethodSpecificInput $value): void
    {
        $this->mobilePaymentMethodSpecificInput = $value;
    }

    /**
     * @param MobilePaymentMethodSpecificInput|null $value
     * @return $this
     */
    public function withMobilePaymentMethodSpecificInput(?MobilePaymentMethodSpecificInput $value): static
    {
        $this->mobilePaymentMethodSpecificInput = $value;
        return $this;
    }

    /**
     * @return OmnichannelPaymentSpecificInput|null
     */
    public function getOmnichannelPaymentSpecificInput(): ?OmnichannelPaymentSpecificInput
    {
        return $this->omnichannelPaymentSpecificInput;
    }

    /**
     * @param OmnichannelPaymentSpecificInput|null $value
     */
    public function setOmnichannelPaymentSpecificInput(?OmnichannelPaymentSpecificInput $value): void
    {
        $this->omnichannelPaymentSpecificInput = $value;
    }

    /**
     * @param OmnichannelPaymentSpecificInput|null $value
     * @return $this
     */
    public function withOmnichannelPaymentSpecificInput(?OmnichannelPaymentSpecificInput $value): static
    {
        $this->omnichannelPaymentSpecificInput = $value;
        return $this;
    }

    /**
     * @return Order|null
     */
    public function getOrder(): ?Order
    {
        return $this->order;
    }

    /**
     * @param Order|null $value
     */
    public function setOrder(?Order $value): void
    {
        $this->order = $value;
    }

    /**
     * @param Order|null $value
     * @return $this
     */
    public function withOrder(?Order $value): static
    {
        $this->order = $value;
        return $this;
    }

    /**
     * @return RedirectPaymentMethodSpecificInput|null
     */
    public function getRedirectPaymentMethodSpecificInput(): ?RedirectPaymentMethodSpecificInput
    {
        return $this->redirectPaymentMethodSpecificInput;
    }

    /**
     * @param RedirectPaymentMethodSpecificInput|null $value
     */
    public function setRedirectPaymentMethodSpecificInput(?RedirectPaymentMethodSpecificInput $value): void
    {
        $this->redirectPaymentMethodSpecificInput = $value;
    }

    /**
     * @param RedirectPaymentMethodSpecificInput|null $value
     * @return $this
     */
    public function withRedirectPaymentMethodSpecificInput(?RedirectPaymentMethodSpecificInput $value): static
    {
        $this->redirectPaymentMethodSpecificInput = $value;
        return $this;
    }

    /**
     * @return SepaDirectDebitPaymentMethodSpecificInput|null
     */
    public function getSepaDirectDebitPaymentMethodSpecificInput(): ?SepaDirectDebitPaymentMethodSpecificInput
    {
        return $this->sepaDirectDebitPaymentMethodSpecificInput;
    }

    /**
     * @param SepaDirectDebitPaymentMethodSpecificInput|null $value
     */
    public function setSepaDirectDebitPaymentMethodSpecificInput(?SepaDirectDebitPaymentMethodSpecificInput $value): void
    {
        $this->sepaDirectDebitPaymentMethodSpecificInput = $value;
    }

    /**
     * @param SepaDirectDebitPaymentMethodSpecificInput|null $value
     * @return $this
     */
    public function withSepaDirectDebitPaymentMethodSpecificInput(?SepaDirectDebitPaymentMethodSpecificInput $value): static
    {
        $this->sepaDirectDebitPaymentMethodSpecificInput = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->cardPaymentMethodSpecificInput !== null) {
            $object->cardPaymentMethodSpecificInput = $this->cardPaymentMethodSpecificInput->toObject();
        }
        if ($this->encryptedCustomerInput !== null) {
            $object->encryptedCustomerInput = $this->encryptedCustomerInput;
        }
        if ($this->feedbacks !== null) {
            $object->feedbacks = $this->feedbacks->toObject();
        }
        if ($this->fraudFields !== null) {
            $object->fraudFields = $this->fraudFields->toObject();
        }
        if ($this->hostedFieldsSessionId !== null) {
            $object->hostedFieldsSessionId = $this->hostedFieldsSessionId;
        }
        if ($this->hostedTokenizationId !== null) {
            $object->hostedTokenizationId = $this->hostedTokenizationId;
        }
        if ($this->mobilePaymentMethodSpecificInput !== null) {
            $object->mobilePaymentMethodSpecificInput = $this->mobilePaymentMethodSpecificInput->toObject();
        }
        if ($this->omnichannelPaymentSpecificInput !== null) {
            $object->omnichannelPaymentSpecificInput = $this->omnichannelPaymentSpecificInput->toObject();
        }
        if ($this->order !== null) {
            $object->order = $this->order->toObject();
        }
        if ($this->redirectPaymentMethodSpecificInput !== null) {
            $object->redirectPaymentMethodSpecificInput = $this->redirectPaymentMethodSpecificInput->toObject();
        }
        if ($this->sepaDirectDebitPaymentMethodSpecificInput !== null) {
            $object->sepaDirectDebitPaymentMethodSpecificInput = $this->sepaDirectDebitPaymentMethodSpecificInput->toObject();
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
        if (property_exists($object, 'cardPaymentMethodSpecificInput')) {
            if (!is_object($object->cardPaymentMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardPaymentMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new CardPaymentMethodSpecificInput();
            $this->cardPaymentMethodSpecificInput = $value->fromObject($object->cardPaymentMethodSpecificInput);
        }
        if (property_exists($object, 'encryptedCustomerInput')) {
            $this->encryptedCustomerInput = $object->encryptedCustomerInput;
        }
        if (property_exists($object, 'feedbacks')) {
            if (!is_object($object->feedbacks)) {
                throw new UnexpectedValueException('value \'' . print_r($object->feedbacks, true) . '\' is not an object');
            }
            $value = new Feedbacks();
            $this->feedbacks = $value->fromObject($object->feedbacks);
        }
        if (property_exists($object, 'fraudFields')) {
            if (!is_object($object->fraudFields)) {
                throw new UnexpectedValueException('value \'' . print_r($object->fraudFields, true) . '\' is not an object');
            }
            $value = new FraudFields();
            $this->fraudFields = $value->fromObject($object->fraudFields);
        }
        if (property_exists($object, 'hostedFieldsSessionId')) {
            $this->hostedFieldsSessionId = $object->hostedFieldsSessionId;
        }
        if (property_exists($object, 'hostedTokenizationId')) {
            $this->hostedTokenizationId = $object->hostedTokenizationId;
        }
        if (property_exists($object, 'mobilePaymentMethodSpecificInput')) {
            if (!is_object($object->mobilePaymentMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->mobilePaymentMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new MobilePaymentMethodSpecificInput();
            $this->mobilePaymentMethodSpecificInput = $value->fromObject($object->mobilePaymentMethodSpecificInput);
        }
        if (property_exists($object, 'omnichannelPaymentSpecificInput')) {
            if (!is_object($object->omnichannelPaymentSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->omnichannelPaymentSpecificInput, true) . '\' is not an object');
            }
            $value = new OmnichannelPaymentSpecificInput();
            $this->omnichannelPaymentSpecificInput = $value->fromObject($object->omnichannelPaymentSpecificInput);
        }
        if (property_exists($object, 'order')) {
            if (!is_object($object->order)) {
                throw new UnexpectedValueException('value \'' . print_r($object->order, true) . '\' is not an object');
            }
            $value = new Order();
            $this->order = $value->fromObject($object->order);
        }
        if (property_exists($object, 'redirectPaymentMethodSpecificInput')) {
            if (!is_object($object->redirectPaymentMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->redirectPaymentMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentMethodSpecificInput();
            $this->redirectPaymentMethodSpecificInput = $value->fromObject($object->redirectPaymentMethodSpecificInput);
        }
        if (property_exists($object, 'sepaDirectDebitPaymentMethodSpecificInput')) {
            if (!is_object($object->sepaDirectDebitPaymentMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->sepaDirectDebitPaymentMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new SepaDirectDebitPaymentMethodSpecificInput();
            $this->sepaDirectDebitPaymentMethodSpecificInput = $value->fromObject($object->sepaDirectDebitPaymentMethodSpecificInput);
        }
        return $this;
    }
}
