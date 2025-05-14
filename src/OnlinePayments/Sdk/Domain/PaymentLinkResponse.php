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
class PaymentLinkResponse extends DataObject
{
    /**
     * @var DateTime
     */
    public $expirationDate = null;

    /**
     * @var bool
     */
    public $isReusableLink = null;

    /**
     * @var string
     */
    public $paymentId = null;

    /**
     * @var PaymentLinkEvent[]
     */
    public $paymentLinkEvents = null;

    /**
     * @var string
     */
    public $paymentLinkId = null;

    /**
     * @var PaymentLinkOrderOutput
     */
    public $paymentLinkOrder = null;

    /**
     * @var string
     */
    public $recipientName = null;

    /**
     * @var string
     */
    public $redirectionUrl = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @return DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param DateTime
     */
    public function setExpirationDate($value)
    {
        $this->expirationDate = $value;
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
     * @return string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param string
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
     * @param PaymentLinkEvent[]
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
     * @param string
     */
    public function setPaymentLinkId($value)
    {
        $this->paymentLinkId = $value;
    }

    /**
     * @return PaymentLinkOrderOutput
     */
    public function getPaymentLinkOrder()
    {
        return $this->paymentLinkOrder;
    }

    /**
     * @param PaymentLinkOrderOutput
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
     * @param string
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
     * @param string
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
     * @param string
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
        if (!is_null($this->expirationDate)) {
            $object->expirationDate = $this->expirationDate->format('Y-m-d\\TH:i:s.vP');
        }
        if (!is_null($this->isReusableLink)) {
            $object->isReusableLink = $this->isReusableLink;
        }
        if (!is_null($this->paymentId)) {
            $object->paymentId = $this->paymentId;
        }
        if (!is_null($this->paymentLinkEvents)) {
            $object->paymentLinkEvents = [];
            foreach ($this->paymentLinkEvents as $element) {
                if (!is_null($element)) {
                    $object->paymentLinkEvents[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->paymentLinkId)) {
            $object->paymentLinkId = $this->paymentLinkId;
        }
        if (!is_null($this->paymentLinkOrder)) {
            $object->paymentLinkOrder = $this->paymentLinkOrder->toObject();
        }
        if (!is_null($this->recipientName)) {
            $object->recipientName = $this->recipientName;
        }
        if (!is_null($this->redirectionUrl)) {
            $object->redirectionUrl = $this->redirectionUrl;
        }
        if (!is_null($this->status)) {
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
            $this->expirationDate = new DateTime($object->expirationDate);
        }
        if (property_exists($object, 'isReusableLink')) {
            $this->isReusableLink = $object->isReusableLink;
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
            $value = new PaymentLinkOrderOutput();
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
