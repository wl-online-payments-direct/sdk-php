<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MerchantAction extends DataObject
{
    /**
     * @var string
     */
    public $actionType = null;

    /**
     * @var MobileThreeDSecureChallengeParameters
     */
    public $mobileThreeDSecureChallengeParameters = null;

    /**
     * @var RedirectData
     */
    public $redirectData = null;

    /**
     * @var ShowFormData
     */
    public $showFormData = null;

    /**
     * @var ShowInstructionsData
     */
    public $showInstructionsData = null;

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
     * @return MobileThreeDSecureChallengeParameters
     */
    public function getMobileThreeDSecureChallengeParameters()
    {
        return $this->mobileThreeDSecureChallengeParameters;
    }

    /**
     * @param MobileThreeDSecureChallengeParameters
     */
    public function setMobileThreeDSecureChallengeParameters($value)
    {
        $this->mobileThreeDSecureChallengeParameters = $value;
    }

    /**
     * @return RedirectData
     */
    public function getRedirectData()
    {
        return $this->redirectData;
    }

    /**
     * @param RedirectData
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
     * @param ShowFormData
     */
    public function setShowFormData($value)
    {
        $this->showFormData = $value;
    }

    /**
     * @return ShowInstructionsData
     */
    public function getShowInstructionsData()
    {
        return $this->showInstructionsData;
    }

    /**
     * @param ShowInstructionsData
     */
    public function setShowInstructionsData($value)
    {
        $this->showInstructionsData = $value;
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
        if (!is_null($this->mobileThreeDSecureChallengeParameters)) {
            $object->mobileThreeDSecureChallengeParameters = $this->mobileThreeDSecureChallengeParameters->toObject();
        }
        if (!is_null($this->redirectData)) {
            $object->redirectData = $this->redirectData->toObject();
        }
        if (!is_null($this->showFormData)) {
            $object->showFormData = $this->showFormData->toObject();
        }
        if (!is_null($this->showInstructionsData)) {
            $object->showInstructionsData = $this->showInstructionsData->toObject();
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
        if (property_exists($object, 'mobileThreeDSecureChallengeParameters')) {
            if (!is_object($object->mobileThreeDSecureChallengeParameters)) {
                throw new UnexpectedValueException('value \'' . print_r($object->mobileThreeDSecureChallengeParameters, true) . '\' is not an object');
            }
            $value = new MobileThreeDSecureChallengeParameters();
            $this->mobileThreeDSecureChallengeParameters = $value->fromObject($object->mobileThreeDSecureChallengeParameters);
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
        if (property_exists($object, 'showInstructionsData')) {
            if (!is_object($object->showInstructionsData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->showInstructionsData, true) . '\' is not an object');
            }
            $value = new ShowInstructionsData();
            $this->showInstructionsData = $value->fromObject($object->showInstructionsData);
        }
        return $this;
    }
}
