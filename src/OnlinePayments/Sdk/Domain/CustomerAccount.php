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
     * @var CustomerAccountAuthentication
     */
    public $authentication = null;

    /**
     * @var string
     */
    public $changeDate = null;

    /**
     * @var bool
     */
    public $changedDuringCheckout = null;

    /**
     * @var string
     */
    public $createDate = null;

    /**
     * @var bool
     */
    public $hadSuspiciousActivity = null;

    /**
     * @var string
     */
    public $passwordChangeDate = null;

    /**
     * @var bool
     */
    public $passwordChangedDuringCheckout = null;

    /**
     * @var PaymentAccountOnFile
     */
    public $paymentAccountOnFile = null;

    /**
     * @var CustomerPaymentActivity
     */
    public $paymentActivity = null;

    /**
     * @return CustomerAccountAuthentication
     */
    public function getAuthentication()
    {
        return $this->authentication;
    }

    /**
     * @param CustomerAccountAuthentication
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
     * @param string
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
     * @param bool
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
     * @param string
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
     * @param bool
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
     * @param string
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
     * @param bool
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
     * @param PaymentAccountOnFile
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
     * @param CustomerPaymentActivity
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
