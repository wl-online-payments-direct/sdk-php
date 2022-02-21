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
class PaymentProductNetworksResponse extends DataObject
{
    // Properties
    /**
     * @var string[]
     */
    private $networks;

    // Methods
    /**
     * @return string[]
     */
    public function getNetworks()
    {
        return $this->networks;
    }
    /**
     * @var string[]
     */
    public function setNetworks($value)
    {
        $this->networks = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->networks !== null) {
            $object->networks = [];
            foreach ($this->networks as $element) {
                if ($element !== null) {
                    $object->networks[] = $element;
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
        if (property_exists($object, 'networks')) {
            if (!is_array($object->networks) && !is_object($object->networks)) {
                throw new UnexpectedValueException('value \'' . print_r($object->networks, true) . '\' is not an array or object');
            }
            $this->networks = [];
            foreach ($object->networks as $element) {
                $this->networks[] = $element;
            }
        }
        return $this;
    }
}
