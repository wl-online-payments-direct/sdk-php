<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5407 extends DataObject
{
    /**
     * @var string
     */
    public $pairingToken = null;

    /**
     * @var string
     */
    public $qrCode = null;

    /**
     * @return string
     */
    public function getPairingToken()
    {
        return $this->pairingToken;
    }

    /**
     * @param string
     */
    public function setPairingToken($value)
    {
        $this->pairingToken = $value;
    }

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
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->pairingToken)) {
            $object->pairingToken = $this->pairingToken;
        }
        if (!is_null($this->qrCode)) {
            $object->qrCode = $this->qrCode;
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
        if (property_exists($object, 'pairingToken')) {
            $this->pairingToken = $object->pairingToken;
        }
        if (property_exists($object, 'qrCode')) {
            $this->qrCode = $object->qrCode;
        }
        return $this;
    }
}
