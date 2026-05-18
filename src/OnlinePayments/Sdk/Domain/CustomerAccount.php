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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->authentication)) {
            $object->authentication = $this->authentication->toObject();
        }
        if (!is_null($this->changeDate)) {
            $object->changeDate = $this->changeDate;
        }
        if (!is_null($this->changedDuringCheckout)) {
            $object->changedDuringCheckout = $this->changedDuringCheckout;
        }
        if (!is_null($this->createDate)) {
            $object->createDate = $this->createDate;
        }
        if (!is_null($this->hadSuspiciousActivity)) {
            $object->hadSuspiciousActivity = $this->hadSuspiciousActivity;
        }
        if (!is_null($this->passwordChangeDate)) {
            $object->passwordChangeDate = $this->passwordChangeDate;
        }
        if (!is_null($this->passwordChangedDuringCheckout)) {
            $object->passwordChangedDuringCheckout = $this->passwordChangedDuringCheckout;
        }
        if (!is_null($this->paymentAccountOnFile)) {
            $object->paymentAccountOnFile = $this->paymentAccountOnFile->toObject();
        }
        if (!is_null($this->paymentActivity)) {
            $object->paymentActivity = $this->paymentActivity->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CustomerAccount
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
