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
class RefundPaymentProduct840SpecificOutput extends DataObject
{
    // Properties
    /**
     * @var RefundPaymentProduct840CustomerAccount
     */
    private $customerAccount;

    // Methods
    /**
     * @return RefundPaymentProduct840CustomerAccount
     */
    public function getCustomerAccount()
    {
        return $this->customerAccount;
    }
    /**
     * @var RefundPaymentProduct840CustomerAccount
     */
    public function setCustomerAccount($value)
    {
        $this->customerAccount = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->customerAccount !== null) {
            $object->customerAccount = $this->customerAccount->toObject();
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
        if (property_exists($object, 'customerAccount')) {
            if (!is_object($object->customerAccount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customerAccount, true) . '\' is not an object');
            }
            $value = new RefundPaymentProduct840CustomerAccount();
            $this->customerAccount = $value->fromObject($object->customerAccount);
        }
        return $this;
    }
}
