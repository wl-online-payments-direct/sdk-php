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
class PaymentProduct5407 extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $pairingToken;

    /**
     * @var string
     */
    private $qrCode;

    // Methods
    /**
     * @return string
     */
    public function getPairingToken()
    {
        return $this->pairingToken;
    }
    /**
     * @var string
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
     * @var string
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
        if ($this->pairingToken !== null) {
            $object->pairingToken = $this->pairingToken;
        }
        if ($this->qrCode !== null) {
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
