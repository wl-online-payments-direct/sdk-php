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
class MerchantAction extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $actionType;

    /**
     * @var RedirectData
     */
    private $redirectData;

    /**
     * @var ShowFormData
     */
    private $showFormData;

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
     * @return RedirectData
     */
    public function getRedirectData()
    {
        return $this->redirectData;
    }
    /**
     * @var RedirectData
     */
    public function setRedirectData($value)
    {
        $this->redirectData = $value;
    }

    /**
     * @return ShowFormData
     */
    public function getShowFormData()
    {
        return $this->showFormData;
    }
    /**
     * @var ShowFormData
     */
    public function setShowFormData($value)
    {
        $this->showFormData = $value;
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
        if ($this->showFormData !== null) {
            $object->showFormData = $this->showFormData->toObject();
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
            $value = new RedirectData();
            $this->redirectData = $value->fromObject($object->redirectData);
        }
        if (property_exists($object, 'showFormData')) {
            if (!is_object($object->showFormData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->showFormData, true) . '\' is not an object');
            }
            $value = new ShowFormData();
            $this->showFormData = $value->fromObject($object->showFormData);
        }
        return $this;
    }
}
