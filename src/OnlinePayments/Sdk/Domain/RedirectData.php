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
class RedirectData extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $RETURNMAC;

    /**
     * @var string
     */
    private $redirectURL;

    // Methods
    /**
     * @return string
     */
    public function getRETURNMAC()
    {
        return $this->RETURNMAC;
    }
    /**
     * @var string
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
     * @var string
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
        if ($this->RETURNMAC !== null) {
            $object->RETURNMAC = $this->RETURNMAC;
        }
        if ($this->redirectURL !== null) {
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
