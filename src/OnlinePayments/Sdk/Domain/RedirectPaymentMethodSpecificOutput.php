<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentMethodSpecificOutput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $authorisationCode = null;

    /**
     * @var CustomerBankAccount|null
     */
    public ?CustomerBankAccount $customerBankAccount = null;

    /**
     * @var FraudResults|null
     */
    public ?FraudResults $fraudResults = null;

    /**
     * @var PaymentProduct3204SpecificOutput|null
     */
    public ?PaymentProduct3204SpecificOutput $paymentMethod3204SpecificOutput = null;

    /**
     * @var string|null
     */
    public ?string $paymentOption = null;

    /**
     * @var PaymentProduct3203SpecificOutput|null
     */
    public ?PaymentProduct3203SpecificOutput $paymentProduct3203SpecificOutput = null;

    /**
     * @var PaymentProduct5001SpecificOutput|null
     */
    public ?PaymentProduct5001SpecificOutput $paymentProduct5001SpecificOutput = null;

    /**
     * @var PaymentProduct5402SpecificOutput|null
     */
    public ?PaymentProduct5402SpecificOutput $paymentProduct5402SpecificOutput = null;

    /**
     * @var PaymentProduct5500SpecificOutput|null
     */
    public ?PaymentProduct5500SpecificOutput $paymentProduct5500SpecificOutput = null;

    /**
     * @var PaymentProduct840SpecificOutput|null
     */
    public ?PaymentProduct840SpecificOutput $paymentProduct840SpecificOutput = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @var string|null
     */
    public ?string $token = null;

    /**
     * @return string|null
     */
    public function getAuthorisationCode(): ?string
    {
        return $this->authorisationCode;
    }

    /**
     * @param string|null $value
     */
    public function setAuthorisationCode(?string $value): void
    {
        $this->authorisationCode = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withAuthorisationCode(?string $value): static
    {
        $this->authorisationCode = $value;
        return $this;
    }

    /**
     * @return CustomerBankAccount|null
     */
    public function getCustomerBankAccount(): ?CustomerBankAccount
    {
        return $this->customerBankAccount;
    }

    /**
     * @param CustomerBankAccount|null $value
     */
    public function setCustomerBankAccount(?CustomerBankAccount $value): void
    {
        $this->customerBankAccount = $value;
    }

    /**
     * @param CustomerBankAccount|null $value
     * @return $this
     */
    public function withCustomerBankAccount(?CustomerBankAccount $value): static
    {
        $this->customerBankAccount = $value;
        return $this;
    }

    /**
     * @return FraudResults|null
     */
    public function getFraudResults(): ?FraudResults
    {
        return $this->fraudResults;
    }

    /**
     * @param FraudResults|null $value
     */
    public function setFraudResults(?FraudResults $value): void
    {
        $this->fraudResults = $value;
    }

    /**
     * @param FraudResults|null $value
     * @return $this
     */
    public function withFraudResults(?FraudResults $value): static
    {
        $this->fraudResults = $value;
        return $this;
    }

    /**
     * @return PaymentProduct3204SpecificOutput|null
     */
    public function getPaymentMethod3204SpecificOutput(): ?PaymentProduct3204SpecificOutput
    {
        return $this->paymentMethod3204SpecificOutput;
    }

    /**
     * @param PaymentProduct3204SpecificOutput|null $value
     */
    public function setPaymentMethod3204SpecificOutput(?PaymentProduct3204SpecificOutput $value): void
    {
        $this->paymentMethod3204SpecificOutput = $value;
    }

    /**
     * @param PaymentProduct3204SpecificOutput|null $value
     * @return $this
     */
    public function withPaymentMethod3204SpecificOutput(?PaymentProduct3204SpecificOutput $value): static
    {
        $this->paymentMethod3204SpecificOutput = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentOption(): ?string
    {
        return $this->paymentOption;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentOption(?string $value): void
    {
        $this->paymentOption = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPaymentOption(?string $value): static
    {
        $this->paymentOption = $value;
        return $this;
    }

    /**
     * @return PaymentProduct3203SpecificOutput|null
     */
    public function getPaymentProduct3203SpecificOutput(): ?PaymentProduct3203SpecificOutput
    {
        return $this->paymentProduct3203SpecificOutput;
    }

    /**
     * @param PaymentProduct3203SpecificOutput|null $value
     */
    public function setPaymentProduct3203SpecificOutput(?PaymentProduct3203SpecificOutput $value): void
    {
        $this->paymentProduct3203SpecificOutput = $value;
    }

    /**
     * @param PaymentProduct3203SpecificOutput|null $value
     * @return $this
     */
    public function withPaymentProduct3203SpecificOutput(?PaymentProduct3203SpecificOutput $value): static
    {
        $this->paymentProduct3203SpecificOutput = $value;
        return $this;
    }

    /**
     * @return PaymentProduct5001SpecificOutput|null
     */
    public function getPaymentProduct5001SpecificOutput(): ?PaymentProduct5001SpecificOutput
    {
        return $this->paymentProduct5001SpecificOutput;
    }

    /**
     * @param PaymentProduct5001SpecificOutput|null $value
     */
    public function setPaymentProduct5001SpecificOutput(?PaymentProduct5001SpecificOutput $value): void
    {
        $this->paymentProduct5001SpecificOutput = $value;
    }

    /**
     * @param PaymentProduct5001SpecificOutput|null $value
     * @return $this
     */
    public function withPaymentProduct5001SpecificOutput(?PaymentProduct5001SpecificOutput $value): static
    {
        $this->paymentProduct5001SpecificOutput = $value;
        return $this;
    }

    /**
     * @return PaymentProduct5402SpecificOutput|null
     */
    public function getPaymentProduct5402SpecificOutput(): ?PaymentProduct5402SpecificOutput
    {
        return $this->paymentProduct5402SpecificOutput;
    }

    /**
     * @param PaymentProduct5402SpecificOutput|null $value
     */
    public function setPaymentProduct5402SpecificOutput(?PaymentProduct5402SpecificOutput $value): void
    {
        $this->paymentProduct5402SpecificOutput = $value;
    }

    /**
     * @param PaymentProduct5402SpecificOutput|null $value
     * @return $this
     */
    public function withPaymentProduct5402SpecificOutput(?PaymentProduct5402SpecificOutput $value): static
    {
        $this->paymentProduct5402SpecificOutput = $value;
        return $this;
    }

    /**
     * @return PaymentProduct5500SpecificOutput|null
     */
    public function getPaymentProduct5500SpecificOutput(): ?PaymentProduct5500SpecificOutput
    {
        return $this->paymentProduct5500SpecificOutput;
    }

    /**
     * @param PaymentProduct5500SpecificOutput|null $value
     */
    public function setPaymentProduct5500SpecificOutput(?PaymentProduct5500SpecificOutput $value): void
    {
        $this->paymentProduct5500SpecificOutput = $value;
    }

    /**
     * @param PaymentProduct5500SpecificOutput|null $value
     * @return $this
     */
    public function withPaymentProduct5500SpecificOutput(?PaymentProduct5500SpecificOutput $value): static
    {
        $this->paymentProduct5500SpecificOutput = $value;
        return $this;
    }

    /**
     * @return PaymentProduct840SpecificOutput|null
     */
    public function getPaymentProduct840SpecificOutput(): ?PaymentProduct840SpecificOutput
    {
        return $this->paymentProduct840SpecificOutput;
    }

    /**
     * @param PaymentProduct840SpecificOutput|null $value
     */
    public function setPaymentProduct840SpecificOutput(?PaymentProduct840SpecificOutput $value): void
    {
        $this->paymentProduct840SpecificOutput = $value;
    }

    /**
     * @param PaymentProduct840SpecificOutput|null $value
     * @return $this
     */
    public function withPaymentProduct840SpecificOutput(?PaymentProduct840SpecificOutput $value): static
    {
        $this->paymentProduct840SpecificOutput = $value;
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
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param string|null $value
     */
    public function setToken(?string $value): void
    {
        $this->token = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withToken(?string $value): static
    {
        $this->token = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->authorisationCode !== null) {
            $object->authorisationCode = $this->authorisationCode;
        }
        if ($this->customerBankAccount !== null) {
            $object->customerBankAccount = $this->customerBankAccount->toObject();
        }
        if ($this->fraudResults !== null) {
            $object->fraudResults = $this->fraudResults->toObject();
        }
        if ($this->paymentMethod3204SpecificOutput !== null) {
            $object->paymentMethod3204SpecificOutput = $this->paymentMethod3204SpecificOutput->toObject();
        }
        if ($this->paymentOption !== null) {
            $object->paymentOption = $this->paymentOption;
        }
        if ($this->paymentProduct3203SpecificOutput !== null) {
            $object->paymentProduct3203SpecificOutput = $this->paymentProduct3203SpecificOutput->toObject();
        }
        if ($this->paymentProduct5001SpecificOutput !== null) {
            $object->paymentProduct5001SpecificOutput = $this->paymentProduct5001SpecificOutput->toObject();
        }
        if ($this->paymentProduct5402SpecificOutput !== null) {
            $object->paymentProduct5402SpecificOutput = $this->paymentProduct5402SpecificOutput->toObject();
        }
        if ($this->paymentProduct5500SpecificOutput !== null) {
            $object->paymentProduct5500SpecificOutput = $this->paymentProduct5500SpecificOutput->toObject();
        }
        if ($this->paymentProduct840SpecificOutput !== null) {
            $object->paymentProduct840SpecificOutput = $this->paymentProduct840SpecificOutput->toObject();
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if ($this->token !== null) {
            $object->token = $this->token;
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
        if (property_exists($object, 'authorisationCode')) {
            $this->authorisationCode = $object->authorisationCode;
        }
        if (property_exists($object, 'customerBankAccount')) {
            if (!is_object($object->customerBankAccount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customerBankAccount, true) . '\' is not an object');
            }
            $value = new CustomerBankAccount();
            $this->customerBankAccount = $value->fromObject($object->customerBankAccount);
        }
        if (property_exists($object, 'fraudResults')) {
            if (!is_object($object->fraudResults)) {
                throw new UnexpectedValueException('value \'' . print_r($object->fraudResults, true) . '\' is not an object');
            }
            $value = new FraudResults();
            $this->fraudResults = $value->fromObject($object->fraudResults);
        }
        if (property_exists($object, 'paymentMethod3204SpecificOutput')) {
            if (!is_object($object->paymentMethod3204SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentMethod3204SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct3204SpecificOutput();
            $this->paymentMethod3204SpecificOutput = $value->fromObject($object->paymentMethod3204SpecificOutput);
        }
        if (property_exists($object, 'paymentOption')) {
            $this->paymentOption = $object->paymentOption;
        }
        if (property_exists($object, 'paymentProduct3203SpecificOutput')) {
            if (!is_object($object->paymentProduct3203SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3203SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct3203SpecificOutput();
            $this->paymentProduct3203SpecificOutput = $value->fromObject($object->paymentProduct3203SpecificOutput);
        }
        if (property_exists($object, 'paymentProduct5001SpecificOutput')) {
            if (!is_object($object->paymentProduct5001SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5001SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct5001SpecificOutput();
            $this->paymentProduct5001SpecificOutput = $value->fromObject($object->paymentProduct5001SpecificOutput);
        }
        if (property_exists($object, 'paymentProduct5402SpecificOutput')) {
            if (!is_object($object->paymentProduct5402SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5402SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct5402SpecificOutput();
            $this->paymentProduct5402SpecificOutput = $value->fromObject($object->paymentProduct5402SpecificOutput);
        }
        if (property_exists($object, 'paymentProduct5500SpecificOutput')) {
            if (!is_object($object->paymentProduct5500SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5500SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct5500SpecificOutput();
            $this->paymentProduct5500SpecificOutput = $value->fromObject($object->paymentProduct5500SpecificOutput);
        }
        if (property_exists($object, 'paymentProduct840SpecificOutput')) {
            if (!is_object($object->paymentProduct840SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct840SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProduct840SpecificOutput();
            $this->paymentProduct840SpecificOutput = $value->fromObject($object->paymentProduct840SpecificOutput);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        return $this;
    }
}
