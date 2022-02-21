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
class MandateMerchantAction extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $actionType;

    /**
     * @var MandateRedirectData
     */
    private $redirectData;

    // Methods
    /**
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }
    /**
     * @var string
     */
    public function setActionType($value)
    {
        $this->actionType = $value;
    }

    /**
     * @return MandateRedirectData
     */
    public function getRedirectData()
    {
        return $this->redirectData;
    }
    /**
     * @var MandateRedirectData
     */
    public function setRedirectData($value)
    {
        $this->redirectData = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->actionType !== null) {
            $object->actionType = $this->actionType;
        }
        if ($this->redirectData !== null) {
            $object->redirectData = $this->redirectData->toObject();
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
        if (property_exists($object, 'actionType')) {
            $this->actionType = $object->actionType;
        }
        if (property_exists($object, 'redirectData')) {
            if (!is_object($object->redirectData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->redirectData, true) . '\' is not an object');
            }
            $value = new MandateRedirectData();
            $this->redirectData = $value->fromObject($object->redirectData);
        }
        return $this;
    }
}
