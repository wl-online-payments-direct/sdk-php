<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CsrRequest extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $csr = null;

    /**
     * @return string|null
     */
    public function getCsr(): ?string
    {
        return $this->csr;
    }

    /**
     * @param string|null $value
     */
    public function setCsr(?string $value): void
    {
        $this->csr = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->csr)) {
            $object->csr = $this->csr;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CsrRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'csr')) {
            $this->csr = $object->csr;
        }
        return $this;
    }
}
