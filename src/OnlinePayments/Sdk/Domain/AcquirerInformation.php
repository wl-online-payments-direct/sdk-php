<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AcquirerInformation extends DataObject
{
    /**
     * @var AcquirerSelectionInformation|null
     */
    public ?AcquirerSelectionInformation $acquirerSelectionInformation = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @return AcquirerSelectionInformation|null
     */
    public function getAcquirerSelectionInformation(): ?AcquirerSelectionInformation
    {
        return $this->acquirerSelectionInformation;
    }

    /**
     * @param AcquirerSelectionInformation|null $value
     */
    public function setAcquirerSelectionInformation(?AcquirerSelectionInformation $value): void
    {
        $this->acquirerSelectionInformation = $value;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $value
     */
    public function setName(?string $value): void
    {
        $this->name = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->acquirerSelectionInformation)) {
            $object->acquirerSelectionInformation = $this->acquirerSelectionInformation->toObject();
        }
        if (!is_null($this->name)) {
            $object->name = $this->name;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): AcquirerInformation
    {
        parent::fromObject($object);
        if (property_exists($object, 'acquirerSelectionInformation')) {
            if (!is_object($object->acquirerSelectionInformation)) {
                throw new UnexpectedValueException('value \'' . print_r($object->acquirerSelectionInformation, true) . '\' is not an object');
            }
            $value = new AcquirerSelectionInformation();
            $this->acquirerSelectionInformation = $value->fromObject($object->acquirerSelectionInformation);
        }
        if (property_exists($object, 'name')) {
            $this->name = $object->name;
        }
        return $this;
    }
}
