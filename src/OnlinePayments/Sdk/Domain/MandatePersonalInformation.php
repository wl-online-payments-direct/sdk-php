<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MandatePersonalInformation extends DataObject
{
    /**
     * @var MandatePersonalName|null
     */
    public ?MandatePersonalName $name = null;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @return MandatePersonalName|null
     */
    public function getName(): ?MandatePersonalName
    {
        return $this->name;
    }

    /**
     * @param MandatePersonalName|null $value
     */
    public function setName(?MandatePersonalName $value): void
    {
        $this->name = $value;
    }

    /**
     * @param MandatePersonalName|null $value
     * @return $this
     */
    public function withName(?MandatePersonalName $value): static
    {
        $this->name = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $value
     */
    public function setTitle(?string $value): void
    {
        $this->title = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withTitle(?string $value): static
    {
        $this->title = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->name !== null) {
            $object->name = $this->name->toObject();
        }
        if ($this->title !== null) {
            $object->title = $this->title;
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
        if (property_exists($object, 'name')) {
            if (!is_object($object->name)) {
                throw new UnexpectedValueException('value \'' . print_r($object->name, true) . '\' is not an object');
            }
            $value = new MandatePersonalName();
            $this->name = $value->fromObject($object->name);
        }
        if (property_exists($object, 'title')) {
            $this->title = $object->title;
        }
        return $this;
    }
}
