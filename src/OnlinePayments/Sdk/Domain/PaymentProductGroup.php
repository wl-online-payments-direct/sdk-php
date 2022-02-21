<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductGroup extends DataObject
{
    // Properties
    /**
     * @var AccountOnFile
     */
    private $accountOnFile;

    /**
     * @var PaymentProductDisplayHints
     */
    private $displayHints;

    /**
     * @var PaymentProductDisplayHints[]
     */
    private $displayHintsList;

    /**
     * @var string
     */
    private $id;

    // Methods
    /**
     * @return AccountOnFile
     */
    public function getAccountOnFile()
    {
        return $this->accountOnFile;
    }
    /**
     * @var AccountOnFile
     */
    public function setAccountOnFile($value)
    {
        $this->accountOnFile = $value;
    }

    /**
     * @return PaymentProductDisplayHints
     */
    public function getDisplayHints()
    {
        return $this->displayHints;
    }
    /**
     * @var PaymentProductDisplayHints
     */
    public function setDisplayHints($value)
    {
        $this->displayHints = $value;
    }

    /**
     * @return PaymentProductDisplayHints[]
     */
    public function getDisplayHintsList()
    {
        return $this->displayHintsList;
    }
    /**
     * @var PaymentProductDisplayHints[]
     */
    public function setDisplayHintsList($value)
    {
        $this->displayHintsList = $value;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    public function setId($value)
    {
        $this->id = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
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
