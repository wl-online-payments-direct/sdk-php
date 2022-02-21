<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CapturesResponse extends DataObject
{
    // Properties
    /**
     * @var Capture[]
     */
    private $captures;

    // Methods
    /**
     * @return Capture[]
     */
    public function getCaptures()
    {
        return $this->captures;
    }
    /**
     * @var Capture[]
     */
    public function setCaptures($value)
    {
        $this->captures = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->captures !== null) {
            $object->captures = [];
            foreach ($this->captures as $element) {
                if ($element !== null) {
                    $object->captures[] = $element->toObject();
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
        if (property_exists($object, 'captures')) {
            if (!is_array($object->captures) && !is_object($object->captures)) {
                throw new UnexpectedValueException('value \'' . print_r($object->captures, true) . '\' is not an array or object');
            }
            $this->captures = [];
            foreach ($object->captures as $element) {
                $value = new Capture();
                $this->captures[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
