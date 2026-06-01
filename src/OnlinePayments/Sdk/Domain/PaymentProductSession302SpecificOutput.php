<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductSession302SpecificOutput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $session = null;

    /**
     * @return string|null
     */
    public function getSession(): ?string
    {
        return $this->session;
    }

    /**
     * @param string|null $value
     */
    public function setSession(?string $value): void
    {
        $this->session = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->session)) {
            $object->session = $this->session;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProductSession302SpecificOutput
    {
        parent::fromObject($object);
        if (property_exists($object, 'session')) {
            $this->session = $object->session;
        }
        return $this;
    }
}
