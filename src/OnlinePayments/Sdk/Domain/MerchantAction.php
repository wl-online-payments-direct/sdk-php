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
     * @var string|null
     */
    public ?string $actionType = null;

    /**
     * @var MobileThreeDSecureChallengeParameters|null
     */
    public ?MobileThreeDSecureChallengeParameters $mobileThreeDSecureChallengeParameters = null;

    /**
     * @var RedirectData|null
     */
    public ?RedirectData $redirectData = null;

    /**
     * @var ShowFormData|null
     */
    public ?ShowFormData $showFormData = null;

    /**
     * @var ShowInstructionsData|null
     */
    public ?ShowInstructionsData $showInstructionsData = null;

    /**
     * @return string|null
     */
    public function getActionType(): ?string
    {
        return $this->actionType;
    }

    /**
     * @param string|null $value
     */
    public function setActionType(?string $value): void
    {
        $this->actionType = $value;
    }

    /**
     * @return MobileThreeDSecureChallengeParameters|null
     */
    public function getMobileThreeDSecureChallengeParameters(): ?MobileThreeDSecureChallengeParameters
    {
        return $this->mobileThreeDSecureChallengeParameters;
    }

    /**
     * @param MobileThreeDSecureChallengeParameters|null $value
     */
    public function setMobileThreeDSecureChallengeParameters(?MobileThreeDSecureChallengeParameters $value): void
    {
        $this->mobileThreeDSecureChallengeParameters = $value;
    }

    /**
     * @return RedirectData|null
     */
    public function getRedirectData(): ?RedirectData
    {
        return $this->redirectData;
    }

    /**
     * @param RedirectData|null $value
     */
    public function setRedirectData(?RedirectData $value): void
    {
        $this->redirectData = $value;
    }

    /**
     * @return ShowFormData|null
     */
    public function getShowFormData(): ?ShowFormData
    {
        return $this->showFormData;
    }

    /**
     * @param ShowFormData|null $value
     */
    public function setShowFormData(?ShowFormData $value): void
    {
        $this->showFormData = $value;
    }

    /**
     * @return ShowInstructionsData|null
     */
    public function getShowInstructionsData(): ?ShowInstructionsData
    {
        return $this->showInstructionsData;
    }

    /**
     * @param ShowInstructionsData|null $value
     */
    public function setShowInstructionsData(?ShowInstructionsData $value): void
    {
        $this->showInstructionsData = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): MerchantAction
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
