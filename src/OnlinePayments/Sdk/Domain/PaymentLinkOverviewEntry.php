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
     * @return $this
     */
    public function withAmount(?AmountOfMoney $value): static
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
     * @return $this
     */
    public function withCreatedBy(?string $value): static
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
     * @return $this
     */
    public function withCreationDate(?DateTime $value): static
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
     * @return $this
     */
    public function withExpirationDate(?DateTime $value): static
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
     * @return $this
     */
    public function withIsReusableLink(?bool $value): static
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
     * @return $this
     */
    public function withMerchantId(?string $value): static
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
     * @return $this
     */
    public function withMerchantReference(?string $value): static
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
     * @return $this
     */
    public function withPaymentLinkId(?string $value): static
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
     * @return $this
     */
    public function withRedirectionUrl(?string $value): static
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
     * @return $this
     */
    public function withStatus(?string $value): static
    {
        $this->status = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->amount !== null) {
            $object->amount = $this->amount->toObject();
        }
        if ($this->createdBy !== null) {
            $object->createdBy = $this->createdBy;
        }
        if ($this->creationDate !== null) {
            $object->creationDate = $this->creationDate->format('Y-m-d\\TH:i:s.vP');
        }
        if ($this->expirationDate !== null) {
            $object->expirationDate = $this->expirationDate->format('Y-m-d\\TH:i:s.vP');
        }
        if ($this->isReusableLink !== null) {
            $object->isReusableLink = $this->isReusableLink;
        }
        if ($this->merchantId !== null) {
            $object->merchantId = $this->merchantId;
        }
        if ($this->merchantReference !== null) {
            $object->merchantReference = $this->merchantReference;
        }
        if ($this->paymentLinkId !== null) {
            $object->paymentLinkId = $this->paymentLinkId;
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
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
