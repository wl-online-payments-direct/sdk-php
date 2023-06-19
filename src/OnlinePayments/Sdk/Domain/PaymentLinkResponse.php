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
class PaymentLinkResponse extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $expirationDate;

    /**
     * @var string
     */
    private $paymentId;

    /**
     * @var PaymentLinkEvent[]
     */
    private $paymentLinkEvents;

    /**
     * @var string
     */
    private $paymentLinkId;

    /**
     * @var PaymentLinkOrder
     */
    private $paymentLinkOrder;

    /**
     * @var string
     */
    private $recipientName;

    /**
     * @var string
     */
    private $redirectionUrl;

    /**
     * @var string
     */
    private $status;

    // Methods
    /**
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
    /**
     * @var string
     */
    public function setExpirationDate($value)
    {
        $this->expirationDate = $value;
    }

    /**
     * @return string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }
    /**
     * @var string
     */
    public function setPaymentId($value)
    {
        $this->paymentId = $value;
    }

    /**
     * @return PaymentLinkEvent[]
     */
    public function getPaymentLinkEvents()
    {
        return $this->paymentLinkEvents;
    }
    /**
     * @var PaymentLinkEvent[]
     */
    public function setPaymentLinkEvents($value)
    {
        $this->paymentLinkEvents = $value;
    }

    /**
     * @return string
     */
    public function getPaymentLinkId()
    {
        return $this->paymentLinkId;
    }
    /**
     * @var string
     */
    public function setPaymentLinkId($value)
    {
        $this->paymentLinkId = $value;
    }

    /**
     * @return PaymentLinkOrder
     */
    public function getPaymentLinkOrder()
    {
        return $this->paymentLinkOrder;
    }
    /**
     * @var PaymentLinkOrder
     */
    public function setPaymentLinkOrder($value)
    {
        $this->paymentLinkOrder = $value;
    }

    /**
     * @return string
     */
    public function getRecipientName()
    {
        return $this->recipientName;
    }
    /**
     * @var string
     */
    public function setRecipientName($value)
    {
        $this->recipientName = $value;
    }

    /**
     * @return string
     */
    public function getRedirectionUrl()
    {
        return $this->redirectionUrl;
    }
    /**
     * @var string
     */
    public function setRedirectionUrl($value)
    {
        $this->redirectionUrl = $value;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @var string
     */
    public function setStatus($value)
    {
        $this->status = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->expirationDate !== null) {
            $object->expirationDate = $this->expirationDate;
        }
        if ($this->paymentId !== null) {
            $object->paymentId = $this->paymentId;
        }
        if ($this->paymentLinkEvents !== null) {
            $object->paymentLinkEvents = [];
            foreach ($this->paymentLinkEvents as $element) {
                if ($element !== null) {
                    $object->paymentLinkEvents[] = $element->toObject();
                }
            }
        }
        if ($this->paymentLinkId !== null) {
            $object->paymentLinkId = $this->paymentLinkId;
        }
        if ($this->paymentLinkOrder !== null) {
            $object->paymentLinkOrder = $this->paymentLinkOrder->toObject();
        }
        if ($this->recipientName !== null) {
            $object->recipientName = $this->recipientName;
        }
        if ($this->redirectionUrl !== null) {
            $object->redirectionUrl = $this->redirectionUrl;
        }
        if ($this->status !== null) {
            $object->status = $this->status;
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
        if (property_exists($object, 'expirationDate')) {
            $this->expirationDate = $object->expirationDate;
        }
        if (property_exists($object, 'paymentId')) {
            $this->paymentId = $object->paymentId;
        }
        if (property_exists($object, 'paymentLinkEvents')) {
            if (!is_array($object->paymentLinkEvents) && !is_object($object->paymentLinkEvents)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentLinkEvents, true) . '\' is not an array or object');
            }
            $this->paymentLinkEvents = [];
            foreach ($object->paymentLinkEvents as $element) {
                $value = new PaymentLinkEvent();
                $this->paymentLinkEvents[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'paymentLinkId')) {
            $this->paymentLinkId = $object->paymentLinkId;
        }
        if (property_exists($object, 'paymentLinkOrder')) {
            if (!is_object($object->paymentLinkOrder)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentLinkOrder, true) . '\' is not an object');
            }
            $value = new PaymentLinkOrder();
            $this->paymentLinkOrder = $value->fromObject($object->paymentLinkOrder);
        }
        if (property_exists($object, 'recipientName')) {
            $this->recipientName = $object->recipientName;
        }
        if (property_exists($object, 'redirectionUrl')) {
            $this->redirectionUrl = $object->redirectionUrl;
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        return $this;
    }
}
