<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Feedbacks extends DataObject
{
    /**
     * @var string
     * @deprecated The URL where the webhook will be dispatched for all status change events related to this payment.
     */
    public $webhookUrl = null;

    /**
     * @var string[]
     */
    public $webhooksUrls = null;

    /**
     * @return string
     * @deprecated The URL where the webhook will be dispatched for all status change events related to this payment.
     */
    public function getWebhookUrl()
    {
        return $this->webhookUrl;
    }

    /**
     * @param string
     * @deprecated The URL where the webhook will be dispatched for all status change events related to this payment.
     */
    public function setWebhookUrl($value)
    {
        $this->webhookUrl = $value;
    }

    /**
     * @return string[]
     */
    public function getWebhooksUrls()
    {
        return $this->webhooksUrls;
    }

    /**
     * @param string[]
     */
    public function setWebhooksUrls($value)
    {
        $this->webhooksUrls = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->webhookUrl)) {
            $object->webhookUrl = $this->webhookUrl;
        }
        if (!is_null($this->webhooksUrls)) {
            $object->webhooksUrls = [];
            foreach ($this->webhooksUrls as $element) {
                if (!is_null($element)) {
                    $object->webhooksUrls[] = $element;
                }
            }
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
        if (property_exists($object, 'webhookUrl')) {
            $this->webhookUrl = $object->webhookUrl;
        }
        if (property_exists($object, 'webhooksUrls')) {
            if (!is_array($object->webhooksUrls) && !is_object($object->webhooksUrls)) {
                throw new UnexpectedValueException('value \'' . print_r($object->webhooksUrls, true) . '\' is not an array or object');
            }
            $this->webhooksUrls = [];
            foreach ($object->webhooksUrls as $element) {
                $this->webhooksUrls[] = $element;
            }
        }
        return $this;
    }
}
