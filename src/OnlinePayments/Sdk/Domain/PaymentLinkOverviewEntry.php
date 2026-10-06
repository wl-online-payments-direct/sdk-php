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
class PaymentLinkOverviewEntry extends DataObject
{
    /**
     * @var AmountOfMoney|null
    */
    public ?AmountOfMoney $amount = null;

    /**
     * @var string|null
    */
    public ?string $createdBy = null;

    /**
     * @var DateTime|null
    */
    public ?DateTime $creationDate = null;

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
    public ?string $merchantId = null;

    /**
     * @var string|null
    */
    public ?string $merchantReference = null;

    /**
     * @var string|null
    */
    public ?string $paymentLinkId = null;

    /**
     * @var string|null
    */
    public ?string $redirectionUrl = null;

    /**
     * @var string|null
    */
    public ?string $status = null;

    /**
     * @return AmountOfMoney|null
    */
    public function getAmount(): ?AmountOfMoney
    {
        return $this->amount;
    }

    /**
     * @param AmountOfMoney|null $value
    */
    public function setAmount(?AmountOfMoney $value): void
    {
        $this->amount = $value;
    }

    /**
     * @param AmountOfMoney|null $value
     * @return PaymentLinkOverviewEntry
    */
    public function withAmount(?AmountOfMoney $value): PaymentLinkOverviewEntry
    {
        $this->amount = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    /**
     * @param string|null $value
    */
    public function setCreatedBy(?string $value): void
    {
        $this->createdBy = $value;
    }

    /**
     * @param string|null $value
     * @return PaymentLinkOverviewEntry
    */
    public function withCreatedBy(?string $value): PaymentLinkOverviewEntry
    {
        $this->createdBy = $value;
        return $this;
    }

    /**
     * @return DateTime|null
    */
    public function getCreationDate(): ?DateTime
    {
        return $this->creationDate;
    }

    /**
     * @param DateTime|null $value
    */
    public function setCreationDate(?DateTime $value): void
    {
        $this->creationDate = $value;
    }

    /**
     * @param DateTime|null $value
     * @return PaymentLinkOverviewEntry
    */
    public function withCreationDate(?DateTime $value): PaymentLinkOverviewEntry
    {
        $this->creationDate = $value;
        return $this;
    }

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
     * @param DateTime|null $value
     * @return PaymentLinkOverviewEntry
    */
    public function withExpirationDate(?DateTime $value): PaymentLinkOverviewEntry
    {
        $this->expirationDate = $value;
        return $this;
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
     * @param bool|null $value
     * @return PaymentLinkOverviewEntry
    */
    public function withIsReusableLink(?bool $value): PaymentLinkOverviewEntry
    {
        $this->isReusableLink = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * @param string|null $value
    */
    public function setMerchantId(?string $value): void
    {
        $this->merchantId = $value;
    }

    /**
     * @param string|null $value
     * @return PaymentLinkOverviewEntry
    */
    public function withMerchantId(?string $value): PaymentLinkOverviewEntry
    {
        $this->merchantId = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getMerchantReference(): ?string
    {
        return $this->merchantReference;
    }

    /**
     * @param string|null $value
    */
    public function setMerchantReference(?string $value): void
    {
        $this->merchantReference = $value;
    }

    /**
     * @param string|null $value
     * @return PaymentLinkOverviewEntry
    */
    public function withMerchantReference(?string $value): PaymentLinkOverviewEntry
    {
        $this->merchantReference = $value;
        return $this;
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
     * @param string|null $value
     * @return PaymentLinkOverviewEntry
    */
    public function withPaymentLinkId(?string $value): PaymentLinkOverviewEntry
    {
        $this->paymentLinkId = $value;
        return $this;
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
     * @param string|null $value
     * @return PaymentLinkOverviewEntry
    */
    public function withRedirectionUrl(?string $value): PaymentLinkOverviewEntry
    {
        $this->redirectionUrl = $value;
        return $this;
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
     * @param string|null $value
     * @return PaymentLinkOverviewEntry
    */
    public function withStatus(?string $value): PaymentLinkOverviewEntry
    {
        $this->status = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->amount)) {
            $object->amount = $this->amount->toObject();
        }
        if (!is_null($this->createdBy)) {
            $object->createdBy = $this->createdBy;
        }
        if (!is_null($this->creationDate)) {
            $object->creationDate = $this->creationDate->format('Y-m-d\\TH:i:s.vP');
        }
        if (!is_null($this->expirationDate)) {
            $object->expirationDate = $this->expirationDate->format('Y-m-d\\TH:i:s.vP');
        }
        if (!is_null($this->isReusableLink)) {
            $object->isReusableLink = $this->isReusableLink;
        }
        if (!is_null($this->merchantId)) {
            $object->merchantId = $this->merchantId;
        }
        if (!is_null($this->merchantReference)) {
            $object->merchantReference = $this->merchantReference;
        }
        if (!is_null($this->paymentLinkId)) {
            $object->paymentLinkId = $this->paymentLinkId;
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentLinkOverviewEntry
    {
        parent::fromObject($object);
        if (property_exists($object, 'amount')) {
            if (!is_object($object->amount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amount = $value->fromObject($object->amount);
        }
        if (property_exists($object, 'createdBy')) {
            $this->createdBy = $object->createdBy;
        }
        if (property_exists($object, 'creationDate')) {
            $this->creationDate = new DateTime($object->creationDate);
        }
        if (property_exists($object, 'expirationDate')) {
            $this->expirationDate = new DateTime($object->expirationDate);
        }
        if (property_exists($object, 'isReusableLink')) {
            $this->isReusableLink = $object->isReusableLink;
        }
        if (property_exists($object, 'merchantId')) {
            $this->merchantId = $object->merchantId;
        }
        if (property_exists($object, 'merchantReference')) {
            $this->merchantReference = $object->merchantReference;
        }
        if (property_exists($object, 'paymentLinkId')) {
            $this->paymentLinkId = $object->paymentLinkId;
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
