<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5404 extends DataObject
{
    /**
     * @var string
     */
    public $appSwitchLink = null;

    /**
     * @var string
     */
    public $qrCodeUrl = null;

    /**
     * @return string
     */
    public function getAppSwitchLink()
    {
        return $this->appSwitchLink;
    }

    /**
     * @param string
     */
    public function setAppSwitchLink($value)
    {
        $this->appSwitchLink = $value;
    }

    /**
     * @return string
     */
    public function getQrCodeUrl()
    {
        return $this->qrCodeUrl;
    }

    /**
     * @param string
     */
    public function setQrCodeUrl($value)
    {
        $this->qrCodeUrl = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->appSwitchLink)) {
            $object->appSwitchLink = $this->appSwitchLink;
        }
        if (!is_null($this->qrCodeUrl)) {
            $object->qrCodeUrl = $this->qrCodeUrl;
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
        if (property_exists($object, 'appSwitchLink')) {
            $this->appSwitchLink = $object->appSwitchLink;
        }
        if (property_exists($object, 'qrCodeUrl')) {
            $this->qrCodeUrl = $object->qrCodeUrl;
        }
        return $this;
    }
}
