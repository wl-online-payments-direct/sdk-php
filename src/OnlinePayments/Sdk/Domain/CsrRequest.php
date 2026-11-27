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
     * @param string|null $value
     * @return $this
     */
    public function withCsr(?string $value): static
    {
        $this->csr = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->csr !== null) {
            $object->csr = $this->csr;
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
        if (property_exists($object, 'csr')) {
            $this->csr = $object->csr;
        }
        return $this;
    }
}
