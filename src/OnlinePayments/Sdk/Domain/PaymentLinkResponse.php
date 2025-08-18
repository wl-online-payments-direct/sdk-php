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
     * @var DateTime|null
     */
    public ?DateTime $expirationDate = null;

    /**
     * @var bool|null
     */
    public ?bool $isReusableLink = null;

    /**
     * @var string|null
     */
    public ?string $paymentId = null;

    /**
     * @var PaymentLinkEvent[]|null
     */
    public ?array $paymentLinkEvents = null;

    /**
     * @var string|null
     */
    public ?string $paymentLinkId = null;

    /**
     * @var PaymentLinkOrderOutput|null
     */
    public ?PaymentLinkOrderOutput $paymentLinkOrder = null;

    /**
     * @var string|null
     */
    public ?string $recipientName = null;

    /**
     * @var string|null
     */
    public ?string $redirectionUrl = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @return DateTime|null
     */
    public function getExpirationDate(): ?DateTime
    {
        return $this->expirationDate;
    }

    /**
     * @param DateTime|null $value
     */
    public function setExpirationDate(?DateTime $value): void
    {
        $this->expirationDate = $value;
    }

    /**
     * @return bool|null
     */
    public function getIsReusableLink(): ?bool
    {
        return $this->isReusableLink;
    }

    /**
     * @param bool|null $value
     */
    public function setIsReusableLink(?bool $value): void
    {
        $this->isReusableLink = $value;
    }

    /**
     * @return string|null
     */
    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentId(?string $value): void
    {
        $this->paymentId = $value;
    }

    /**
     * @return PaymentLinkEvent[]|null
     */
    public function getPaymentLinkEvents(): ?array
    {
        return $this->paymentLinkEvents;
    }

    /**
     * @param PaymentLinkEvent[]|null $value
     */
    public function setPaymentLinkEvents(?array $value): void
    {
        $this->paymentLinkEvents = $value;
    }

    /**
     * @return string|null
     */
    public function getPaymentLinkId(): ?string
    {
        return $this->paymentLinkId;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentLinkId(?string $value): void
    {
        $this->paymentLinkId = $value;
    }

    /**
     * @return PaymentLinkOrderOutput|null
     */
    public function getPaymentLinkOrder(): ?PaymentLinkOrderOutput
    {
        return $this->paymentLinkOrder;
    }

    /**
     * @param PaymentLinkOrderOutput|null $value
     */
    public function setPaymentLinkOrder(?PaymentLinkOrderOutput $value): void
    {
        $this->paymentLinkOrder = $value;
    }

    /**
     * @return string|null
     */
    public function getRecipientName(): ?string
    {
        return $this->recipientName;
    }

    /**
     * @param string|null $value
     */
    public function setRecipientName(?string $value): void
    {
        $this->recipientName = $value;
    }

    /**
     * @return string|null
     */
    public function getRedirectionUrl(): ?string
    {
        return $this->redirectionUrl;
    }

    /**
     * @param string|null $value
     */
    public function setRedirectionUrl(?string $value): void
    {
        $this->redirectionUrl = $value;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $value
     */
    public function setStatus(?string $value): void
    {
        $this->status = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): PaymentLinkResponse
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
