<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RegularExpressionValidator extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $regularExpression = null;

    /**
     * @return string|null
     */
    public function getRegularExpression(): ?string
    {
        return $this->regularExpression;
    }

    /**
     * @param string|null $value
     */
    public function setRegularExpression(?string $value): void
    {
        $this->regularExpression = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withRegularExpression(?string $value): static
    {
        $this->regularExpression = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->regularExpression !== null) {
            $object->regularExpression = $this->regularExpression;
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
        if (property_exists($object, 'regularExpression')) {
            $this->regularExpression = $object->regularExpression;
        }
        return $this;
    }
}
