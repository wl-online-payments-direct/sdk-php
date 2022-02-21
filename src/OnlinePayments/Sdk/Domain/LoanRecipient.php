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
class LoanRecipient extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $accountNumber;

    /**
     * @var string
     */
    private $dateOfBirth;

    /**
     * @var string
     */
    private $partialPan;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $zip;

    // Methods
    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
        if ($this->accountNumber !== null) {
            $object->accountNumber = $this->accountNumber;
        }
        if ($this->dateOfBirth !== null) {
            $object->dateOfBirth = $this->dateOfBirth;
        }
        if ($this->partialPan !== null) {
            $object->partialPan = $this->partialPan;
        }
        if ($this->surname !== null) {
            $object->surname = $this->surname;
        }
        if ($this->zip !== null) {
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
