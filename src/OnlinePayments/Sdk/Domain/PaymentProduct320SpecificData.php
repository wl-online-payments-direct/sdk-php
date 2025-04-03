<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct320SpecificData extends DataObject
{
    /**
     * @var string
     */
    public $gateway = null;

    /**
     * @var string[]
     */
    public $networks = null;

    /**
     * @return string
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * @param string
     */
    public function setGateway($value)
    {
        $this->gateway = $value;
    }

    /**
     * @return string[]
     */
    public function getNetworks()
    {
        return $this->networks;
    }

    /**
     * @param string[]
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
        if (!is_null($this->gateway)) {
            $object->gateway = $this->gateway;
        }
        if (!is_null($this->networks)) {
            $object->networks = [];
            foreach ($this->networks as $element) {
                if (!is_null($element)) {
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
        if (property_exists($object, 'gateway')) {
            $this->gateway = $object->gateway;
        }
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
