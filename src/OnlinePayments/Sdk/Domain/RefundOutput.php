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
class RefundOutput extends DataObject
{
    // Properties
    /**
     * @var AmountOfMoney
     */
    private $amountOfMoney;

    /**
     * @var int
     */
    private $amountPaid;

    /**
     * @var RefundCardMethodSpecificOutput
     */
    private $cardRefundMethodSpecificOutput;

    /**
     * @var RefundEWalletMethodSpecificOutput
     */
    private $eWalletRefundMethodSpecificOutput;

    /**
     * @var string
     */
    private $merchantParameters;

    /**
     * @var RefundMobileMethodSpecificOutput
     */
    private $mobileRefundMethodSpecificOutput;

    /**
     * @var string
     */
    private $paymentMethod;

    /**
     * @var RefundRedirectMethodSpecificOutput
     */
    private $redirectRefundMethodSpecificOutput;

    /**
     * @var PaymentReferences
     */
    private $references;

    // Methods
    /**
     * @return AmountOfMoney
     */
    public function getAmountOfMoney()
    {
        return $this->amountOfMoney;
    }
    /**
     * @var AmountOfMoney
     */
    public function setAmountOfMoney($value)
    {
        $this->amountOfMoney = $value;
    }

    /**
     * @return int
     */
    public function getAmountPaid()
    {
        return $this->amountPaid;
    }
    /**
     * @var int
     */
    public function setAmountPaid($value)
    {
        $this->amountPaid = $value;
    }

    /**
     * @return RefundCardMethodSpecificOutput
     */
    public function getCardRefundMethodSpecificOutput()
    {
        return $this->cardRefundMethodSpecificOutput;
    }
    /**
     * @var RefundCardMethodSpecificOutput
     */
    public function setCardRefundMethodSpecificOutput($value)
    {
        $this->cardRefundMethodSpecificOutput = $value;
    }

    /**
     * @return RefundEWalletMethodSpecificOutput
     */
    public function getEWalletRefundMethodSpecificOutput()
    {
        return $this->eWalletRefundMethodSpecificOutput;
    }
    /**
     * @var RefundEWalletMethodSpecificOutput
     */
    public function setEWalletRefundMethodSpecificOutput($value)
    {
        $this->eWalletRefundMethodSpecificOutput = $value;
    }

    /**
     * @return string
     */
    public function getMerchantParameters()
    {
        return $this->merchantParameters;
    }
    /**
     * @var string
     */
    public function setMerchantParameters($value)
    {
        $this->merchantParameters = $value;
    }

    /**
     * @return RefundMobileMethodSpecificOutput
     */
    public function getMobileRefundMethodSpecificOutput()
    {
        return $this->mobileRefundMethodSpecificOutput;
    }
    /**
     * @var RefundMobileMethodSpecificOutput
     */
    public function setMobileRefundMethodSpecificOutput($value)
    {
        $this->mobileRefundMethodSpecificOutput = $value;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
    /**
     * @var string
     */
    public function setPaymentMethod($value)
    {
        $this->paymentMethod = $value;
    }

    /**
     * @return RefundRedirectMethodSpecificOutput
     */
    public function getRedirectRefundMethodSpecificOutput()
    {
        return $this->redirectRefundMethodSpecificOutput;
    }
    /**
     * @var RefundRedirectMethodSpecificOutput
     */
    public function setRedirectRefundMethodSpecificOutput($value)
    {
        $this->redirectRefundMethodSpecificOutput = $value;
    }

    /**
     * @return PaymentReferences
     */
    public function getReferences()
    {
        return $this->references;
    }
    /**
     * @var PaymentReferences
     */
    public function setReferences($value)
    {
        $this->references = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->amountOfMoney !== null) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if ($this->amountPaid !== null) {
            $object->amountPaid = $this->amountPaid;
        }
        if ($this->cardRefundMethodSpecificOutput !== null) {
            $object->cardRefundMethodSpecificOutput = $this->cardRefundMethodSpecificOutput->toObject();
        }
        if ($this->eWalletRefundMethodSpecificOutput !== null) {
            $object->eWalletRefundMethodSpecificOutput = $this->eWalletRefundMethodSpecificOutput->toObject();
        }
        if ($this->merchantParameters !== null) {
            $object->merchantParameters = $this->merchantParameters;
        }
        if ($this->mobileRefundMethodSpecificOutput !== null) {
            $object->mobileRefundMethodSpecificOutput = $this->mobileRefundMethodSpecificOutput->toObject();
        }
        if ($this->paymentMethod !== null) {
            $object->paymentMethod = $this->paymentMethod;
        }
        if ($this->redirectRefundMethodSpecificOutput !== null) {
            $object->redirectRefundMethodSpecificOutput = $this->redirectRefundMethodSpecificOutput->toObject();
        }
        if ($this->references !== null) {
            $object->references = $this->references->toObject();
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
        if (property_exists($object, 'cardRefundMethodSpecificOutput')) {
            if (!is_object($object->cardRefundMethodSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardRefundMethodSpecificOutput, true) . '\' is not an object');
            }
            $value = new RefundCardMethodSpecificOutput();
            $this->cardRefundMethodSpecificOutput = $value->fromObject($object->cardRefundMethodSpecificOutput);
        }
        if (property_exists($object, 'eWalletRefundMethodSpecificOutput')) {
            if (!is_object($object->eWalletRefundMethodSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->eWalletRefundMethodSpecificOutput, true) . '\' is not an object');
            }
            $value = new RefundEWalletMethodSpecificOutput();
            $this->eWalletRefundMethodSpecificOutput = $value->fromObject($object->eWalletRefundMethodSpecificOutput);
        }
        if (property_exists($object, 'merchantParameters')) {
            $this->merchantParameters = $object->merchantParameters;
        }
        if (property_exists($object, 'mobileRefundMethodSpecificOutput')) {
            if (!is_object($object->mobileRefundMethodSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->mobileRefundMethodSpecificOutput, true) . '\' is not an object');
            }
            $value = new RefundMobileMethodSpecificOutput();
            $this->mobileRefundMethodSpecificOutput = $value->fromObject($object->mobileRefundMethodSpecificOutput);
        }
        if (property_exists($object, 'paymentMethod')) {
            $this->paymentMethod = $object->paymentMethod;
        }
        if (property_exists($object, 'redirectRefundMethodSpecificOutput')) {
            if (!is_object($object->redirectRefundMethodSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->redirectRefundMethodSpecificOutput, true) . '\' is not an object');
            }
            $value = new RefundRedirectMethodSpecificOutput();
            $this->redirectRefundMethodSpecificOutput = $value->fromObject($object->redirectRefundMethodSpecificOutput);
        }
        if (property_exists($object, 'references')) {
            if (!is_object($object->references)) {
                throw new UnexpectedValueException('value \'' . print_r($object->references, true) . '\' is not an object');
            }
            $value = new PaymentReferences();
            $this->references = $value->fromObject($object->references);
        }
        return $this;
    }
}
