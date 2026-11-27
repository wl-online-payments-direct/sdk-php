<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use DateTime;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreatePaymentLinkRequest extends DataObject
{
    /**
     * @var CardPaymentMethodSpecificInputBase|null
     */
    public ?CardPaymentMethodSpecificInputBase $cardPaymentMethodSpecificInput = null;

    /**
     * @var string|null
     *
     * @deprecated A note related to the created payment link.  Use paymentLinkSpecificInput/description instead.
     */
    public ?string $description = null;

    /**
     * @var bool|null
     */
    public ?bool $displayQRCode = null;

    /**
     * @var DateTime|null
     *
     * @deprecated The date after which the payment link will not be usable to complete the payment. The date sent cannot be more than 6 months in the future or a past date. It must also contain the UTC offset.  Use paymentLinkSpecificInput/expirationDate instead.
     */
    public ?DateTime $expirationDate = null;

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
     * @var bool|null
     */
    public ?bool $isReusableLink = null;

    /**
     * @var MobilePaymentMethodHostedCheckoutSpecificInput|null
     */
    public ?MobilePaymentMethodHostedCheckoutSpecificInput $mobilePaymentMethodSpecificInput = null;

    /**
     * @var Order|null
     */
    public ?Order $order = null;

    /**
     * @var PaymentLinkOrderInput|null
     */
    public ?PaymentLinkOrderInput $paymentLinkOrder = null;

    /**
     * @var PaymentLinkSpecificInput|null
     */
    public ?PaymentLinkSpecificInput $paymentLinkSpecificInput = null;

    /**
     * @var string|null
     *
     * @deprecated The payment link recipient name.  Use paymentLinkSpecificInput/recipientName instead.
     */
    public ?string $recipientName = null;

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
     * @return string|null
     *
     * @deprecated A note related to the created payment link.  Use paymentLinkSpecificInput/description instead.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $value
     *
     * @deprecated A note related to the created payment link.  Use paymentLinkSpecificInput/description instead.
     */
    public function setDescription(?string $value): void
    {
        $this->description = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     *
     * @deprecated A note related to the created payment link.  Use paymentLinkSpecificInput/description instead.
     */
    public function withDescription(?string $value): static
    {
        $this->description = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDisplayQRCode(): ?bool
    {
        return $this->displayQRCode;
    }

    /**
     * @param bool|null $value
     */
    public function setDisplayQRCode(?bool $value): void
    {
        $this->displayQRCode = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withDisplayQRCode(?bool $value): static
    {
        $this->displayQRCode = $value;
        return $this;
    }

    /**
     * @return DateTime|null
     *
     * @deprecated The date after which the payment link will not be usable to complete the payment. The date sent cannot be more than 6 months in the future or a past date. It must also contain the UTC offset.  Use paymentLinkSpecificInput/expirationDate instead.
     */
    public function getExpirationDate(): ?DateTime
    {
        return $this->expirationDate;
    }

    /**
     * @param DateTime|null $value
     *
     * @deprecated The date after which the payment link will not be usable to complete the payment. The date sent cannot be more than 6 months in the future or a past date. It must also contain the UTC offset.  Use paymentLinkSpecificInput/expirationDate instead.
     */
    public function setExpirationDate(?DateTime $value): void
    {
        $this->expirationDate = $value;
    }

    /**
     * @param DateTime|null $value
     * @return $this
     *
     * @deprecated The date after which the payment link will not be usable to complete the payment. The date sent cannot be more than 6 months in the future or a past date. It must also contain the UTC offset.  Use paymentLinkSpecificInput/expirationDate instead.
     */
    public function withExpirationDate(?DateTime $value): static
    {
        $this->expirationDate = $value;
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
     * @return bool|null
     */
    public function getIsReusableLink(): ?bool
    {
        return $this->isReusableLink;
    }

    /**
     * @param bool|null $value
     */
    public function setIsReusableLink(?bool $value): void
    {
        $this->isReusableLink = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withIsReusableLink(?bool $value): static
    {
        $this->isReusableLink = $value;
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
     * @return PaymentLinkOrderInput|null
     */
    public function getPaymentLinkOrder(): ?PaymentLinkOrderInput
    {
        return $this->paymentLinkOrder;
    }

    /**
     * @param PaymentLinkOrderInput|null $value
     */
    public function setPaymentLinkOrder(?PaymentLinkOrderInput $value): void
    {
        $this->paymentLinkOrder = $value;
    }

    /**
     * @param PaymentLinkOrderInput|null $value
     * @return $this
     */
    public function withPaymentLinkOrder(?PaymentLinkOrderInput $value): static
    {
        $this->paymentLinkOrder = $value;
        return $this;
    }

    /**
     * @return PaymentLinkSpecificInput|null
     */
    public function getPaymentLinkSpecificInput(): ?PaymentLinkSpecificInput
    {
        return $this->paymentLinkSpecificInput;
    }

    /**
     * @param PaymentLinkSpecificInput|null $value
     */
    public function setPaymentLinkSpecificInput(?PaymentLinkSpecificInput $value): void
    {
        $this->paymentLinkSpecificInput = $value;
    }

    /**
     * @param PaymentLinkSpecificInput|null $value
     * @return $this
     */
    public function withPaymentLinkSpecificInput(?PaymentLinkSpecificInput $value): static
    {
        $this->paymentLinkSpecificInput = $value;
        return $this;
    }

    /**
     * @return string|null
     *
     * @deprecated The payment link recipient name.  Use paymentLinkSpecificInput/recipientName instead.
     */
    public function getRecipientName(): ?string
    {
        return $this->recipientName;
    }

    /**
     * @param string|null $value
     *
     * @deprecated The payment link recipient name.  Use paymentLinkSpecificInput/recipientName instead.
     */
    public function setRecipientName(?string $value): void
    {
        $this->recipientName = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     *
     * @deprecated The payment link recipient name.  Use paymentLinkSpecificInput/recipientName instead.
     */
    public function withRecipientName(?string $value): static
    {
        $this->recipientName = $value;
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
        if ($this->description !== null) {
            $object->description = $this->description;
        }
        if ($this->displayQRCode !== null) {
            $object->displayQRCode = $this->displayQRCode;
        }
        if ($this->expirationDate !== null) {
            $object->expirationDate = $this->expirationDate->format('Y-m-d\\TH:i:s.vP');
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
        if ($this->isReusableLink !== null) {
            $object->isReusableLink = $this->isReusableLink;
        }
        if ($this->mobilePaymentMethodSpecificInput !== null) {
            $object->mobilePaymentMethodSpecificInput = $this->mobilePaymentMethodSpecificInput->toObject();
        }
        if ($this->order !== null) {
            $object->order = $this->order->toObject();
        }
        if ($this->paymentLinkOrder !== null) {
            $object->paymentLinkOrder = $this->paymentLinkOrder->toObject();
        }
        if ($this->paymentLinkSpecificInput !== null) {
            $object->paymentLinkSpecificInput = $this->paymentLinkSpecificInput->toObject();
        }
        if ($this->recipientName !== null) {
            $object->recipientName = $this->recipientName;
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
        if (property_exists($object, 'description')) {
            $this->description = $object->description;
        }
        if (property_exists($object, 'displayQRCode')) {
            $this->displayQRCode = $object->displayQRCode;
        }
        if (property_exists($object, 'expirationDate')) {
            $this->expirationDate = new DateTime($object->expirationDate);
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
        if (property_exists($object, 'isReusableLink')) {
            $this->isReusableLink = $object->isReusableLink;
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
        if (property_exists($object, 'paymentLinkOrder')) {
            if (!is_object($object->paymentLinkOrder)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentLinkOrder, true) . '\' is not an object');
            }
            $value = new PaymentLinkOrderInput();
            $this->paymentLinkOrder = $value->fromObject($object->paymentLinkOrder);
        }
        if (property_exists($object, 'paymentLinkSpecificInput')) {
            if (!is_object($object->paymentLinkSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentLinkSpecificInput, true) . '\' is not an object');
            }
            $value = new PaymentLinkSpecificInput();
            $this->paymentLinkSpecificInput = $value->fromObject($object->paymentLinkSpecificInput);
        }
        if (property_exists($object, 'recipientName')) {
            $this->recipientName = $object->recipientName;
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
