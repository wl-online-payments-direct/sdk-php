<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundOutput extends DataObject
{
    /**
     * @var AmountOfMoney
     */
    public $amountOfMoney = null;

    /**
     * @var int
     */
    public $amountPaid = null;

    /**
     * @var RefundCardMethodSpecificOutput
     */
    public $cardRefundMethodSpecificOutput = null;

    /**
     * @var RefundEWalletMethodSpecificOutput
     */
    public $eWalletRefundMethodSpecificOutput = null;

    /**
     * @var string
     */
    public $merchantParameters = null;

    /**
     * @var RefundMobileMethodSpecificOutput
     */
    public $mobileRefundMethodSpecificOutput = null;

    /**
     * @var OperationPaymentReferences
     */
    public $operationReferences = null;

    /**
     * @var string
     */
    public $paymentMethod = null;

    /**
     * @var RefundRedirectMethodSpecificOutput
     */
    public $redirectRefundMethodSpecificOutput = null;

    /**
     * @var PaymentReferences
     */
    public $references = null;

    /**
     * @return AmountOfMoney
     */
    public function getAmountOfMoney()
    {
        return $this->amountOfMoney;
    }

    /**
     * @param AmountOfMoney
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
     * @param int
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
     * @param RefundCardMethodSpecificOutput
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
     * @param RefundEWalletMethodSpecificOutput
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
     * @param string
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
     * @param RefundMobileMethodSpecificOutput
     */
    public function setMobileRefundMethodSpecificOutput($value)
    {
        $this->mobileRefundMethodSpecificOutput = $value;
    }

    /**
     * @return OperationPaymentReferences
     */
    public function getOperationReferences()
    {
        return $this->operationReferences;
    }

    /**
     * @param OperationPaymentReferences
     */
    public function setOperationReferences($value)
    {
        $this->operationReferences = $value;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param string
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
     * @param RefundRedirectMethodSpecificOutput
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
     * @param PaymentReferences
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
        if (!is_null($this->amountOfMoney)) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if (!is_null($this->amountPaid)) {
            $object->amountPaid = $this->amountPaid;
        }
        if (!is_null($this->cardRefundMethodSpecificOutput)) {
            $object->cardRefundMethodSpecificOutput = $this->cardRefundMethodSpecificOutput->toObject();
        }
        if (!is_null($this->eWalletRefundMethodSpecificOutput)) {
            $object->eWalletRefundMethodSpecificOutput = $this->eWalletRefundMethodSpecificOutput->toObject();
        }
        if (!is_null($this->merchantParameters)) {
            $object->merchantParameters = $this->merchantParameters;
        }
        if (!is_null($this->mobileRefundMethodSpecificOutput)) {
            $object->mobileRefundMethodSpecificOutput = $this->mobileRefundMethodSpecificOutput->toObject();
        }
        if (!is_null($this->operationReferences)) {
            $object->operationReferences = $this->operationReferences->toObject();
        }
        if (!is_null($this->paymentMethod)) {
            $object->paymentMethod = $this->paymentMethod;
        }
        if (!is_null($this->redirectRefundMethodSpecificOutput)) {
            $object->redirectRefundMethodSpecificOutput = $this->redirectRefundMethodSpecificOutput->toObject();
        }
        if (!is_null($this->references)) {
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
        if (property_exists($object, 'operationReferences')) {
            if (!is_object($object->operationReferences)) {
                throw new UnexpectedValueException('value \'' . print_r($object->operationReferences, true) . '\' is not an object');
            }
            $value = new OperationPaymentReferences();
            $this->operationReferences = $value->fromObject($object->operationReferences);
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
