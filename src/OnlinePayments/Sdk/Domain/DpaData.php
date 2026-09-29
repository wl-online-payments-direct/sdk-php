<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class DpaData extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $dpaName = null;

    /**
     * @return string|null
    */
    public function getDpaName(): ?string
    {
        return $this->dpaName;
    }

    /**
     * @param string|null $value
    */
    public function setDpaName(?string $value): void
    {
        $this->dpaName = $value;
    }

    /**
     * @param string|null $value
     * @return DpaData
    */
    public function withDpaName(?string $value): DpaData
    {
        $this->dpaName = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->dpaName)) {
            $object->dpaName = $this->dpaName;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): DpaData
    {
        parent::fromObject($object);
        if (property_exists($object, 'dpaName')) {
            $this->dpaName = $object->dpaName;
        }
        return $this;
    }
}
