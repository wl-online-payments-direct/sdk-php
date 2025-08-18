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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->bankingAppLabel)) {
            $object->bankingAppLabel = $this->bankingAppLabel;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct3204SpecificOutput
    {
        parent::fromObject($object);
        if (property_exists($object, 'bankingAppLabel')) {
            $this->bankingAppLabel = $object->bankingAppLabel;
        }
        return $this;
    }
}
