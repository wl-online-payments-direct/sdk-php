<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class LoanRecipient extends DataObject
{
    /**
     * @var string
     */
    public $accountNumber = null;

    /**
     * @var string
     */
    public $dateOfBirth = null;

    /**
     * @var string
     */
    public $partialPan = null;

    /**
     * @var string
     */
    public $surname = null;

    /**
     * @var string
     */
    public $zip = null;

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param string
     */
    public function setAccountNumber($value)
    {
        $this->accountNumber = $value;
    }

    /**
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param string
     */
    public function setDateOfBirth($value)
    {
        $this->dateOfBirth = $value;
    }

    /**
     * @return string
     */
    public function getPartialPan()
    {
        return $this->partialPan;
    }

    /**
     * @param string
     */
    public function setPartialPan($value)
    {
        $this->partialPan = $value;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string
     */
    public function setSurname($value)
    {
        $this->surname = $value;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string
     */
    public function setZip($value)
    {
        $this->zip = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->accountNumber)) {
            $object->accountNumber = $this->accountNumber;
        }
        if (!is_null($this->dateOfBirth)) {
            $object->dateOfBirth = $this->dateOfBirth;
        }
        if (!is_null($this->partialPan)) {
            $object->partialPan = $this->partialPan;
        }
        if (!is_null($this->surname)) {
            $object->surname = $this->surname;
        }
        if (!is_null($this->zip)) {
            $object->zip = $this->zip;
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
        if (property_exists($object, 'accountNumber')) {
            $this->accountNumber = $object->accountNumber;
        }
        if (property_exists($object, 'dateOfBirth')) {
            $this->dateOfBirth = $object->dateOfBirth;
        }
        if (property_exists($object, 'partialPan')) {
            $this->partialPan = $object->partialPan;
        }
        if (property_exists($object, 'surname')) {
            $this->surname = $object->surname;
        }
        if (property_exists($object, 'zip')) {
            $this->zip = $object->zip;
        }
        return $this;
    }
}
