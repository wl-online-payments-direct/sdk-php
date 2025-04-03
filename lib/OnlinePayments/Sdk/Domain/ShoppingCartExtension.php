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
    /**
     * @var string|null
     */
    public $creator = null;

    /**
     * @var string|null
     */
    public $name = null;

    /**
     * @var string|null
     */
    public $version = null;

    /**
     * @var string|null
     */
    public $extensionId = null;

    /**
     * @param string $creator
     * @param string $name
     * @param string $version
     * @param string|null $extensionId
     */
    public function __construct($creator, $name, $version, $extensionId = null)
    {
        $this->creator = $creator;
        $this->name = $name;
        $this->version = $version;
        $this->extensionId = $extensionId;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->creator)) {
            $object->creator = $this->creator;
        }
        if (!is_null($this->name)) {
            $object->name = $this->name;
        }
        if (!is_null($this->version)) {
            $object->version = $this->version;
        }
        if (!is_null($this->extensionId)) {
            $object->extensionId = $this->extensionId;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
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
