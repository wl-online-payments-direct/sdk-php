<?php

namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * Class ShoppingCartExtension
 *
 * @package OnlinePayments\Sdk\Domain
 */
class ShoppingCartExtension extends DataObject
{
    /** @var string|null */
    public ?string $creator = null;

    /** @var string|null */
    public ?string $name = null;

    /** @var string|null */
    public ?string $version = null;

    /** @var string|null */
    public ?string $extensionId = null;

    /**
     * @param string $creator
     * @param string $name
     * @param string $version
     * @param string|null $extensionId
     */
    public function __construct(string $creator, string $name, string $version, ?string $extensionId = null)
    {
        $this->creator = $creator;
        $this->name = $name;
        $this->version = $version;
        $this->extensionId = $extensionId;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->creator !== null) {
            $object->creator = $this->creator;
        }
        if ($this->name !== null) {
            $object->name = $this->name;
        }
        if ($this->version !== null) {
            $object->version = $this->version;
        }
        if ($this->extensionId !== null) {
            $object->extensionId = $this->extensionId;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'creator')) {
            $this->creator = $object->creator;
        }
        if (property_exists($object, 'name')) {
            $this->name = $object->name;
        }
        if (property_exists($object, 'version')) {
            $this->version = $object->version;
        }
        if (property_exists($object, 'extensionId')) {
            $this->extensionId = $object->extensionId;
        }
        return $this;
    }
}
