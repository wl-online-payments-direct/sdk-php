<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct11SpecificInput extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $skipEmailValidation = null;

    /**
     * @return bool|null
     */
    public function getSkipEmailValidation(): ?bool
    {
        return $this->skipEmailValidation;
    }

    /**
     * @param bool|null $value
     */
    public function setSkipEmailValidation(?bool $value): void
    {
        $this->skipEmailValidation = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withSkipEmailValidation(?bool $value): static
    {
        $this->skipEmailValidation = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->skipEmailValidation !== null) {
            $object->skipEmailValidation = $this->skipEmailValidation;
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
        if (property_exists($object, 'skipEmailValidation')) {
            $this->skipEmailValidation = $object->skipEmailValidation;
        }
        return $this;
    }
}
