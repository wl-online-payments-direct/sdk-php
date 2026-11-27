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
class PaymentOutput extends DataObject
{
    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $acquiredAmount = null;

    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $amountOfMoney = null;

    /**
     * @var int|null
     *
     * @deprecated Amount that has been paid. This is deprecated. Use acquiredAmount instead.
     */
    public ?int $amountPaid = null;

    /**
     * @var CardPaymentMethodSpecificOutput|null
     */
    public ?CardPaymentMethodSpecificOutput $cardPaymentMethodSpecificOutput = null;

    /**
     * @var CustomerOutput|null
     */
    public ?CustomerOutput $customer = null;

    /**
     * @var Discount|null
     */
    public ?Discount $discount = null;

    /**
     * @var string|null
     */
    public ?string $merchantParameters = null;

    /**
     * @var MobilePaymentMethodSpecificOutput|null
     */
    public ?MobilePaymentMethodSpecificOutput $mobilePaymentMethodSpecificOutput = null;

    /**
     * @var DateTime|null
     */
    public ?DateTime $paymentCreationDate = null;

    /**
     * @var string|null
     */
    public ?string $paymentMethod = null;

    /**
     * @var RedirectPaymentMethodSpecificOutput|null
     */
    public ?RedirectPaymentMethodSpecificOutput $redirectPaymentMethodSpecificOutput = null;

    /**
     * @var PaymentReferences|null
     */
    public ?PaymentReferences $references = null;

    /**
     * @var SepaDirectDebitPaymentMethodSpecificOutput|null
     */
    public ?SepaDirectDebitPaymentMethodSpecificOutput $sepaDirectDebitPaymentMethodSpecificOutput = null;

    /**
     * @var SurchargeSpecificOutput|null
     */
    public ?SurchargeSpecificOutput $surchargeSpecificOutput = null;

    /**
     * @var DateTime|null
     */
    public ?DateTime $transactionDate = null;

    /**
     * @return AmountOfMoney|null
     */
    public function getAcquiredAmount(): ?AmountOfMoney
    {
        return $this->acquiredAmount;
    }

    /**
     * @param AmountOfMoney|null $value
     */
    public function setAcquiredAmount(?AmountOfMoney $value): void
    {
        $this->acquiredAmount = $value;
    }

    /**
     * @param AmountOfMoney|null $value
     * @return $this
     */
    public function withAcquiredAmount(?AmountOfMoney $value): static
    {
        $this->acquiredAmount = $value;
        return $this;
    }

    /**
     * @return AmountOfMoney|null
     */
    public function getAmountOfMoney(): ?AmountOfMoney
    {
        return $this->amountOfMoney;
    }

    /**
     * @param AmountOfMoney|null $value
     */
    public function setAmountOfMoney(?AmountOfMoney $value): void
    {
        $this->amountOfMoney = $value;
    }

    /**
     * @param AmountOfMoney|null $value
     * @return $this
     */
    public function withAmountOfMoney(?AmountOfMoney $value): static
    {
        $this->amountOfMoney = $value;
        return $this;
    }

    /**
     * @return int|null
     *
     * @deprecated Amount that has been paid. This is deprecated. Use acquiredAmount instead.
     */
    public function getAmountPaid(): ?int
    {
        return $this->amountPaid;
    }

