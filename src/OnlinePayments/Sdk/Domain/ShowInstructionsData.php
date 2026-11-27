<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ShowInstructionsData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $showData = null;

    /**
     * @return string|null
     */
    public function getShowData(): ?string
    {
        return $this->showData;
    }

    /**
     * @param string|null $value
     */
    public function setShowData(?string $value): void
    {
        $this->showData = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withShowData(?string $value): static
    {
        $this->showData = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->showData !== null) {
            $object->showData = $this->showData;
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
        if (property_exists($object, 'showData')) {
            $this->showData = $object->showData;
        }
        return $this;
    }
}
