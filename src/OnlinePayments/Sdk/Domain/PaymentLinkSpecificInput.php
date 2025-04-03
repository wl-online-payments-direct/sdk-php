<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use DateTime;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentLinkSpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $description = null;

    /**
     * @var DateTime
     */
    public $expirationDate = null;

    /**
     * @var string
     */
    public $recipientName = null;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string
     */
    public function setDescription($value)
    {
        $this->description = $value;
    }

    /**
     * @return DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param DateTime
     */
    public function setExpirationDate($value)
    {
        $this->expirationDate = $value;
    }

    /**
     * @return string
     */
    public function getRecipientName()
    {
        return $this->recipientName;
    }

    /**
     * @param string
     */
    public function setRecipientName($value)
    {
        $this->recipientName = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->description)) {
            $object->description = $this->description;
        }
        if (!is_null($this->expirationDate)) {
            $object->expirationDate = $this->expirationDate->format('Y-m-d\\TH:i:s.vP');
        }
        if (!is_null($this->recipientName)) {
            $object->recipientName = $this->recipientName;
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
        if (property_exists($object, 'description')) {
            $this->description = $object->description;
        }
        if (property_exists($object, 'expirationDate')) {
            $this->expirationDate = new DateTime($object->expirationDate);
        }
        if (property_exists($object, 'recipientName')) {
            $this->recipientName = $object->recipientName;
        }
        return $this;
    }
}
