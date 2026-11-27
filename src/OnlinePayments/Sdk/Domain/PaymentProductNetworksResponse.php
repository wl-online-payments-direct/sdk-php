<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductNetworksResponse extends DataObject
{
    /**
     * @var string[]|null
     */
    public ?array $networks = null;

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
