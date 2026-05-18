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
     * @var string|null
     * @deprecated The URL where the webhook will be dispatched for all status change events related to this payment.
     */
    public ?string $webhookUrl = null;

    /**
     * @var string[]|null
     */
    public ?array $webhooksUrls = null;

    /**
     * @return string|null
     * @deprecated The URL where the webhook will be dispatched for all status change events related to this payment.
     */
    public function getWebhookUrl(): ?string
    {
        return $this->webhookUrl;
    }

    /**
     * @param string|null $value
     * @deprecated The URL where the webhook will be dispatched for all status change events related to this payment.
     */
    public function setWebhookUrl(?string $value): void
    {
        $this->webhookUrl = $value;
    }

    /**
     * @return string[]|null
     */
    public function getWebhooksUrls(): ?array
    {
        return $this->webhooksUrls;
    }

    /**
     * @param string[]|null $value
     */
    public function setWebhooksUrls(?array $value): void
    {
        $this->webhooksUrls = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): Feedbacks
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
