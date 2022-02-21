<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CustomerAccount extends DataObject
{
    // Properties
    /**
     * @var CustomerAccountAuthentication
     */
    private $authentication;

    /**
     * @var string
     */
    private $changeDate;

    /**
     * @var bool
     */
    private $changedDuringCheckout;

    /**
     * @var string
     */
    private $createDate;

    /**
     * @var bool
     */
    private $hadSuspiciousActivity;

    /**
     * @var string
     */
    private $passwordChangeDate;

    /**
     * @var bool
     */
    private $passwordChangedDuringCheckout;

    /**
     * @var PaymentAccountOnFile
     */
    private $paymentAccountOnFile;

    /**
     * @var CustomerPaymentActivity
     */
    private $paymentActivity;

    // Methods
    /**
     * @return CustomerAccountAuthentication
     */
    public function getAuthentication()
    {
        return $this->authentication;
    }
    /**
     * @var CustomerAccountAuthentication
     */
    public function setAuthentication($value)
    {
        $this->authentication = $value;
    }

    /**
     * @return string
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }
    /**
     * @var string
     */
    public function setChangeDate($value)
    {
        $this->changeDate = $value;
    }

    /**
     * @return bool
     */
    public function getChangedDuringCheckout()
    {
        return $this->changedDuringCheckout;
    }
    /**
     * @var bool
     */
    public function setChangedDuringCheckout($value)
    {
        $this->changedDuringCheckout = $value;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
    /**
     * @var string
     */
    public function setCreateDate($value)
    {
        $this->createDate = $value;
    }

    /**
     * @return bool
     */
    public function getHadSuspiciousActivity()
    {
        return $this->hadSuspiciousActivity;
    }
    /**
     * @var bool
     */
    public function setHadSuspiciousActivity($value)
    {
        $this->hadSuspiciousActivity = $value;
    }

    /**
     * @return string
     */
    public function getPasswordChangeDate()
    {
        return $this->passwordChangeDate;
    }
    /**
     * @var string
     */
    public function setPasswordChangeDate($value)
    {
        $this->passwordChangeDate = $value;
    }

    /**
     * @return bool
     */
    public function getPasswordChangedDuringCheckout()
    {
        return $this->passwordChangedDuringCheckout;
    }
    /**
     * @var bool
     */
    public function setPasswordChangedDuringCheckout($value)
    {
        $this->passwordChangedDuringCheckout = $value;
    }

    /**
     * @return PaymentAccountOnFile
     */
    public function getPaymentAccountOnFile()
    {
        return $this->paymentAccountOnFile;
    }
    /**
     * @var PaymentAccountOnFile
     */
    public function setPaymentAccountOnFile($value)
    {
        $this->paymentAccountOnFile = $value;
    }

    /**
     * @return CustomerPaymentActivity
     */
    public function getPaymentActivity()
    {
        return $this->paymentActivity;
    }
    /**
     * @var CustomerPaymentActivity
     */
    public function setPaymentActivity($value)
    {
        $this->paymentActivity = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
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
