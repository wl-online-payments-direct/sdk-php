<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CustomerBankAccount extends DataObject
{
    /**
     * @var string
     */
    public $accountHolderName = null;

    /**
     * @var string
     */
    public $bic = null;

    /**
     * @var string
     */
    public $iban = null;

    /**
     * @return string
     */
    public function getAccountHolderName()
    {
        return $this->accountHolderName;
    }

    /**
     * @param string
     */
    public function setAccountHolderName($value)
    {
        $this->accountHolderName = $value;
    }

    /**
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @param string
     */
    public function setBic($value)
    {
        $this->bic = $value;
    }

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param string
     */
    public function setIban($value)
    {
        $this->iban = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->accountHolderName)) {
            $object->accountHolderName = $this->accountHolderName;
        }
        if (!is_null($this->bic)) {
            $object->bic = $this->bic;
        }
        if (!is_null($this->iban)) {
            $object->iban = $this->iban;
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
        if (property_exists($object, 'accountHolderName')) {
            $this->accountHolderName = $object->accountHolderName;
        }
        if (property_exists($object, 'bic')) {
            $this->bic = $object->bic;
        }
        if (property_exists($object, 'iban')) {
            $this->iban = $object->iban;
        }
        return $this;
    }
}
