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
     * @param AcquirerSelectionInformation|null $value
     * @return $this
     */
    public function withAcquirerSelectionInformation(?AcquirerSelectionInformation $value): static
    {
        $this->acquirerSelectionInformation = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withName(?string $value): static
    {
        $this->name = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->acquirerSelectionInformation !== null) {
            $object->acquirerSelectionInformation = $this->acquirerSelectionInformation->toObject();
        }
        if ($this->name !== null) {
            $object->name = $this->name;
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
