<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class TokenCard extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $alias = null;

    /**
     * @var TokenCardData|null
     */
    public ?TokenCardData $data = null;

    /**
     * @return string|null
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param string|null $value
     */
    public function setAlias(?string $value): void
    {
        $this->alias = $value;
    }

    /**
     * @return TokenCardData|null
     */
    public function getData(): ?TokenCardData
    {
        return $this->data;
    }

    /**
     * @param TokenCardData|null $value
     */
    public function setData(?TokenCardData $value): void
    {
        $this->data = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->alias)) {
            $object->alias = $this->alias;
        }
        if (!is_null($this->data)) {
            $object->data = $this->data->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): TokenCard
    {
        parent::fromObject($object);
        if (property_exists($object, 'alias')) {
            $this->alias = $object->alias;
        }
        if (property_exists($object, 'data')) {
            if (!is_object($object->data)) {
                throw new UnexpectedValueException('value \'' . print_r($object->data, true) . '\' is not an object');
            }
            $value = new TokenCardData();
            $this->data = $value->fromObject($object->data);
        }
        return $this;
    }
}
