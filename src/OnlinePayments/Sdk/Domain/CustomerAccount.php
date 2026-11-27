<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CustomerAccount extends DataObject
{
    /**
     * @var CustomerAccountAuthentication|null
     */
    public ?CustomerAccountAuthentication $authentication = null;

    /**
     * @var string|null
     */
    public ?string $changeDate = null;

    /**
     * @var bool|null
     */
    public ?bool $changedDuringCheckout = null;

    /**
     * @var string|null
     */
    public ?string $createDate = null;

    /**
     * @var bool|null
     */
    public ?bool $hadSuspiciousActivity = null;

    /**
     * @var string|null
     */
    public ?string $passwordChangeDate = null;

    /**
     * @var bool|null
     */
    public ?bool $passwordChangedDuringCheckout = null;

    /**
     * @var PaymentAccountOnFile|null
     */
    public ?PaymentAccountOnFile $paymentAccountOnFile = null;

    /**
     * @var CustomerPaymentActivity|null
     */
    public ?CustomerPaymentActivity $paymentActivity = null;

    /**
     * @return CustomerAccountAuthentication|null
     */
    public function getAuthentication(): ?CustomerAccountAuthentication
    {
        return $this->authentication;
    }

    /**
     * @param CustomerAccountAuthentication|null $value
     */
    public function setAuthentication(?CustomerAccountAuthentication $value): void
    {
        $this->authentication = $value;
    }

    /**
     * @param CustomerAccountAuthentication|null $value
     * @return $this
     */
    public function withAuthentication(?CustomerAccountAuthentication $value): static
    {
        $this->authentication = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getChangeDate(): ?string
    {
        return $this->changeDate;
    }

    /**
     * @param string|null $value
     */
    public function setChangeDate(?string $value): void
    {
        $this->changeDate = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withChangeDate(?string $value): static
    {
        $this->changeDate = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getChangedDuringCheckout(): ?bool
    {
        return $this->changedDuringCheckout;
    }

    /**
     * @param bool|null $value
     */
    public function setChangedDuringCheckout(?bool $value): void
    {
        $this->changedDuringCheckout = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withChangedDuringCheckout(?bool $value): static
    {
        $this->changedDuringCheckout = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreateDate(): ?string
    {
        return $this->createDate;
    }

    /**
     * @param string|null $value
     */
    public function setCreateDate(?string $value): void
    {
        $this->createDate = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withCreateDate(?string $value): static
    {
        $this->createDate = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHadSuspiciousActivity(): ?bool
    {
        return $this->hadSuspiciousActivity;
    }

    /**
     * @param bool|null $value
     */
    public function setHadSuspiciousActivity(?bool $value): void
    {
        $this->hadSuspiciousActivity = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withHadSuspiciousActivity(?bool $value): static
    {
        $this->hadSuspiciousActivity = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPasswordChangeDate(): ?string
    {
        return $this->passwordChangeDate;
    }

    /**
     * @param string|null $value
     */
    public function setPasswordChangeDate(?string $value): void
    {
        $this->passwordChangeDate = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPasswordChangeDate(?string $value): static
    {
        $this->passwordChangeDate = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPasswordChangedDuringCheckout(): ?bool
    {
        return $this->passwordChangedDuringCheckout;
    }

    /**
     * @param bool|null $value
     */
    public function setPasswordChangedDuringCheckout(?bool $value): void
    {
        $this->passwordChangedDuringCheckout = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withPasswordChangedDuringCheckout(?bool $value): static
    {
        $this->passwordChangedDuringCheckout = $value;
        return $this;
    }

    /**
     * @return PaymentAccountOnFile|null
     */
    public function getPaymentAccountOnFile(): ?PaymentAccountOnFile
    {
        return $this->paymentAccountOnFile;
    }

    /**
     * @param PaymentAccountOnFile|null $value
     */
    public function setPaymentAccountOnFile(?PaymentAccountOnFile $value): void
    {
        $this->paymentAccountOnFile = $value;
    }

    /**
     * @param PaymentAccountOnFile|null $value
     * @return $this
     */
    public function withPaymentAccountOnFile(?PaymentAccountOnFile $value): static
    {
        $this->paymentAccountOnFile = $value;
        return $this;
    }

    /**
     * @return CustomerPaymentActivity|null
     */
    public function getPaymentActivity(): ?CustomerPaymentActivity
    {
        return $this->paymentActivity;
    }

    /**
     * @param CustomerPaymentActivity|null $value
     */
    public function setPaymentActivity(?CustomerPaymentActivity $value): void
    {
        $this->paymentActivity = $value;
    }

    /**
     * @param CustomerPaymentActivity|null $value
     * @return $this
     */
    public function withPaymentActivity(?CustomerPaymentActivity $value): static
    {
        $this->paymentActivity = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->authentication !== null) {
            $object->authentication = $this->authentication->toObject();
        }
        if ($this->changeDate !== null) {
            $object->changeDate = $this->changeDate;
        }
        if ($this->changedDuringCheckout !== null) {
            $object->changedDuringCheckout = $this->changedDuringCheckout;
        }
        if ($this->createDate !== null) {
            $object->createDate = $this->createDate;
        }
        if ($this->hadSuspiciousActivity !== null) {
            $object->hadSuspiciousActivity = $this->hadSuspiciousActivity;
        }
        if ($this->passwordChangeDate !== null) {
            $object->passwordChangeDate = $this->passwordChangeDate;
        }
        if ($this->passwordChangedDuringCheckout !== null) {
            $object->passwordChangedDuringCheckout = $this->passwordChangedDuringCheckout;
        }
        if ($this->paymentAccountOnFile !== null) {
            $object->paymentAccountOnFile = $this->paymentAccountOnFile->toObject();
        }
        if ($this->paymentActivity !== null) {
            $object->paymentActivity = $this->paymentActivity->toObject();
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
        if (property_exists($object, 'authentication')) {
            if (!is_object($object->authentication)) {
                throw new UnexpectedValueException('value \'' . print_r($object->authentication, true) . '\' is not an object');
            }
            $value = new CustomerAccountAuthentication();
            $this->authentication = $value->fromObject($object->authentication);
        }
        if (property_exists($object, 'changeDate')) {
            $this->changeDate = $object->changeDate;
        }
        if (property_exists($object, 'changedDuringCheckout')) {
            $this->changedDuringCheckout = $object->changedDuringCheckout;
        }
        if (property_exists($object, 'createDate')) {
            $this->createDate = $object->createDate;
        }
        if (property_exists($object, 'hadSuspiciousActivity')) {
            $this->hadSuspiciousActivity = $object->hadSuspiciousActivity;
        }
        if (property_exists($object, 'passwordChangeDate')) {
            $this->passwordChangeDate = $object->passwordChangeDate;
        }
        if (property_exists($object, 'passwordChangedDuringCheckout')) {
            $this->passwordChangedDuringCheckout = $object->passwordChangedDuringCheckout;
        }
        if (property_exists($object, 'paymentAccountOnFile')) {
            if (!is_object($object->paymentAccountOnFile)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentAccountOnFile, true) . '\' is not an object');
            }
            $value = new PaymentAccountOnFile();
            $this->paymentAccountOnFile = $value->fromObject($object->paymentAccountOnFile);
        }
        if (property_exists($object, 'paymentActivity')) {
            if (!is_object($object->paymentActivity)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentActivity, true) . '\' is not an object');
            }
            $value = new CustomerPaymentActivity();
            $this->paymentActivity = $value->fromObject($object->paymentActivity);
        }
        return $this;
    }
}
