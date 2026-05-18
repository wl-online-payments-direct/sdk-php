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
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var DateTime|null
     */
    public ?DateTime $expirationDate = null;

    /**
     * @var string|null
     */
    public ?string $recipientName = null;

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $value
     */
    public function setDescription(?string $value): void
    {
        $this->description = $value;
    }

    /**
     * @return DateTime|null
     */
    public function getExpirationDate(): ?DateTime
    {
        return $this->expirationDate;
    }

    /**
     * @param DateTime|null $value
     */
    public function setExpirationDate(?DateTime $value): void
    {
        $this->expirationDate = $value;
    }

    /**
     * @return string|null
     */
    public function getRecipientName(): ?string
    {
        return $this->recipientName;
    }

    /**
     * @param string|null $value
     */
    public function setRecipientName(?string $value): void
    {
        $this->recipientName = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): PaymentLinkSpecificInput
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
