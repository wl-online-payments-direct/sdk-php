<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference/index.html
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
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
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        return $this;
    }
}
