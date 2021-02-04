<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
 */
class PaymentAccountOnFile extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $createDate;

    /**
     * @var int
     */
    private $numberOfCardOnFileCreationAttemptsLast24Hours;

    // Methods
    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
    /**
     * @var string
     */
    public function setCreateDate($value)
    {
        $this->createDate = $value;
    }

    /**
     * @return int
     */
    public function getNumberOfCardOnFileCreationAttemptsLast24Hours()
    {
        return $this->numberOfCardOnFileCreationAttemptsLast24Hours;
    }
    /**
     * @var int
     */
    public function setNumberOfCardOnFileCreationAttemptsLast24Hours($value)
    {
        $this->numberOfCardOnFileCreationAttemptsLast24Hours = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->createDate !== null) {
            $object->createDate = $this->createDate;
        }
        if ($this->numberOfCardOnFileCreationAttemptsLast24Hours !== null) {
            $object->numberOfCardOnFileCreationAttemptsLast24Hours = $this->numberOfCardOnFileCreationAttemptsLast24Hours;
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
        if (property_exists($object, 'createDate')) {
            $this->createDate = $object->createDate;
        }
        if (property_exists($object, 'numberOfCardOnFileCreationAttemptsLast24Hours')) {
            $this->numberOfCardOnFileCreationAttemptsLast24Hours = $object->numberOfCardOnFileCreationAttemptsLast24Hours;
        }
        return $this;
    }
}
