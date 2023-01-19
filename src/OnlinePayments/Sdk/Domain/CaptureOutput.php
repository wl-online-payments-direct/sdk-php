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
class CaptureOutput extends DataObject
{
    // Properties
    /**
     * @var AmountOfMoney
     */
    private $acquiredAmount;

    /**
     * @var AmountOfMoney
     */
    private $amountOfMoney;

    /**
     * @var int
     */
    private $amountPaid;

    /**
     * @var CardPaymentMethodSpecificOutput
     */
    private $cardPaymentMethodSpecificOutput;

    /**
     * @var string
     */
    private $merchantParameters;

    /**
     * @var MobilePaymentMethodSpecificOutput
     */
    private $mobilePaymentMethodSpecificOutput;

    /**
     * @var string
     */
    private $paymentMethod;

    /**
     * @var RedirectPaymentMethodSpecificOutput
     */
    private $redirectPaymentMethodSpecificOutput;

    /**
     * @var PaymentReferences
     */
    private $references;

    /**
     * @var SepaDirectDebitPaymentMethodSpecificOutput
     */
    private $sepaDirectDebitPaymentMethodSpecificOutput;

    /**
     * @var SurchargeSpecificOutput
     */
    private $surchargeSpecificOutput;

    // Methods
    /**
     * @return AmountOfMoney
     */
    public function getAcquiredAmount()
    {
        return $this->acquiredAmount;
    }
    /**
     * @var AmountOfMoney
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
     * @return CardPaymentMethodSpecificOutput
     */
    public function getCardPaymentMethodSpecificOutput()
    {
        return $this->cardPaymentMethodSpecificOutput;
    }
    /**
     * @var CardPaymentMethodSpecificOutput
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
     * @var string
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
     * @var MobilePaymentMethodSpecificOutput
     */
    public function setMobilePaymentMethodSpecificOutput($value)
    {
        $this->mobilePaymentMethodSpecificOutput = $value;
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
     * @return RedirectPaymentMethodSpecificOutput
     */
    public function getRedirectPaymentMethodSpecificOutput()
    {
        return $this->redirectPaymentMethodSpecificOutput;
    }
    /**
     * @var RedirectPaymentMethodSpecificOutput
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
     * @var PaymentReferences
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
     * @var SepaDirectDebitPaymentMethodSpecificOutput
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
     * @var SurchargeSpecificOutput
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
        if ($this->acquiredAmount !== null) {
            $object->acquiredAmount = $this->acquiredAmount->toObject();
        }
        if ($this->amountOfMoney !== null) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if ($this->amountPaid !== null) {
            $object->amountPaid = $this->amountPaid;
        }
        if ($this->cardPaymentMethodSpecificOutput !== null) {
            $object->cardPaymentMethodSpecificOutput = $this->cardPaymentMethodSpecificOutput->toObject();
        }
        if ($this->merchantParameters !== null) {
            $object->merchantParameters = $this->merchantParameters;
        }
        if ($this->mobilePaymentMethodSpecificOutput !== null) {
            $object->mobilePaymentMethodSpecificOutput = $this->mobilePaymentMethodSpecificOutput->toObject();
        }
        if ($this->paymentMethod !== null) {
            $object->paymentMethod = $this->paymentMethod;
        }
        if ($this->redirectPaymentMethodSpecificOutput !== null) {
            $object->redirectPaymentMethodSpecificOutput = $this->redirectPaymentMethodSpecificOutput->toObject();
        }
        if ($this->references !== null) {
            $object->references = $this->references->toObject();
        }
        if ($this->sepaDirectDebitPaymentMethodSpecificOutput !== null) {
            $object->sepaDirectDebitPaymentMethodSpecificOutput = $this->sepaDirectDebitPaymentMethodSpecificOutput->toObject();
        }
        if ($this->surchargeSpecificOutput !== null) {
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
