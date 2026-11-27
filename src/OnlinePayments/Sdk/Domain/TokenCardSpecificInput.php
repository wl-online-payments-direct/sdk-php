<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class TokenCardSpecificInput extends DataObject
{
    /**
     * @var TokenData|null
     */
    public ?TokenData $data = null;

    /**
     * @return TokenData|null
     */
    public function getData(): ?TokenData
    {
        return $this->data;
    }

    /**
     * @param TokenData|null $value
     */
    public function setData(?TokenData $value): void
    {
        $this->data = $value;
    }

    /**
     * @param TokenData|null $value
     * @return $this
     */
    public function withData(?TokenData $value): static
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->data !== null) {
            $object->data = $this->data->toObject();
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
        if (property_exists($object, 'data')) {
            if (!is_object($object->data)) {
                throw new UnexpectedValueException('value \'' . print_r($object->data, true) . '\' is not an object');
            }
            $value = new TokenData();
            $this->data = $value->fromObject($object->data);
        }
        return $this;
    }
}
