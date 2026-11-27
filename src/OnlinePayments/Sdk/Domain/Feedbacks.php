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
     *
     * @deprecated The URL where the webhook will be dispatched for all status change events related to this payment.
     */
    public ?string $webhookUrl = null;

    /**
     * @var string[]|null
     */
    public ?array $webhooksUrls = null;

    /**
     * @return string|null
     *
     * @deprecated The URL where the webhook will be dispatched for all status change events related to this payment.
     */
    public function getWebhookUrl(): ?string
    {
        return $this->webhookUrl;
    }

    /**
     * @param string|null $value
     *
     * @deprecated The URL where the webhook will be dispatched for all status change events related to this payment.
     */
    public function setWebhookUrl(?string $value): void
    {
        $this->webhookUrl = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     *
     * @deprecated The URL where the webhook will be dispatched for all status change events related to this payment.
     */
    public function withWebhookUrl(?string $value): static
    {
        $this->webhookUrl = $value;
        return $this;
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
     * @param string[]|null $value
     * @return $this
     */
    public function withWebhooksUrls(?array $value): static
    {
        $this->webhooksUrls = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->webhookUrl !== null) {
            $object->webhookUrl = $this->webhookUrl;
        }
        if ($this->webhooksUrls !== null) {
            $object->webhooksUrls = [];
            foreach ($this->webhooksUrls as $element) {
                if ($element !== null) {
                    $object->webhooksUrls[] = $element;
                }
            }
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
