<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use DateTime;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreatePaymentLinkRequest extends DataObject
{
    /**
     * @var CardPaymentMethodSpecificInputBase
     */
    public $cardPaymentMethodSpecificInput = null;

    /**
     * @var string
     * @deprecated A note related to the created payment link.  Use paymentLinkSpecificInput/description instead.
     */
    public $description = null;

    /**
     * @var DateTime
     * @deprecated The date after which the payment link will not be usable to complete the payment. The date sent cannot be more than 6 months in the future or a past date. It must also contain the UTC offset.  Use paymentLinkSpecificInput/expirationDate instead.
     */
    public $expirationDate = null;

    /**
     * @var Feedbacks
     */
    public $feedbacks = null;

    /**
     * @var FraudFields
     */
    public $fraudFields = null;

    /**
     * @var HostedCheckoutSpecificInput
     */
    public $hostedCheckoutSpecificInput = null;

    /**
     * @var bool
     */
    public $isReusableLink = null;

    /**
     * @var MobilePaymentMethodHostedCheckoutSpecificInput
     */
    public $mobilePaymentMethodSpecificInput = null;

    /**
     * @var Order
     */
    public $order = null;

    /**
     * @var PaymentLinkOrderInput
     */
    public $paymentLinkOrder = null;

    /**
     * @var PaymentLinkSpecificInput
     */
    public $paymentLinkSpecificInput = null;

    /**
     * @var string
     * @deprecated The payment link recipient name.  Use paymentLinkSpecificInput/recipientName instead.
     */
    public $recipientName = null;

    /**
     * @var RedirectPaymentMethodSpecificInput
     */
    public $redirectPaymentMethodSpecificInput = null;

    /**
     * @var SepaDirectDebitPaymentMethodSpecificInputBase
     */
    public $sepaDirectDebitPaymentMethodSpecificInput = null;

    /**
     * @return CardPaymentMethodSpecificInputBase
     */
    public function getCardPaymentMethodSpecificInput()
    {
        return $this->cardPaymentMethodSpecificInput;
    }

    /**
     * @param CardPaymentMethodSpecificInputBase
     */
    public function setCardPaymentMethodSpecificInput($value)
    {
        $this->cardPaymentMethodSpecificInput = $value;
    }

    /**
     * @return string
     * @deprecated A note related to the created payment link.  Use paymentLinkSpecificInput/description instead.
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string
     * @deprecated A note related to the created payment link.  Use paymentLinkSpecificInput/description instead.
     */
    public function setDescription($value)
    {
        $this->description = $value;
    }

    /**
     * @return DateTime
     * @deprecated The date after which the payment link will not be usable to complete the payment. The date sent cannot be more than 6 months in the future or a past date. It must also contain the UTC offset.  Use paymentLinkSpecificInput/expirationDate instead.
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param DateTime
     * @deprecated The date after which the payment link will not be usable to complete the payment. The date sent cannot be more than 6 months in the future or a past date. It must also contain the UTC offset.  Use paymentLinkSpecificInput/expirationDate instead.
     */
    public function setExpirationDate($value)
    {
        $this->expirationDate = $value;
    }

    /**
     * @return Feedbacks
     */
    public function getFeedbacks()
    {
        return $this->feedbacks;
    }

    /**
     * @param Feedbacks
     */
    public function setFeedbacks($value)
    {
        $this->feedbacks = $value;
    }

    /**
     * @return FraudFields
     */
    public function getFraudFields()
    {
        return $this->fraudFields;
    }

    /**
     * @param FraudFields
     */
    public function setFraudFields($value)
    {
        $this->fraudFields = $value;
    }

    /**
     * @return HostedCheckoutSpecificInput
     */
    public function getHostedCheckoutSpecificInput()
    {
        return $this->hostedCheckoutSpecificInput;
    }

    /**
     * @param HostedCheckoutSpecificInput
     */
    public function setHostedCheckoutSpecificInput($value)
    {
        $this->hostedCheckoutSpecificInput = $value;
    }

    /**
     * @return bool
     */
    public function getIsReusableLink()
    {
        return $this->isReusableLink;
    }

    /**
     * @param bool
     */
    public function setIsReusableLink($value)
    {
        $this->isReusableLink = $value;
    }

    /**
     * @return MobilePaymentMethodHostedCheckoutSpecificInput
     */
    public function getMobilePaymentMethodSpecificInput()
    {
        return $this->mobilePaymentMethodSpecificInput;
    }

    /**
     * @param MobilePaymentMethodHostedCheckoutSpecificInput
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
     * @param Order
     */
    public function setOrder($value)
    {
        $this->order = $value;
    }

    /**
     * @return PaymentLinkOrderInput
     */
    public function getPaymentLinkOrder()
    {
        return $this->paymentLinkOrder;
    }

    /**
     * @param PaymentLinkOrderInput
     */
    public function setPaymentLinkOrder($value)
    {
        $this->paymentLinkOrder = $value;
    }

    /**
     * @return PaymentLinkSpecificInput
     */
    public function getPaymentLinkSpecificInput()
    {
        return $this->paymentLinkSpecificInput;
    }

    /**
     * @param PaymentLinkSpecificInput
     */
    public function setPaymentLinkSpecificInput($value)
    {
        $this->paymentLinkSpecificInput = $value;
    }

    /**
     * @return string
     * @deprecated The payment link recipient name.  Use paymentLinkSpecificInput/recipientName instead.
     */
    public function getRecipientName()
    {
        return $this->recipientName;
    }

    /**
     * @param string
     * @deprecated The payment link recipient name.  Use paymentLinkSpecificInput/recipientName instead.
     */
    public function setRecipientName($value)
    {
        $this->recipientName = $value;
    }

    /**
     * @return RedirectPaymentMethodSpecificInput
     */
    public function getRedirectPaymentMethodSpecificInput()
    {
        return $this->redirectPaymentMethodSpecificInput;
    }

    /**
     * @param RedirectPaymentMethodSpecificInput
     */
    public function setRedirectPaymentMethodSpecificInput($value)
    {
        $this->redirectPaymentMethodSpecificInput = $value;
    }

    /**
     * @return SepaDirectDebitPaymentMethodSpecificInputBase
     */
    public function getSepaDirectDebitPaymentMethodSpecificInput()
    {
        return $this->sepaDirectDebitPaymentMethodSpecificInput;
    }

    /**
     * @param SepaDirectDebitPaymentMethodSpecificInputBase
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
        if (!is_null($this->cardPaymentMethodSpecificInput)) {
            $object->cardPaymentMethodSpecificInput = $this->cardPaymentMethodSpecificInput->toObject();
        }
        if (!is_null($this->description)) {
            $object->description = $this->description;
        }
        if (!is_null($this->expirationDate)) {
            $object->expirationDate = $this->expirationDate->format('Y-m-d\\TH:i:s.vP');
        }
        if (!is_null($this->feedbacks)) {
            $object->feedbacks = $this->feedbacks->toObject();
        }
        if (!is_null($this->fraudFields)) {
            $object->fraudFields = $this->fraudFields->toObject();
        }
        if (!is_null($this->hostedCheckoutSpecificInput)) {
            $object->hostedCheckoutSpecificInput = $this->hostedCheckoutSpecificInput->toObject();
        }
        if (!is_null($this->isReusableLink)) {
            $object->isReusableLink = $this->isReusableLink;
        }
        if (!is_null($this->mobilePaymentMethodSpecificInput)) {
            $object->mobilePaymentMethodSpecificInput = $this->mobilePaymentMethodSpecificInput->toObject();
        }
        if (!is_null($this->order)) {
            $object->order = $this->order->toObject();
        }
        if (!is_null($this->paymentLinkOrder)) {
            $object->paymentLinkOrder = $this->paymentLinkOrder->toObject();
        }
        if (!is_null($this->paymentLinkSpecificInput)) {
            $object->paymentLinkSpecificInput = $this->paymentLinkSpecificInput->toObject();
        }
        if (!is_null($this->recipientName)) {
            $object->recipientName = $this->recipientName;
        }
        if (!is_null($this->redirectPaymentMethodSpecificInput)) {
            $object->redirectPaymentMethodSpecificInput = $this->redirectPaymentMethodSpecificInput->toObject();
        }
        if (!is_null($this->sepaDirectDebitPaymentMethodSpecificInput)) {
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
            $value = new CardPaymentMethodSpecificInputBase();
            $this->cardPaymentMethodSpecificInput = $value->fromObject($object->cardPaymentMethodSpecificInput);
        }
        if (property_exists($object, 'description')) {
            $this->description = $object->description;
        }
        if (property_exists($object, 'expirationDate')) {
            $this->expirationDate = new DateTime($object->expirationDate);
        }
        if (property_exists($object, 'feedbacks')) {
            if (!is_object($object->feedbacks)) {
                throw new UnexpectedValueException('value \'' . print_r($object->feedbacks, true) . '\' is not an object');
            }
            $value = new Feedbacks();
            $this->feedbacks = $value->fromObject($object->feedbacks);
        }
        if (property_exists($object, 'fraudFields')) {
            if (!is_object($object->fraudFields)) {
                throw new UnexpectedValueException('value \'' . print_r($object->fraudFields, true) . '\' is not an object');
            }
            $value = new FraudFields();
            $this->fraudFields = $value->fromObject($object->fraudFields);
        }
        if (property_exists($object, 'hostedCheckoutSpecificInput')) {
            if (!is_object($object->hostedCheckoutSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->hostedCheckoutSpecificInput, true) . '\' is not an object');
            }
            $value = new HostedCheckoutSpecificInput();
            $this->hostedCheckoutSpecificInput = $value->fromObject($object->hostedCheckoutSpecificInput);
        }
        if (property_exists($object, 'isReusableLink')) {
            $this->isReusableLink = $object->isReusableLink;
        }
        if (property_exists($object, 'mobilePaymentMethodSpecificInput')) {
            if (!is_object($object->mobilePaymentMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->mobilePaymentMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new MobilePaymentMethodHostedCheckoutSpecificInput();
            $this->mobilePaymentMethodSpecificInput = $value->fromObject($object->mobilePaymentMethodSpecificInput);
        }
        if (property_exists($object, 'order')) {
            if (!is_object($object->order)) {
                throw new UnexpectedValueException('value \'' . print_r($object->order, true) . '\' is not an object');
            }
            $value = new Order();
            $this->order = $value->fromObject($object->order);
        }
        if (property_exists($object, 'paymentLinkOrder')) {
            if (!is_object($object->paymentLinkOrder)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentLinkOrder, true) . '\' is not an object');
            }
            $value = new PaymentLinkOrderInput();
            $this->paymentLinkOrder = $value->fromObject($object->paymentLinkOrder);
        }
        if (property_exists($object, 'paymentLinkSpecificInput')) {
            if (!is_object($object->paymentLinkSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentLinkSpecificInput, true) . '\' is not an object');
            }
            $value = new PaymentLinkSpecificInput();
            $this->paymentLinkSpecificInput = $value->fromObject($object->paymentLinkSpecificInput);
        }
        if (property_exists($object, 'recipientName')) {
            $this->recipientName = $object->recipientName;
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
            $value = new SepaDirectDebitPaymentMethodSpecificInputBase();
            $this->sepaDirectDebitPaymentMethodSpecificInput = $value->fromObject($object->sepaDirectDebitPaymentMethodSpecificInput);
        }
        return $this;
    }
}
