<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CaptureOutput extends DataObject
{
    /**
     * @var AmountOfMoney
     */
    public $acquiredAmount = null;

    /**
     * @var AmountOfMoney
     */
    public $amountOfMoney = null;

    /**
     * @var int
     * @deprecated Amount that has been paid. This is deprecated. Use acquiredAmount instead.
     */
    public $amountPaid = null;

    /**
     * @var CardPaymentMethodSpecificOutput
     */
    public $cardPaymentMethodSpecificOutput = null;

    /**
     * @var string
     */
    public $merchantParameters = null;

    /**
     * @var MobilePaymentMethodSpecificOutput
     */
    public $mobilePaymentMethodSpecificOutput = null;

    /**
     * @var OperationPaymentReferences
     */
    public $operationReferences = null;

    /**
     * @var string
     */
    public $paymentMethod = null;

    /**
     * @var RedirectPaymentMethodSpecificOutput
     */
    public $redirectPaymentMethodSpecificOutput = null;

    /**
     * @var PaymentReferences
     */
    public $references = null;

    /**
     * @var SepaDirectDebitPaymentMethodSpecificOutput
     */
    public $sepaDirectDebitPaymentMethodSpecificOutput = null;

    /**
     * @var SurchargeSpecificOutput
     */
    public $surchargeSpecificOutput = null;

    /**
     * @return AmountOfMoney
     */
    public function getAcquiredAmount()
    {
        return $this->acquiredAmount;
    }

    /**
     * @param AmountOfMoney
     */
    public function setAcquiredAmount($value)
    {
        $this->acquiredAmount = $value;
    }

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
     * @deprecated Amount that has been paid. This is deprecated. Use acquiredAmount instead.
     */
    public function getAmountPaid()
    {
        return $this->amountPaid;
    }

    /**
     * @param int
     * @deprecated Amount that has been paid. This is deprecated. Use acquiredAmount instead.
     */
    public function setAmountPaid($value)
    {
        $this->amountPaid = $value;
    }

    /**
     * @return CardPaymentMethodSpecificOutput
     */
    public function getCardPaymentMethodSpecificOutput()
    {
        return $this->cardPaymentMethodSpecificOutput;
    }

    /**
     * @param CardPaymentMethodSpecificOutput
     */
    public function setCardPaymentMethodSpecificOutput($value)
    {
        $this->cardPaymentMethodSpecificOutput = $value;
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
     * @return MobilePaymentMethodSpecificOutput
     */
    public function getMobilePaymentMethodSpecificOutput()
    {
        return $this->mobilePaymentMethodSpecificOutput;
    }

    /**
     * @param MobilePaymentMethodSpecificOutput
     */
    public function setMobilePaymentMethodSpecificOutput($value)
    {
        $this->mobilePaymentMethodSpecificOutput = $value;
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
     * @return RedirectPaymentMethodSpecificOutput
     */
    public function getRedirectPaymentMethodSpecificOutput()
    {
        return $this->redirectPaymentMethodSpecificOutput;
    }

    /**
     * @param RedirectPaymentMethodSpecificOutput
     */
    public function setRedirectPaymentMethodSpecificOutput($value)
    {
        $this->redirectPaymentMethodSpecificOutput = $value;
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
     * @return SepaDirectDebitPaymentMethodSpecificOutput
     */
    public function getSepaDirectDebitPaymentMethodSpecificOutput()
    {
        return $this->sepaDirectDebitPaymentMethodSpecificOutput;
    }

    /**
     * @param SepaDirectDebitPaymentMethodSpecificOutput
     */
    public function setSepaDirectDebitPaymentMethodSpecificOutput($value)
    {
        $this->sepaDirectDebitPaymentMethodSpecificOutput = $value;
    }

    /**
     * @return SurchargeSpecificOutput
     */
    public function getSurchargeSpecificOutput()
    {
        return $this->surchargeSpecificOutput;
    }

    /**
     * @param SurchargeSpecificOutput
     */
    public function setSurchargeSpecificOutput($value)
    {
        $this->surchargeSpecificOutput = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->acquiredAmount)) {
            $object->acquiredAmount = $this->acquiredAmount->toObject();
        }
        if (!is_null($this->amountOfMoney)) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if (!is_null($this->amountPaid)) {
            $object->amountPaid = $this->amountPaid;
        }
        if (!is_null($this->cardPaymentMethodSpecificOutput)) {
            $object->cardPaymentMethodSpecificOutput = $this->cardPaymentMethodSpecificOutput->toObject();
        }
        if (!is_null($this->merchantParameters)) {
            $object->merchantParameters = $this->merchantParameters;
        }
        if (!is_null($this->mobilePaymentMethodSpecificOutput)) {
            $object->mobilePaymentMethodSpecificOutput = $this->mobilePaymentMethodSpecificOutput->toObject();
        }
        if (!is_null($this->operationReferences)) {
            $object->operationReferences = $this->operationReferences->toObject();
        }
        if (!is_null($this->paymentMethod)) {
            $object->paymentMethod = $this->paymentMethod;
        }
        if (!is_null($this->redirectPaymentMethodSpecificOutput)) {
            $object->redirectPaymentMethodSpecificOutput = $this->redirectPaymentMethodSpecificOutput->toObject();
        }
        if (!is_null($this->references)) {
            $object->references = $this->references->toObject();
        }
        if (!is_null($this->sepaDirectDebitPaymentMethodSpecificOutput)) {
            $object->sepaDirectDebitPaymentMethodSpecificOutput = $this->sepaDirectDebitPaymentMethodSpecificOutput->toObject();
        }
        if (!is_null($this->surchargeSpecificOutput)) {
            $object->surchargeSpecificOutput = $this->surchargeSpecificOutput->toObject();
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
        return $this;
    }
}
