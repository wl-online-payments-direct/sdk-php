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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->accountOnFile)) {
            $object->accountOnFile = $this->accountOnFile->toObject();
        }
        if (!is_null($this->displayHints)) {
            $object->displayHints = $this->displayHints->toObject();
        }
        if (!is_null($this->displayHintsList)) {
            $object->displayHintsList = [];
            foreach ($this->displayHintsList as $element) {
                if (!is_null($element)) {
                    $object->displayHintsList[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProductGroup
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
