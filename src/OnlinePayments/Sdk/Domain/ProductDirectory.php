<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ProductDirectory extends DataObject
{
    /**
     * @var DirectoryEntry[]
     */
    public $entries = null;

    /**
     * @return DirectoryEntry[]
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * @param DirectoryEntry[]
     */
    public function setEntries($value)
    {
        $this->entries = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->entries)) {
            $object->entries = [];
            foreach ($this->entries as $element) {
                if (!is_null($element)) {
                    $object->entries[] = $element->toObject();
                }
            }
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
        if (property_exists($object, 'entries')) {
            if (!is_array($object->entries) && !is_object($object->entries)) {
                throw new UnexpectedValueException('value \'' . print_r($object->entries, true) . '\' is not an array or object');
            }
            $this->entries = [];
            foreach ($object->entries as $element) {
                $value = new DirectoryEntry();
                $this->entries[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