    /**
     * @param int|null $value
     *
     * @deprecated Amount that has been paid. This is deprecated. Use acquiredAmount instead.
     */
    public function setAmountPaid(?int $value): void
    {
        $this->amountPaid = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     *
     * @deprecated Amount that has been paid. This is deprecated. Use acquiredAmount instead.
     */
    public function withAmountPaid(?int $value): static
    {
        $this->amountPaid = $value;
        return $this;
    }

    /**
     * @return CardPaymentMethodSpecificOutput|null
     */
    public function getCardPaymentMethodSpecificOutput(): ?CardPaymentMethodSpecificOutput
    {
        return $this->cardPaymentMethodSpecificOutput;
    }

    /**
     * @param CardPaymentMethodSpecificOutput|null $value
     */
    public function setCardPaymentMethodSpecificOutput(?CardPaymentMethodSpecificOutput $value): void
    {
        $this->cardPaymentMethodSpecificOutput = $value;
    }

    /**
     * @param CardPaymentMethodSpecificOutput|null $value
     * @return $this
     */
    public function withCardPaymentMethodSpecificOutput(?CardPaymentMethodSpecificOutput $value): static
    {
        $this->cardPaymentMethodSpecificOutput = $value;
        return $this;
    }

    /**
     * @return CustomerOutput|null
     */
    public function getCustomer(): ?CustomerOutput
    {
        return $this->customer;
    }

    /**
     * @param CustomerOutput|null $value
     */
    public function setCustomer(?CustomerOutput $value): void
    {
        $this->customer = $value;
    }

    /**
     * @param CustomerOutput|null $value
     * @return $this
     */
    public function withCustomer(?CustomerOutput $value): static
    {
        $this->customer = $value;
        return $this;
    }

    /**
     * @return Discount|null
     */
    public function getDiscount(): ?Discount
    {
        return $this->discount;
    }

    /**
     * @param Discount|null $value
     */
    public function setDiscount(?Discount $value): void
    {
        $this->discount = $value;
    }

    /**
     * @param Discount|null $value
     * @return $this
     */
    public function withDiscount(?Discount $value): static
    {
        $this->discount = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantParameters(): ?string
    {
        return $this->merchantParameters;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantParameters(?string $value): void
    {
        $this->merchantParameters = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withMerchantParameters(?string $value): static
    {
        $this->merchantParameters = $value;
        return $this;
    }

    /**
     * @return MobilePaymentMethodSpecificOutput|null
     */
    public function getMobilePaymentMethodSpecificOutput(): ?MobilePaymentMethodSpecificOutput
    {
        return $this->mobilePaymentMethodSpecificOutput;
    }

    /**
     * @param MobilePaymentMethodSpecificOutput|null $value
     */
    public function setMobilePaymentMethodSpecificOutput(?MobilePaymentMethodSpecificOutput $value): void
    {
        $this->mobilePaymentMethodSpecificOutput = $value;
    }

    /**
     * @param MobilePaymentMethodSpecificOutput|null $value
     * @return $this
     */
    public function withMobilePaymentMethodSpecificOutput(?MobilePaymentMethodSpecificOutput $value): static
    {
        $this->mobilePaymentMethodSpecificOutput = $value;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getPaymentCreationDate(): ?DateTime
    {
        return $this->paymentCreationDate;
    }

    /**
     * @param DateTime|null $value
     */
    public function setPaymentCreationDate(?DateTime $value): void
    {
        $this->paymentCreationDate = $value;
    }

    /**
     * @param DateTime|null $value
     * @return $this
     */
    public function withPaymentCreationDate(?DateTime $value): static
    {
        $this->paymentCreationDate = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentMethod(?string $value): void
    {
        $this->paymentMethod = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPaymentMethod(?string $value): static
    {
        $this->paymentMethod = $value;
        return $this;
    }

    /**
     * @return RedirectPaymentMethodSpecificOutput|null
     */
    public function getRedirectPaymentMethodSpecificOutput(): ?RedirectPaymentMethodSpecificOutput
    {
        return $this->redirectPaymentMethodSpecificOutput;
    }

    /**
     * @param RedirectPaymentMethodSpecificOutput|null $value
     */
    public function setRedirectPaymentMethodSpecificOutput(?RedirectPaymentMethodSpecificOutput $value): void
    {
        $this->redirectPaymentMethodSpecificOutput = $value;
    }

    /**
     * @param RedirectPaymentMethodSpecificOutput|null $value
     * @return $this
     */
    public function withRedirectPaymentMethodSpecificOutput(?RedirectPaymentMethodSpecificOutput $value): static
    {
        $this->redirectPaymentMethodSpecificOutput = $value;
        return $this;
    }

    /**
     * @return PaymentReferences|null
     */
    public function getReferences(): ?PaymentReferences
    {
        return $this->references;
    }

    /**
     * @param PaymentReferences|null $value
     */
    public function setReferences(?PaymentReferences $value): void
    {
        $this->references = $value;
    }

    /**
     * @param PaymentReferences|null $value
     * @return $this
     */
    public function withReferences(?PaymentReferences $value): static
    {
        $this->references = $value;
        return $this;
    }

    /**
     * @return SepaDirectDebitPaymentMethodSpecificOutput|null
     */
    public function getSepaDirectDebitPaymentMethodSpecificOutput(): ?SepaDirectDebitPaymentMethodSpecificOutput
    {
        return $this->sepaDirectDebitPaymentMethodSpecificOutput;
    }

    /**
     * @param SepaDirectDebitPaymentMethodSpecificOutput|null $value
     */
    public function setSepaDirectDebitPaymentMethodSpecificOutput(?SepaDirectDebitPaymentMethodSpecificOutput $value): void
    {
        $this->sepaDirectDebitPaymentMethodSpecificOutput = $value;
    }

    /**
     * @param SepaDirectDebitPaymentMethodSpecificOutput|null $value
     * @return $this
     */
    public function withSepaDirectDebitPaymentMethodSpecificOutput(?SepaDirectDebitPaymentMethodSpecificOutput $value): static
    {
        $this->sepaDirectDebitPaymentMethodSpecificOutput = $value;
        return $this;
    }

    /**
     * @return SurchargeSpecificOutput|null
     */
    public function getSurchargeSpecificOutput(): ?SurchargeSpecificOutput
    {
        return $this->surchargeSpecificOutput;
    }

    /**
     * @param SurchargeSpecificOutput|null $value
     */
    public function setSurchargeSpecificOutput(?SurchargeSpecificOutput $value): void
    {
        $this->surchargeSpecificOutput = $value;
    }

    /**
     * @param SurchargeSpecificOutput|null $value
     * @return $this
     */
    public function withSurchargeSpecificOutput(?SurchargeSpecificOutput $value): static
    {
        $this->surchargeSpecificOutput = $value;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getTransactionDate(): ?DateTime
    {
        return $this->transactionDate;
    }

    /**
     * @param DateTime|null $value
     */
    public function setTransactionDate(?DateTime $value): void
    {
        $this->transactionDate = $value;
    }

    /**
     * @param DateTime|null $value
     * @return $this
     */
    public function withTransactionDate(?DateTime $value): static
    {
        $this->transactionDate = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->acquiredAmount !== null) {
            $object->acquiredAmount = $this->acquiredAmount->toObject();
        }
        if ($this->amountOfMoney !== null) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if ($this->amountPaid !== null) {
            $object->amountPaid = $this->amountPaid;
        }
        if ($this->cardPaymentMethodSpecificOutput !== null) {
            $object->cardPaymentMethodSpecificOutput = $this->cardPaymentMethodSpecificOutput->toObject();
        }
        if ($this->customer !== null) {
            $object->customer = $this->customer->toObject();
        }
        if ($this->discount !== null) {
            $object->discount = $this->discount->toObject();
        }
        if ($this->merchantParameters !== null) {
            $object->merchantParameters = $this->merchantParameters;
        }
        if ($this->mobilePaymentMethodSpecificOutput !== null) {
            $object->mobilePaymentMethodSpecificOutput = $this->mobilePaymentMethodSpecificOutput->toObject();
        }
        if ($this->paymentCreationDate !== null) {
            $object->paymentCreationDate = $this->paymentCreationDate->format('Y-m-d\\TH:i:s.vP');
        }
        if ($this->paymentMethod !== null) {
            $object->paymentMethod = $this->paymentMethod;
        }
        if ($this->redirectPaymentMethodSpecificOutput !== null) {
            $object->redirectPaymentMethodSpecificOutput = $this->redirectPaymentMethodSpecificOutput->toObject();
        }
        if ($this->references !== null) {
            $object->references = $this->references->toObject();
        }
        if ($this->sepaDirectDebitPaymentMethodSpecificOutput !== null) {
            $object->sepaDirectDebitPaymentMethodSpecificOutput = $this->sepaDirectDebitPaymentMethodSpecificOutput->toObject();
        }
        if ($this->surchargeSpecificOutput !== null) {
            $object->surchargeSpecificOutput = $this->surchargeSpecificOutput->toObject();
        }
        if ($this->transactionDate !== null) {
            $object->transactionDate = $this->transactionDate->format('Y-m-d\\TH:i:s.vP');
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
        if (property_exists($object, 'acquiredAmount')) {
            if (!is_object($object->acquiredAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->acquiredAmount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->acquiredAmount = $value->fromObject($object->acquiredAmount);
        }
        if (property_exists($object, 'amountOfMoney')) {
            if (!is_object($object->amountOfMoney)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amountOfMoney, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amountOfMoney = $value->fromObject($object->amountOfMoney);
        }
        if (property_exists($object, 'amountPaid')) {
            $this->amountPaid = $object->amountPaid;
        }
        if (property_exists($object, 'cardPaymentMethodSpecificOutput')) {
            if (!is_object($object->cardPaymentMethodSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardPaymentMethodSpecificOutput, true) . '\' is not an object');
            }
            $value = new CardPaymentMethodSpecificOutput();
            $this->cardPaymentMethodSpecificOutput = $value->fromObject($object->cardPaymentMethodSpecificOutput);
        }
        if (property_exists($object, 'customer')) {
            if (!is_object($object->customer)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customer, true) . '\' is not an object');
            }
            $value = new CustomerOutput();
            $this->customer = $value->fromObject($object->customer);
        }
        if (property_exists($object, 'discount')) {
            if (!is_object($object->discount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->discount, true) . '\' is not an object');
            }
            $value = new Discount();
            $this->discount = $value->fromObject($object->discount);
        }
        if (property_exists($object, 'merchantParameters')) {
            $this->merchantParameters = $object->merchantParameters;
        }
        if (property_exists($object, 'mobilePaymentMethodSpecificOutput')) {
            if (!is_object($object->mobilePaymentMethodSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->mobilePaymentMethodSpecificOutput, true) . '\' is not an object');
            }
            $value = new MobilePaymentMethodSpecificOutput();
            $this->mobilePaymentMethodSpecificOutput = $value->fromObject($object->mobilePaymentMethodSpecificOutput);
        }
        if (property_exists($object, 'paymentCreationDate')) {
            $this->paymentCreationDate = new DateTime($object->paymentCreationDate);
        }
        if (property_exists($object, 'paymentMethod')) {
            $this->paymentMethod = $object->paymentMethod;
        }
        if (property_exists($object, 'redirectPaymentMethodSpecificOutput')) {
            if (!is_object($object->redirectPaymentMethodSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->redirectPaymentMethodSpecificOutput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentMethodSpecificOutput();
            $this->redirectPaymentMethodSpecificOutput = $value->fromObject($object->redirectPaymentMethodSpecificOutput);
        }
        if (property_exists($object, 'references')) {
            if (!is_object($object->references)) {
                throw new UnexpectedValueException('value \'' . print_r($object->references, true) . '\' is not an object');
            }
            $value = new PaymentReferences();
            $this->references = $value->fromObject($object->references);
        }
        if (property_exists($object, 'sepaDirectDebitPaymentMethodSpecificOutput')) {
            if (!is_object($object->sepaDirectDebitPaymentMethodSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->sepaDirectDebitPaymentMethodSpecificOutput, true) . '\' is not an object');
            }
            $value = new SepaDirectDebitPaymentMethodSpecificOutput();
            $this->sepaDirectDebitPaymentMethodSpecificOutput = $value->fromObject($object->sepaDirectDebitPaymentMethodSpecificOutput);
        }
        if (property_exists($object, 'surchargeSpecificOutput')) {
            if (!is_object($object->surchargeSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->surchargeSpecificOutput, true) . '\' is not an object');
            }
            $value = new SurchargeSpecificOutput();
            $this->surchargeSpecificOutput = $value->fromObject($object->surchargeSpecificOutput);
        }
        if (property_exists($object, 'transactionDate')) {
            $this->transactionDate = new DateTime($object->transactionDate);
        }
        return $this;
    }
}
