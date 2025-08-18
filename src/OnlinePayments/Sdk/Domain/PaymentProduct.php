<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct extends DataObject
{
    /**
     * @var AccountOnFile[]|null
     */
    public ?array $accountsOnFile = null;

    /**
     * @var bool|null
     */
    public ?bool $allowsAuthentication = null;

    /**
     * @var bool|null
     */
    public ?bool $allowsRecurring = null;

    /**
     * @var bool|null
     */
    public ?bool $allowsTokenization = null;

    /**
     * @var PaymentProductDisplayHints|null
     */
    public ?PaymentProductDisplayHints $displayHints = null;

    /**
     * @var PaymentProductDisplayHints[]|null
     */
    public ?array $displayHintsList = null;

    /**
     * @var PaymentProductField[]|null
     */
    public ?array $fields = null;

    /**
     * @var int|null
     */
    public ?int $id = null;

    /**
     * @var string|null
     */
    public ?string $paymentMethod = null;

    /**
     * @var PaymentProduct302SpecificData|null
     */
    public ?PaymentProduct302SpecificData $paymentProduct302SpecificData = null;

    /**
     * @var PaymentProduct320SpecificData|null
     */
    public ?PaymentProduct320SpecificData $paymentProduct320SpecificData = null;

    /**
     * @var string|null
     */
    public ?string $paymentProductGroup = null;

    /**
     * @var bool|null
     */
    public ?bool $usesRedirectionTo3rdParty = null;

    /**
     * @return AccountOnFile[]|null
     */
    public function getAccountsOnFile(): ?array
    {
        return $this->accountsOnFile;
    }

    /**
     * @param AccountOnFile[]|null $value
     */
    public function setAccountsOnFile(?array $value): void
    {
        $this->accountsOnFile = $value;
    }

    /**
     * @return bool|null
     */
    public function getAllowsAuthentication(): ?bool
    {
        return $this->allowsAuthentication;
    }

    /**
     * @param bool|null $value
     */
    public function setAllowsAuthentication(?bool $value): void
    {
        $this->allowsAuthentication = $value;
    }

    /**
     * @return bool|null
     */
    public function getAllowsRecurring(): ?bool
    {
        return $this->allowsRecurring;
    }

    /**
     * @param bool|null $value
     */
    public function setAllowsRecurring(?bool $value): void
    {
        $this->allowsRecurring = $value;
    }

    /**
     * @return bool|null
     */
    public function getAllowsTokenization(): ?bool
    {
        return $this->allowsTokenization;
    }

    /**
     * @param bool|null $value
     */
    public function setAllowsTokenization(?bool $value): void
    {
        $this->allowsTokenization = $value;
    }

    /**
     * @return PaymentProductDisplayHints|null
     */
    public function getDisplayHints(): ?PaymentProductDisplayHints
    {
        return $this->displayHints;
    }

    /**
     * @param PaymentProductDisplayHints|null $value
     */
    public function setDisplayHints(?PaymentProductDisplayHints $value): void
    {
        $this->displayHints = $value;
    }

    /**
     * @return PaymentProductDisplayHints[]|null
     */
    public function getDisplayHintsList(): ?array
    {
        return $this->displayHintsList;
    }

    /**
     * @param PaymentProductDisplayHints[]|null $value
     */
    public function setDisplayHintsList(?array $value): void
    {
        $this->displayHintsList = $value;
    }

    /**
     * @return PaymentProductField[]|null
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * @param PaymentProductField[]|null $value
     */
    public function setFields(?array $value): void
    {
        $this->fields = $value;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $value
     */
    public function setId(?int $value): void
    {
        $this->id = $value;
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
     * @return PaymentProduct302SpecificData|null
     */
    public function getPaymentProduct302SpecificData(): ?PaymentProduct302SpecificData
    {
        return $this->paymentProduct302SpecificData;
    }

    /**
     * @param PaymentProduct302SpecificData|null $value
     */
    public function setPaymentProduct302SpecificData(?PaymentProduct302SpecificData $value): void
    {
        $this->paymentProduct302SpecificData = $value;
    }

    /**
     * @return PaymentProduct320SpecificData|null
     */
    public function getPaymentProduct320SpecificData(): ?PaymentProduct320SpecificData
    {
        return $this->paymentProduct320SpecificData;
    }

    /**
     * @param PaymentProduct320SpecificData|null $value
     */
    public function setPaymentProduct320SpecificData(?PaymentProduct320SpecificData $value): void
    {
        $this->paymentProduct320SpecificData = $value;
    }

    /**
     * @return string|null
     */
    public function getPaymentProductGroup(): ?string
    {
        return $this->paymentProductGroup;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentProductGroup(?string $value): void
    {
        $this->paymentProductGroup = $value;
    }

    /**
     * @return bool|null
     */
    public function getUsesRedirectionTo3rdParty(): ?bool
    {
        return $this->usesRedirectionTo3rdParty;
    }

    /**
     * @param bool|null $value
     */
    public function setUsesRedirectionTo3rdParty(?bool $value): void
    {
        $this->usesRedirectionTo3rdParty = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->accountsOnFile)) {
            $object->accountsOnFile = [];
            foreach ($this->accountsOnFile as $element) {
                if (!is_null($element)) {
                    $object->accountsOnFile[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->allowsAuthentication)) {
            $object->allowsAuthentication = $this->allowsAuthentication;
        }
        if (!is_null($this->allowsRecurring)) {
            $object->allowsRecurring = $this->allowsRecurring;
        }
        if (!is_null($this->allowsTokenization)) {
            $object->allowsTokenization = $this->allowsTokenization;
        }
        if (!is_null($this->displayHints)) {
            $object->displayHints = $this->displayHints->toObject();
        }
        if (!is_null($this->displayHintsList)) {
            $object->displayHintsList = [];
            foreach ($this->displayHintsList as $element) {
                if (!is_null($element)) {
                    $object->displayHintsList[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->fields)) {
            $object->fields = [];
            foreach ($this->fields as $element) {
                if (!is_null($element)) {
                    $object->fields[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->paymentMethod)) {
            $object->paymentMethod = $this->paymentMethod;
        }
        if (!is_null($this->paymentProduct302SpecificData)) {
            $object->paymentProduct302SpecificData = $this->paymentProduct302SpecificData->toObject();
        }
        if (!is_null($this->paymentProduct320SpecificData)) {
            $object->paymentProduct320SpecificData = $this->paymentProduct320SpecificData->toObject();
        }
        if (!is_null($this->paymentProductGroup)) {
            $object->paymentProductGroup = $this->paymentProductGroup;
        }
        if (!is_null($this->usesRedirectionTo3rdParty)) {
            $object->usesRedirectionTo3rdParty = $this->usesRedirectionTo3rdParty;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct
    {
        parent::fromObject($object);
        if (property_exists($object, 'accountsOnFile')) {
            if (!is_array($object->accountsOnFile) && !is_object($object->accountsOnFile)) {
                throw new UnexpectedValueException('value \'' . print_r($object->accountsOnFile, true) . '\' is not an array or object');
            }
            $this->accountsOnFile = [];
            foreach ($object->accountsOnFile as $element) {
                $value = new AccountOnFile();
                $this->accountsOnFile[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'allowsAuthentication')) {
            $this->allowsAuthentication = $object->allowsAuthentication;
        }
        if (property_exists($object, 'allowsRecurring')) {
            $this->allowsRecurring = $object->allowsRecurring;
        }
        if (property_exists($object, 'allowsTokenization')) {
            $this->allowsTokenization = $object->allowsTokenization;
        }
        if (property_exists($object, 'displayHints')) {
            if (!is_object($object->displayHints)) {
                throw new UnexpectedValueException('value \'' . print_r($object->displayHints, true) . '\' is not an object');
            }
            $value = new PaymentProductDisplayHints();
            $this->displayHints = $value->fromObject($object->displayHints);
        }
        if (property_exists($object, 'displayHintsList')) {
            if (!is_array($object->displayHintsList) && !is_object($object->displayHintsList)) {
                throw new UnexpectedValueException('value \'' . print_r($object->displayHintsList, true) . '\' is not an array or object');
            }
            $this->displayHintsList = [];
            foreach ($object->displayHintsList as $element) {
                $value = new PaymentProductDisplayHints();
                $this->displayHintsList[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'fields')) {
            if (!is_array($object->fields) && !is_object($object->fields)) {
                throw new UnexpectedValueException('value \'' . print_r($object->fields, true) . '\' is not an array or object');
            }
            $this->fields = [];
            foreach ($object->fields as $element) {
                $value = new PaymentProductField();
                $this->fields[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'paymentMethod')) {
            $this->paymentMethod = $object->paymentMethod;
        }
        if (property_exists($object, 'paymentProduct302SpecificData')) {
            if (!is_object($object->paymentProduct302SpecificData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct302SpecificData, true) . '\' is not an object');
            }
            $value = new PaymentProduct302SpecificData();
            $this->paymentProduct302SpecificData = $value->fromObject($object->paymentProduct302SpecificData);
        }
        if (property_exists($object, 'paymentProduct320SpecificData')) {
            if (!is_object($object->paymentProduct320SpecificData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct320SpecificData, true) . '\' is not an object');
            }
            $value = new PaymentProduct320SpecificData();
            $this->paymentProduct320SpecificData = $value->fromObject($object->paymentProduct320SpecificData);
        }
        if (property_exists($object, 'paymentProductGroup')) {
            $this->paymentProductGroup = $object->paymentProductGroup;
        }
        if (property_exists($object, 'usesRedirectionTo3rdParty')) {
            $this->usesRedirectionTo3rdParty = $object->usesRedirectionTo3rdParty;
        }
        return $this;
    }
}
