<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct3208SpecificOutput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $buyerCompliantBankMessage = null;

    /**
     * @return string|null
     */
    public function getBuyerCompliantBankMessage(): ?string
    {
        return $this->buyerCompliantBankMessage;
    }

    /**
     * @param string|null $value
     */
    public function setBuyerCompliantBankMessage(?string $value): void
    {
        $this->buyerCompliantBankMessage = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withBuyerCompliantBankMessage(?string $value): static
    {
        $this->buyerCompliantBankMessage = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->buyerCompliantBankMessage !== null) {
            $object->buyerCompliantBankMessage = $this->buyerCompliantBankMessage;
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
        if (property_exists($object, 'buyerCompliantBankMessage')) {
            $this->buyerCompliantBankMessage = $object->buyerCompliantBankMessage;
        }
        return $this;
    }
}
