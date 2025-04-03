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
     */
    public $webhookUrl = null;

    /**
     * @return string
     */
    public function getWebhookUrl()
    {
        return $this->webhookUrl;
    }

    /**
     * @param string
     */
    public function setWebhookUrl($value)
    {
        $this->webhookUrl = $value;
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
        return $this;
    }
}
