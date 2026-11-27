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
     * @param string|null $value
     * @return $this
     */
    public function withGateway(?string $value): static
    {
        $this->gateway = $value;
        return $this;
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
     * @param string[]|null $value
     * @return $this
     */
    public function withNetworks(?array $value): static
    {
        $this->networks = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->gateway !== null) {
            $object->gateway = $this->gateway;
        }
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
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
