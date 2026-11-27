<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PersonalName extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $firstName = null;

    /**
     * @var string|null
     */
    public ?string $surname = null;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $value
     */
    public function setFirstName(?string $value): void
    {
        $this->firstName = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withFirstName(?string $value): static
    {
        $this->firstName = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * @param string|null $value
     */
    public function setSurname(?string $value): void
    {
        $this->surname = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSurname(?string $value): static
    {
        $this->surname = $value;
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
        if ($this->firstName !== null) {
            $object->firstName = $this->firstName;
        }
        if ($this->surname !== null) {
            $object->surname = $this->surname;
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
        if (property_exists($object, 'firstName')) {
            $this->firstName = $object->firstName;
        }
        if (property_exists($object, 'surname')) {
            $this->surname = $object->surname;
        }
        if (property_exists($object, 'title')) {
            $this->title = $object->title;
        }
        return $this;
    }
}
