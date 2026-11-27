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
     * @param string|null $value
     * @return $this
     */
    public function withDescription(?string $value): static
    {
        $this->description = $value;
        return $this;
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
     * @param DateTime|null $value
     * @return $this
     */
    public function withExpirationDate(?DateTime $value): static
    {
        $this->expirationDate = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withRecipientName(?string $value): static
    {
        $this->recipientName = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->description !== null) {
            $object->description = $this->description;
        }
        if ($this->expirationDate !== null) {
            $object->expirationDate = $this->expirationDate->format('Y-m-d\\TH:i:s.vP');
        }
        if ($this->recipientName !== null) {
            $object->recipientName = $this->recipientName;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
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
