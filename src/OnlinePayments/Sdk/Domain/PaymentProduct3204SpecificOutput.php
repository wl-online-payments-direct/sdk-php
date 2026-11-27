<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct3204SpecificOutput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $bankingAppLabel = null;

    /**
     * @return string|null
     */
    public function getBankingAppLabel(): ?string
    {
        return $this->bankingAppLabel;
    }

    /**
     * @param string|null $value
     */
    public function setBankingAppLabel(?string $value): void
    {
        $this->bankingAppLabel = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withBankingAppLabel(?string $value): static
    {
        $this->bankingAppLabel = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->bankingAppLabel !== null) {
            $object->bankingAppLabel = $this->bankingAppLabel;
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
        if (property_exists($object, 'bankingAppLabel')) {
            $this->bankingAppLabel = $object->bankingAppLabel;
        }
        return $this;
    }
}
