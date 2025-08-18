<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class OtherDetails extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $metaData = null;

    /**
     * @var string|null
     */
    public ?string $travelData = null;

    /**
     * @return string|null
     */
    public function getMetaData(): ?string
    {
        return $this->metaData;
    }

    /**
     * @param string|null $value
     */
    public function setMetaData(?string $value): void
    {
        $this->metaData = $value;
    }

    /**
     * @return string|null
     */
    public function getTravelData(): ?string
    {
        return $this->travelData;
    }

    /**
     * @param string|null $value
     */
    public function setTravelData(?string $value): void
    {
        $this->travelData = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->metaData)) {
            $object->metaData = $this->metaData;
        }
        if (!is_null($this->travelData)) {
            $object->travelData = $this->travelData;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): OtherDetails
    {
        parent::fromObject($object);
        if (property_exists($object, 'metaData')) {
            $this->metaData = $object->metaData;
        }
        if (property_exists($object, 'travelData')) {
            $this->travelData = $object->travelData;
        }
        return $this;
    }
}
