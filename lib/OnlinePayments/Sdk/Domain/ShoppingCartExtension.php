<?php

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * Class ShoppingCartExtension
 *
 * @package OnlinePayments\Sdk\Domain\MetaData
 */
class ShoppingCartExtension extends DataObject
{
    /**
     * @var string
     */
    private $creator = null;

    /**
     * @var string
     */
    private $name = null;

    /**
     * @var string
     */
    private $version = null;

    /**
     * @var string
     */
    private $extensionId = null;

    public function __construct($creator, $name, $version, $extensionId = null)
    {
        $this->creator = $creator;
        $this->name = $name;
        $this->version = $version;
        $this->extensionId = $extensionId;
    }

    /**
     * @return string
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param string $creator
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getExtensionId()
    {
        return $this->extensionId;
    }

    /**
     * @param string $extensionId
     */
    public function setExtensionId($extensionId)
    {
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
