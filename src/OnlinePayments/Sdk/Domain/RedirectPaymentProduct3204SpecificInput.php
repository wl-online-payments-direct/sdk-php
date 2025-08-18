<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct3204SpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $aliasLabel = null;

    /**
     * @var string|null
     */
    public ?string $blikCode = null;

    /**
     * @return string|null
     */
    public function getAliasLabel(): ?string
    {
        return $this->aliasLabel;
    }

    /**
     * @param string|null $value
     */
    public function setAliasLabel(?string $value): void
    {
        $this->aliasLabel = $value;
    }

    /**
     * @return string|null
     */
    public function getBlikCode(): ?string
    {
        return $this->blikCode;
    }

    /**
     * @param string|null $value
     */
    public function setBlikCode(?string $value): void
    {
        $this->blikCode = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->aliasLabel)) {
            $object->aliasLabel = $this->aliasLabel;
        }
        if (!is_null($this->blikCode)) {
            $object->blikCode = $this->blikCode;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RedirectPaymentProduct3204SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'aliasLabel')) {
            $this->aliasLabel = $object->aliasLabel;
        }
        if (property_exists($object, 'blikCode')) {
            $this->blikCode = $object->blikCode;
        }
        return $this;
    }
}
