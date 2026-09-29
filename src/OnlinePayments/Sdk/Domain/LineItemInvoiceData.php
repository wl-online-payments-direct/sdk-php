<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class LineItemInvoiceData extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $description = null;

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
     * @return LineItemInvoiceData
    */
    public function withDescription(?string $value): LineItemInvoiceData
    {
        $this->description = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->description)) {
            $object->description = $this->description;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): LineItemInvoiceData
    {
        parent::fromObject($object);
        if (property_exists($object, 'description')) {
            $this->description = $object->description;
        }
        return $this;
    }
}
