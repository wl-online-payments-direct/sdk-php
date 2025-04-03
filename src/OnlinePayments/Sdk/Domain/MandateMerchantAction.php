<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MandateMerchantAction extends DataObject
{
    /**
     * @var string
     */
    public $actionType = null;

    /**
     * @var MandateRedirectData
     */
    public $redirectData = null;

    /**
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * @param string
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
     * @param MandateRedirectData
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
        if (!is_null($this->actionType)) {
            $object->actionType = $this->actionType;
        }
        if (!is_null($this->redirectData)) {
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
