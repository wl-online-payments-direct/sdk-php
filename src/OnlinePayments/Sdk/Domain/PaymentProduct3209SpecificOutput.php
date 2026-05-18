<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct3209SpecificOutput extends DataObject
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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->buyerCompliantBankMessage)) {
            $object->buyerCompliantBankMessage = $this->buyerCompliantBankMessage;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct3209SpecificOutput
    {
        parent::fromObject($object);
        if (property_exists($object, 'buyerCompliantBankMessage')) {
            $this->buyerCompliantBankMessage = $object->buyerCompliantBankMessage;
        }
        return $this;
    }
}
