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
class PaymentLinkSpecificInput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $expirationDate;

    /**
     * @var string
     */
    private $recipientName;

    // Methods
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @var string
     */
    public function setDescription($value)
    {
        $this->description = $value;
    }

    /**
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
    /**
     * @var string
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
     * @var string
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
        if ($this->description !== null) {
            $object->description = $this->description;
        }
        if ($this->expirationDate !== null) {
            $object->expirationDate = $this->expirationDate;
        }
        if ($this->recipientName !== null) {
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
            $this->expirationDate = $object->expirationDate;
        }
        if (property_exists($object, 'recipientName')) {
            $this->recipientName = $object->recipientName;
        }
        return $this;
    }
}
