<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SendTestRequest extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $value
     */
    public function setUrl(?string $value): void
    {
        $this->url = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withUrl(?string $value): static
    {
        $this->url = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->url !== null) {
            $object->url = $this->url;
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
        if (property_exists($object, 'url')) {
            $this->url = $object->url;
        }
        return $this;
    }
}
