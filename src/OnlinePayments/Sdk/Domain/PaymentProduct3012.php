<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct3012 extends DataObject
{
    /**
     * @var string
     */
    public $qrCode = null;

    /**
     * @var string
     */
    public $urlIntent = null;

    /**
     * @return string
     */
    public function getQrCode()
    {
        return $this->qrCode;
    }

    /**
     * @param string
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
     * @param string
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
        if (!is_null($this->qrCode)) {
            $object->qrCode = $this->qrCode;
        }
        if (!is_null($this->urlIntent)) {
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
