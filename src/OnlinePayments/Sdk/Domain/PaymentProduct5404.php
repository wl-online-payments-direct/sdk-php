<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5404 extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $appSwitchLink;

    /**
     * @var string
     */
    private $qrCodeUrl;

    // Methods
    /**
     * @return string
     */
    public function getAppSwitchLink()
    {
        return $this->appSwitchLink;
    }
    /**
     * @var string
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
     * @var string
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
        if ($this->appSwitchLink !== null) {
            $object->appSwitchLink = $this->appSwitchLink;
        }
        if ($this->qrCodeUrl !== null) {
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
