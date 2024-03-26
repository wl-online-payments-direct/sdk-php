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
class PaymentProduct3012 extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $qrCode;

    /**
     * @var string
     */
    private $urlIntent;

    // Methods
    /**
     * @return string
     */
    public function getQrCode()
    {
        return $this->qrCode;
    }
    /**
     * @var string
     */
    public function setQrCode($value)
    {
        $this->qrCode = $value;
    }

    /**
     * @return string
     */
    public function getUrlIntent()
    {
        return $this->urlIntent;
    }
    /**
     * @var string
     */
    public function setUrlIntent($value)
    {
        $this->urlIntent = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->qrCode !== null) {
            $object->qrCode = $this->qrCode;
        }
        if ($this->urlIntent !== null) {
            $object->urlIntent = $this->urlIntent;
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
        if (property_exists($object, 'qrCode')) {
            $this->qrCode = $object->qrCode;
        }
        if (property_exists($object, 'urlIntent')) {
            $this->urlIntent = $object->urlIntent;
        }
        return $this;
    }
}
