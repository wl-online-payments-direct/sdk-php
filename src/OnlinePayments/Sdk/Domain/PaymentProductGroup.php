<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductGroup extends DataObject
{
    /**
     * @var AccountOnFile|null
     */
    public ?AccountOnFile $accountOnFile = null;

    /**
     * @var PaymentProductDisplayHints|null
     */
    public ?PaymentProductDisplayHints $displayHints = null;

    /**
     * @var PaymentProductDisplayHints[]|null
     */
    public ?array $displayHintsList = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @return AccountOnFile|null
     */
    public function getAccountOnFile(): ?AccountOnFile
    {
        return $this->accountOnFile;
    }

    /**
     * @param AccountOnFile|null $value
     */
    public function setAccountOnFile(?AccountOnFile $value): void
    {
        $this->accountOnFile = $value;
    }

    /**
     * @param AccountOnFile|null $value
     * @return $this
     */
    public function withAccountOnFile(?AccountOnFile $value): static
    {
        $this->accountOnFile = $value;
        return $this;
    }

    /**
     * @return PaymentProductDisplayHints|null
     */
    public function getDisplayHints(): ?PaymentProductDisplayHints
    {
        return $this->displayHints;
    }

    /**
     * @param PaymentProductDisplayHints|null $value
     */
    public function setDisplayHints(?PaymentProductDisplayHints $value): void
    {
        $this->displayHints = $value;
    }

    /**
     * @param PaymentProductDisplayHints|null $value
     * @return $this
     */
    public function withDisplayHints(?PaymentProductDisplayHints $value): static
    {
        $this->displayHints = $value;
        return $this;
    }

    /**
     * @return PaymentProductDisplayHints[]|null
     */
    public function getDisplayHintsList(): ?array
    {
        return $this->displayHintsList;
    }

    /**
     * @param PaymentProductDisplayHints[]|null $value
     */
    public function setDisplayHintsList(?array $value): void
    {
        $this->displayHintsList = $value;
    }

    /**
     * @param PaymentProductDisplayHints[]|null $value
     * @return $this
     */
    public function withDisplayHintsList(?array $value): static
    {
        $this->displayHintsList = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $value
     */
    public function setId(?string $value): void
    {
        $this->id = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withId(?string $value): static
    {
        $this->id = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->accountOnFile !== null) {
            $object->accountOnFile = $this->accountOnFile->toObject();
        }
        if ($this->displayHints !== null) {
            $object->displayHints = $this->displayHints->toObject();
        }
        if ($this->displayHintsList !== null) {
            $object->displayHintsList = [];
            foreach ($this->displayHintsList as $element) {
                if ($element !== null) {
                    $object->displayHintsList[] = $element->toObject();
                }
            }
        }
        if ($this->id !== null) {
            $object->id = $this->id;
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
        if (property_exists($object, 'accountOnFile')) {
            if (!is_object($object->accountOnFile)) {
                throw new UnexpectedValueException('value \'' . print_r($object->accountOnFile, true) . '\' is not an object');
            }
            $value = new AccountOnFile();
            $this->accountOnFile = $value->fromObject($object->accountOnFile);
        }
        if (property_exists($object, 'displayHints')) {
            if (!is_object($object->displayHints)) {
                throw new UnexpectedValueException('value \'' . print_r($object->displayHints, true) . '\' is not an object');
            }
            $value = new PaymentProductDisplayHints();
            $this->displayHints = $value->fromObject($object->displayHints);
        }
        if (property_exists($object, 'displayHintsList')) {
            if (!is_array($object->displayHintsList) && !is_object($object->displayHintsList)) {
                throw new UnexpectedValueException('value \'' . print_r($object->displayHintsList, true) . '\' is not an array or object');
            }
            $this->displayHintsList = [];
            foreach ($object->displayHintsList as $element) {
                $value = new PaymentProductDisplayHints();
                $this->displayHintsList[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        return $this;
    }
}
