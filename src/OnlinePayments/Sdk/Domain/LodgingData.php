<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class LodgingData extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $checkInDate = null;

    /**
     * @return string|null
    */
    public function getCheckInDate(): ?string
    {
        return $this->checkInDate;
    }

    /**
     * @param string|null $value
    */
    public function setCheckInDate(?string $value): void
    {
        $this->checkInDate = $value;
    }

    /**
     * @param string|null $value
     * @return LodgingData
    */
    public function withCheckInDate(?string $value): LodgingData
    {
        $this->checkInDate = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->checkInDate)) {
            $object->checkInDate = $this->checkInDate;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): LodgingData
    {
        parent::fromObject($object);
        if (property_exists($object, 'checkInDate')) {
            $this->checkInDate = $object->checkInDate;
        }
        return $this;
    }
}
