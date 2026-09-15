<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class DpaTransactionOptions extends DataObject
{
    /**
     * @var ThreeDsInputData|null
     */
    public ?ThreeDsInputData $threeDsInputData = null;

    /**
     * @return ThreeDsInputData|null
     */
    public function getThreeDsInputData(): ?ThreeDsInputData
    {
        return $this->threeDsInputData;
    }

    /**
     * @param ThreeDsInputData|null $value
     */
    public function setThreeDsInputData(?ThreeDsInputData $value): void
    {
        $this->threeDsInputData = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->threeDsInputData)) {
            $object->threeDsInputData = $this->threeDsInputData->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): DpaTransactionOptions
    {
        parent::fromObject($object);
        if (property_exists($object, 'threeDsInputData')) {
            if (!is_object($object->threeDsInputData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->threeDsInputData, true) . '\' is not an object');
            }
            $value = new ThreeDsInputData();
            $this->threeDsInputData = $value->fromObject($object->threeDsInputData);
        }
        return $this;
    }
}
