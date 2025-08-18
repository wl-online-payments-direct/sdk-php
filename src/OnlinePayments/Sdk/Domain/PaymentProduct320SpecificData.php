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
     * @var string|null
     */
    public ?string $gateway = null;

    /**
     * @var string[]|null
     */
    public ?array $networks = null;

    /**
     * @return string|null
     */
    public function getGateway(): ?string
    {
        return $this->gateway;
    }

    /**
     * @param string|null $value
     */
    public function setGateway(?string $value): void
    {
        $this->gateway = $value;
    }

    /**
     * @return string[]|null
     */
    public function getNetworks(): ?array
    {
        return $this->networks;
    }

    /**
     * @param string[]|null $value
     */
    public function setNetworks(?array $value): void
    {
        $this->networks = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): PaymentProduct320SpecificData
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
