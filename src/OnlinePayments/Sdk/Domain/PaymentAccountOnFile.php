<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentAccountOnFile extends DataObject
{
    /**
     * @var string
     */
    public $createDate = null;

    /**
     * @var int
     */
    public $numberOfCardOnFileCreationAttemptsLast24Hours = null;

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @param string
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
     * @param int
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
        if (!is_null($this->createDate)) {
            $object->createDate = $this->createDate;
        }
        if (!is_null($this->numberOfCardOnFileCreationAttemptsLast24Hours)) {
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
