<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MandateRedirectData extends DataObject
{
    /**
     * @var string
     */
    public $RETURNMAC = null;

    /**
     * @var string
     */
    public $redirectURL = null;

    /**
     * @return string
     */
    public function getRETURNMAC()
    {
        return $this->RETURNMAC;
    }

    /**
     * @param string
     */
    public function setRETURNMAC($value)
    {
        $this->RETURNMAC = $value;
    }

    /**
     * @return string
     */
    public function getRedirectURL()
    {
        return $this->redirectURL;
    }

    /**
     * @param string
     */
    public function setRedirectURL($value)
    {
        $this->redirectURL = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->RETURNMAC)) {
            $object->RETURNMAC = $this->RETURNMAC;
        }
        if (!is_null($this->redirectURL)) {
            $object->redirectURL = $this->redirectURL;
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
        if (property_exists($object, 'RETURNMAC')) {
            $this->RETURNMAC = $object->RETURNMAC;
        }
        if (property_exists($object, 'redirectURL')) {
            $this->redirectURL = $object->redirectURL;
        }
        return $this;
    }
}
