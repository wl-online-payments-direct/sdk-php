<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreateHostedCheckoutRequest extends DataObject
{
    /**
     * @var CardPaymentMethodSpecificInputBase|null
     */
    public ?CardPaymentMethodSpecificInputBase $cardPaymentMethodSpecificInput = null;

    /**
     * @var Feedbacks|null
     */
    public ?Feedbacks $feedbacks = null;

    /**
     * @var FraudFields|null
     */
    public ?FraudFields $fraudFields = null;

    /**
     * @var HostedCheckoutSpecificInput|null
     */
    public ?HostedCheckoutSpecificInput $hostedCheckoutSpecificInput = null;

    /**
     * @var MobilePaymentMethodHostedCheckoutSpecificInput|null
     */
    public ?MobilePaymentMethodHostedCheckoutSpecificInput $mobilePaymentMethodSpecificInput = null;

    /**
     * @var Order|null
     */
    public ?Order $order = null;

    /**
     * @var RedirectPaymentMethodSpecificInput|null
     */
    public ?RedirectPaymentMethodSpecificInput $redirectPaymentMethodSpecificInput = null;

    /**
     * @var SepaDirectDebitPaymentMethodSpecificInputBase|null
     */
    public ?SepaDirectDebitPaymentMethodSpecificInputBase $sepaDirectDebitPaymentMethodSpecificInput = null;

    /**
     * @return CardPaymentMethodSpecificInputBase|null
     */
    public function getCardPaymentMethodSpecificInput(): ?CardPaymentMethodSpecificInputBase
    {
        return $this->cardPaymentMethodSpecificInput;
    }

    /**
     * @param CardPaymentMethodSpecificInputBase|null $value
     */
    public function setCardPaymentMethodSpecificInput(?CardPaymentMethodSpecificInputBase $value): void
    {
        $this->cardPaymentMethodSpecificInput = $value;
    }

    /**
     * @param CardPaymentMethodSpecificInputBase|null $value
     * @return $this
     */
    public function withCardPaymentMethodSpecificInput(?CardPaymentMethodSpecificInputBase $value): static
    {
        $this->cardPaymentMethodSpecificInput = $value;
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
     * @return HostedCheckoutSpecificInput|null
     */
    public function getHostedCheckoutSpecificInput(): ?HostedCheckoutSpecificInput
    {
        return $this->hostedCheckoutSpecificInput;
    }

    /**
     * @param HostedCheckoutSpecificInput|null $value
     */
    public function setHostedCheckoutSpecificInput(?HostedCheckoutSpecificInput $value): void
    {
        $this->hostedCheckoutSpecificInput = $value;
    }

    /**
     * @param HostedCheckoutSpecificInput|null $value
     * @return $this
     */
    public function withHostedCheckoutSpecificInput(?HostedCheckoutSpecificInput $value): static
    {
        $this->hostedCheckoutSpecificInput = $value;
        return $this;
    }

    /**
     * @return MobilePaymentMethodHostedCheckoutSpecificInput|null
     */
    public function getMobilePaymentMethodSpecificInput(): ?MobilePaymentMethodHostedCheckoutSpecificInput
    {
        return $this->mobilePaymentMethodSpecificInput;
    }

    /**
     * @param MobilePaymentMethodHostedCheckoutSpecificInput|null $value
     */
    public function setMobilePaymentMethodSpecificInput(?MobilePaymentMethodHostedCheckoutSpecificInput $value): void
    {
        $this->mobilePaymentMethodSpecificInput = $value;
    }

    /**
     * @param MobilePaymentMethodHostedCheckoutSpecificInput|null $value
     * @return $this
     */
    public function withMobilePaymentMethodSpecificInput(?MobilePaymentMethodHostedCheckoutSpecificInput $value): static
    {
        $this->mobilePaymentMethodSpecificInput = $value;
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
     * @return SepaDirectDebitPaymentMethodSpecificInputBase|null
     */
    public function getSepaDirectDebitPaymentMethodSpecificInput(): ?SepaDirectDebitPaymentMethodSpecificInputBase
    {
        return $this->sepaDirectDebitPaymentMethodSpecificInput;
    }

    /**
     * @param SepaDirectDebitPaymentMethodSpecificInputBase|null $value
     */
    public function setSepaDirectDebitPaymentMethodSpecificInput(?SepaDirectDebitPaymentMethodSpecificInputBase $value): void
    {
        $this->sepaDirectDebitPaymentMethodSpecificInput = $value;
    }

    /**
     * @param SepaDirectDebitPaymentMethodSpecificInputBase|null $value
     * @return $this
     */
    public function withSepaDirectDebitPaymentMethodSpecificInput(?SepaDirectDebitPaymentMethodSpecificInputBase $value): static
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
        if ($this->feedbacks !== null) {
            $object->feedbacks = $this->feedbacks->toObject();
        }
        if ($this->fraudFields !== null) {
            $object->fraudFields = $this->fraudFields->toObject();
        }
        if ($this->hostedCheckoutSpecificInput !== null) {
            $object->hostedCheckoutSpecificInput = $this->hostedCheckoutSpecificInput->toObject();
        }
        if ($this->mobilePaymentMethodSpecificInput !== null) {
            $object->mobilePaymentMethodSpecificInput = $this->mobilePaymentMethodSpecificInput->toObject();
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
            $value = new CardPaymentMethodSpecificInputBase();
            $this->cardPaymentMethodSpecificInput = $value->fromObject($object->cardPaymentMethodSpecificInput);
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
        if (property_exists($object, 'hostedCheckoutSpecificInput')) {
            if (!is_object($object->hostedCheckoutSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->hostedCheckoutSpecificInput, true) . '\' is not an object');
            }
            $value = new HostedCheckoutSpecificInput();
            $this->hostedCheckoutSpecificInput = $value->fromObject($object->hostedCheckoutSpecificInput);
        }
        if (property_exists($object, 'mobilePaymentMethodSpecificInput')) {
            if (!is_object($object->mobilePaymentMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->mobilePaymentMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new MobilePaymentMethodHostedCheckoutSpecificInput();
            $this->mobilePaymentMethodSpecificInput = $value->fromObject($object->mobilePaymentMethodSpecificInput);
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
            $value = new SepaDirectDebitPaymentMethodSpecificInputBase();
            $this->sepaDirectDebitPaymentMethodSpecificInput = $value->fromObject($object->sepaDirectDebitPaymentMethodSpecificInput);
        }
        return $this;
    }
}
