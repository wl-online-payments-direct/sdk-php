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
class CreatePaymentRequest extends DataObject
{
    // Properties
    /**
     * @var CardPaymentMethodSpecificInput
     */
    private $cardPaymentMethodSpecificInput;

    /**
     * @var string
     */
    private $encryptedCustomerInput;

    /**
     * @var FraudFields
     */
    private $fraudFields;

    /**
     * @var string
     */
    private $hostedTokenizationId;

    /**
     * @var MobilePaymentMethodSpecificInput
     */
    private $mobilePaymentMethodSpecificInput;

    /**
     * @var Order
     */
    private $order;

    /**
     * @var RedirectPaymentMethodSpecificInput
     */
    private $redirectPaymentMethodSpecificInput;

    /**
     * @var SepaDirectDebitPaymentMethodSpecificInput
     */
    private $sepaDirectDebitPaymentMethodSpecificInput;

    // Methods
    /**
     * @return CardPaymentMethodSpecificInput
     */
    public function getCardPaymentMethodSpecificInput()
    {
        return $this->cardPaymentMethodSpecificInput;
    }
    /**
     * @var CardPaymentMethodSpecificInput
     */
    public function setCardPaymentMethodSpecificInput($value)
    {
        $this->cardPaymentMethodSpecificInput = $value;
    }

    /**
     * @return string
     */
    public function getEncryptedCustomerInput()
    {
        return $this->encryptedCustomerInput;
    }
    /**
     * @var string
     */
    public function setEncryptedCustomerInput($value)
    {
        $this->encryptedCustomerInput = $value;
    }

    /**
     * @return FraudFields
     */
    public function getFraudFields()
    {
        return $this->fraudFields;
    }
    /**
     * @var FraudFields
     */
    public function setFraudFields($value)
    {
        $this->fraudFields = $value;
    }

    /**
     * @return string
     */
    public function getHostedTokenizationId()
    {
        return $this->hostedTokenizationId;
    }
    /**
     * @var string
     */
    public function setHostedTokenizationId($value)
    {
        $this->hostedTokenizationId = $value;
    }

    /**
     * @return MobilePaymentMethodSpecificInput
     */
    public function getMobilePaymentMethodSpecificInput()
    {
        return $this->mobilePaymentMethodSpecificInput;
    }
    /**
     * @var MobilePaymentMethodSpecificInput
     */
    public function setMobilePaymentMethodSpecificInput($value)
    {
        $this->mobilePaymentMethodSpecificInput = $value;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * @var Order
     */
    public function setOrder($value)
    {
        $this->order = $value;
    }

    /**
     * @return RedirectPaymentMethodSpecificInput
     */
    public function getRedirectPaymentMethodSpecificInput()
    {
        return $this->redirectPaymentMethodSpecificInput;
    }
    /**
     * @var RedirectPaymentMethodSpecificInput
     */
    public function setRedirectPaymentMethodSpecificInput($value)
    {
        $this->redirectPaymentMethodSpecificInput = $value;
    }

    /**
     * @return SepaDirectDebitPaymentMethodSpecificInput
     */
    public function getSepaDirectDebitPaymentMethodSpecificInput()
    {
        return $this->sepaDirectDebitPaymentMethodSpecificInput;
    }
    /**
     * @var SepaDirectDebitPaymentMethodSpecificInput
     */
    public function setSepaDirectDebitPaymentMethodSpecificInput($value)
    {
        $this->sepaDirectDebitPaymentMethodSpecificInput = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->cardPaymentMethodSpecificInput !== null) {
            $object->cardPaymentMethodSpecificInput = $this->cardPaymentMethodSpecificInput->toObject();
        }
        if ($this->encryptedCustomerInput !== null) {
            $object->encryptedCustomerInput = $this->encryptedCustomerInput;
        }
        if ($this->fraudFields !== null) {
            $object->fraudFields = $this->fraudFields->toObject();
        }
        if ($this->hostedTokenizationId !== null) {
            $object->hostedTokenizationId = $this->hostedTokenizationId;
        }
        if ($this->mobilePaymentMethodSpecificInput !== null) {
            $object->mobilePaymentMethodSpecificInput = $this->mobilePaymentMethodSpecificInput->toObject();
        }
        if ($this->order !== null) {
            $object->order = $this->order->toObject();
        }
        if ($this->redirectPaymentMethodSpecificInput !== null) {
            $object->redirectPaymentMethodSpecificInput = $this->redirectPaymentMethodSpecificInput->toObject();
        }
        if ($this->sepaDirectDebitPaymentMethodSpecificInput !== null) {
            $object->sepaDirectDebitPaymentMethodSpecificInput = $this->sepaDirectDebitPaymentMethodSpecificInput->toObject();
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
        if (property_exists($object, 'cardPaymentMethodSpecificInput')) {
            if (!is_object($object->cardPaymentMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardPaymentMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new CardPaymentMethodSpecificInput();
            $this->cardPaymentMethodSpecificInput = $value->fromObject($object->cardPaymentMethodSpecificInput);
        }
        if (property_exists($object, 'encryptedCustomerInput')) {
            $this->encryptedCustomerInput = $object->encryptedCustomerInput;
        }
        if (property_exists($object, 'fraudFields')) {
            if (!is_object($object->fraudFields)) {
                throw new UnexpectedValueException('value \'' . print_r($object->fraudFields, true) . '\' is not an object');
            }
            $value = new FraudFields();
            $this->fraudFields = $value->fromObject($object->fraudFields);
        }
        if (property_exists($object, 'hostedTokenizationId')) {
            $this->hostedTokenizationId = $object->hostedTokenizationId;
        }
        if (property_exists($object, 'mobilePaymentMethodSpecificInput')) {
            if (!is_object($object->mobilePaymentMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->mobilePaymentMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new MobilePaymentMethodSpecificInput();
            $this->mobilePaymentMethodSpecificInput = $value->fromObject($object->mobilePaymentMethodSpecificInput);
        }
        if (property_exists($object, 'order')) {
            if (!is_object($object->order)) {
                throw new UnexpectedValueException('value \'' . print_r($object->order, true) . '\' is not an object');
            }
            $value = new Order();
            $this->order = $value->fromObject($object->order);
        }
        if (property_exists($object, 'redirectPaymentMethodSpecificInput')) {
            if (!is_object($object->redirectPaymentMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->redirectPaymentMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentMethodSpecificInput();
            $this->redirectPaymentMethodSpecificInput = $value->fromObject($object->redirectPaymentMethodSpecificInput);
        }
        if (property_exists($object, 'sepaDirectDebitPaymentMethodSpecificInput')) {
            if (!is_object($object->sepaDirectDebitPaymentMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->sepaDirectDebitPaymentMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new SepaDirectDebitPaymentMethodSpecificInput();
            $this->sepaDirectDebitPaymentMethodSpecificInput = $value->fromObject($object->sepaDirectDebitPaymentMethodSpecificInput);
        }
        return $this;
    }
}
