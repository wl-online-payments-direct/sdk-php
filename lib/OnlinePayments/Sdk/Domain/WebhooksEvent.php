<?php
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Webhooks
 */
class WebhooksEvent extends DataObject
{
    /**
     * @var string
     */
    public $apiVersion = null;

    /**
     * @var string
     */
    public $created = null;

    /**
     * @var string
     */
    public $id = null;

    /**
     * @var string
     */
    public $merchantId = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @var PaymentResponse
     */
    public $payment = null;

    /**
     * @var PayoutResponse
     */
    public $payout = null;

    /**
     * @var RefundResponse
     */
    public $refund = null;

    /**
     * @var TokenResponse
     */
    public $token = null;

    /**
     * @return PaymentResponse
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param PaymentResponse $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    /**
     * @return PayoutResponse
     */
    public function getPayout()
    {
        return $this->payout;
    }

    /**
     * @param PayoutResponse $payout
     */
    public function setPayout($payout)
    {
        $this->payout = $payout;
    }

    /**
     * @return RefundResponse
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * @param RefundResponse $refund
     */
    public function setRefund($refund)
    {
        $this->refund = $refund;
    }

    /**
     * @return TokenResponse
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param TokenResponse $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->apiVersion)) {
            $object->apiVersion = $this->apiVersion;
        }
        if (!is_null($this->created)) {
            $object->created = $this->created;
        }
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->merchantId)) {
            $object->merchantId = $this->merchantId;
        }
        if (!is_null($this->type)) {
            $object->type = $this->type;
        }
        if (!is_null($this->payment)) {
            $object->payment = $this->payment->toObject();
        }
        if (!is_null($this->payout)) {
            $object->payout = $this->payout->toObject();
        }
        if (!is_null($this->refund)) {
            $object->refund = $this->refund->toObject();
        }
        if (!is_null($this->token)) {
            $object->token = $this->token->toObject();
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
