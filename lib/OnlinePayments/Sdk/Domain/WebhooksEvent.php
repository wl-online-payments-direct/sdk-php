<?php

namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Webhooks
 */
class WebhooksEvent extends DataObject
{
    /** @var string|null */
    public ?string $apiVersion = null;

    /** @var string|null */
    public ?string $created = null;

    /** @var string|null */
    public ?string $id = null;

    /** @var string|null */
    public ?string $merchantId = null;

    /** @var string|null */
    public ?string $type = null;

    /** @var GetBatchStatusResponse|null */
    public ?GetBatchStatusResponse $directBatch = null;

    /** @var PaymentLinkResponse|null */
    public ?PaymentLinkResponse $paymentLink = null;

    /** @var PaymentResponse|null */
    public ?PaymentResponse $payment = null;

    /** @var PayoutResponse|null */
    public ?PayoutResponse $payout = null;

    /** @var RefundResponse|null */
    public ?RefundResponse $refund = null;

    /** @var TokenResponse|null */
    public ?TokenResponse $token = null;

    /**
     * @return GetBatchStatusResponse|null
     */
    public function getDirectBatch(): ?GetBatchStatusResponse
    {
        return $this->directBatch;
    }

    /**
     * @param GetBatchStatusResponse|null $directBatch
     */
    public function setDirectBatch(?GetBatchStatusResponse $directBatch): void
    {
        $this->directBatch = $directBatch;
    }

    /**
     * @return PaymentLinkResponse|null
     */
    public function getPaymentLink(): ?PaymentLinkResponse
    {
        return $this->paymentLink;
    }

    /**
     * @param PaymentLinkResponse|null $paymentLink
     */
    public function setPaymentLink(?PaymentLinkResponse $paymentLink): void
    {
        $this->paymentLink = $paymentLink;
    }

    /**
     * @return PaymentResponse|null
     */
    public function getPayment(): ?PaymentResponse
    {
        return $this->payment;
    }

    /**
     * @param PaymentResponse|null $payment
     */
    public function setPayment(?PaymentResponse $payment): void
    {
        $this->payment = $payment;
    }

    /**
     * @return PayoutResponse|null
     */
    public function getPayout(): ?PayoutResponse
    {
        return $this->payout;
    }

    /**
     * @param PayoutResponse|null $payout
     */
    public function setPayout(?PayoutResponse $payout): void
    {
        $this->payout = $payout;
    }

    /**
     * @return RefundResponse|null
     */
    public function getRefund(): ?RefundResponse
    {
        return $this->refund;
    }

    /**
     * @param RefundResponse|null $refund
     */
    public function setRefund(?RefundResponse $refund): void
    {
        $this->refund = $refund;
    }

    /**
     * @return TokenResponse|null
     */
    public function getToken(): ?TokenResponse
    {
        return $this->token;
    }

    /**
     * @param TokenResponse|null $token
     */
    public function setToken(?TokenResponse $token): void
    {
        $this->token = $token;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->apiVersion !== null) {
            $object->apiVersion = $this->apiVersion;
        }
        if ($this->created !== null) {
            $object->created = $this->created;
        }
        if ($this->id !== null) {
            $object->id = $this->id;
        }
        if ($this->merchantId !== null) {
            $object->merchantId = $this->merchantId;
        }
        if ($this->type !== null) {
            $object->type = $this->type;
        }
        if ($this->directBatch !== null) {
            $object->directBatch = $this->directBatch->toObject();
        }
        if ($this->paymentLink !== null) {
            $object->paymentLink = $this->paymentLink->toObject();
        }
        if ($this->payment !== null) {
            $object->payment = $this->payment->toObject();
        }
        if ($this->payout !== null) {
            $object->payout = $this->payout->toObject();
        }
        if ($this->refund !== null) {
            $object->refund = $this->refund->toObject();
        }
        if ($this->token !== null) {
            $object->token = $this->token->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'apiVersion')) {
            $this->apiVersion = $object->apiVersion;
        }
        if (property_exists($object, 'created')) {
            $this->created = $object->created;
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'merchantId')) {
            $this->merchantId = $object->merchantId;
        }
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        if (property_exists($object, 'directBatch')) {
            if (!is_object($object->directBatch)) {
                throw new UnexpectedValueException('value \'' . print_r($object->directBatch, true) . '\' is not an object');
            }
            $value = new GetBatchStatusResponse();
            $this->directBatch = $value->fromObject($object->directBatch);
        }
        if (property_exists($object, 'paymentLink')) {
            if (!is_object($object->paymentLink)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentLink, true) . '\' is not an object');
            }
            $value = new PaymentLinkResponse();
            $this->paymentLink = $value->fromObject($object->paymentLink);
        }
        if (property_exists($object, 'payment')) {
            if (!is_object($object->payment)) {
                throw new UnexpectedValueException('value \'' . print_r($object->payment, true) . '\' is not an object');
            }
            $value = new PaymentResponse();
            $this->payment = $value->fromObject($object->payment);
        }
        if (property_exists($object, 'payout')) {
            if (!is_object($object->payout)) {
                throw new UnexpectedValueException('value \'' . print_r($object->payout, true) . '\' is not an object');
            }
            $value = new PayoutResponse();
            $this->payout = $value->fromObject($object->payout);
        }
        if (property_exists($object, 'refund')) {
            if (!is_object($object->refund)) {
                throw new UnexpectedValueException('value \'' . print_r($object->refund, true) . '\' is not an object');
            }
            $value = new RefundResponse();
            $this->refund = $value->fromObject($object->refund);
        }
        if (property_exists($object, 'token')) {
            if (!is_object($object->token)) {
                throw new UnexpectedValueException('value \'' . print_r($object->token, true) . '\' is not an object');
            }
            $value = new TokenResponse();
            $this->token = $value->fromObject($object->token);
        }
        return $this;
    }
}
