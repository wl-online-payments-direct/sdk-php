<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ThreeDSecureResults extends DataObject
{
    /**
     * @var string
     */
    public $acsTransactionId = null;

    /**
     * @var string
     */
    public $appliedExemption = null;

    /**
     * @var string
     */
    public $authenticationStatus = null;

    /**
     * @var string
     */
    public $cavv = null;

    /**
     * @var string
     */
    public $challengeIndicator = null;

    /**
     * @var string
     */
    public $dsTransactionId = null;

    /**
     * @var string
     */
    public $eci = null;

    /**
     * @var string
     */
    public $exemptionEngineFlow = null;

    /**
     * @var string
     */
    public $flow = null;

    /**
     * @var string
     */
    public $liability = null;

    /**
     * @var string
     */
    public $schemeEci = null;

    /**
     * @var string
     */
    public $version = null;

    /**
     * @var string
     */
    public $xid = null;

    /**
     * @return string
     */
    public function getAcsTransactionId()
    {
        return $this->acsTransactionId;
    }

    /**
     * @param string
     */
    public function setAcsTransactionId($value)
    {
        $this->acsTransactionId = $value;
    }

    /**
     * @return string
     */
    public function getAppliedExemption()
    {
        return $this->appliedExemption;
    }

    /**
     * @param string
     */
    public function setAppliedExemption($value)
    {
        $this->appliedExemption = $value;
    }

    /**
     * @return string
     */
    public function getAuthenticationStatus()
    {
        return $this->authenticationStatus;
    }

    /**
     * @param string
     */
    public function setAuthenticationStatus($value)
    {
        $this->authenticationStatus = $value;
    }

    /**
     * @return string
     */
    public function getCavv()
    {
        return $this->cavv;
    }

    /**
     * @param string
     */
    public function setCavv($value)
    {
        $this->cavv = $value;
    }

    /**
     * @return string
     */
    public function getChallengeIndicator()
    {
        return $this->challengeIndicator;
    }

    /**
     * @param string
     */
    public function setChallengeIndicator($value)
    {
        $this->challengeIndicator = $value;
    }

    /**
     * @return string
     */
    public function getDsTransactionId()
    {
        return $this->dsTransactionId;
    }

    /**
     * @param string
     */
    public function setDsTransactionId($value)
    {
        $this->dsTransactionId = $value;
    }

    /**
     * @return string
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * @param string
     */
    public function setEci($value)
    {
        $this->eci = $value;
    }

    /**
     * @return string
     */
    public function getExemptionEngineFlow()
    {
        return $this->exemptionEngineFlow;
    }

    /**
     * @param string
     */
    public function setExemptionEngineFlow($value)
    {
        $this->exemptionEngineFlow = $value;
    }

    /**
     * @return string
     */
    public function getFlow()
    {
        return $this->flow;
    }

    /**
     * @param string
     */
    public function setFlow($value)
    {
        $this->flow = $value;
    }

    /**
     * @return string
     */
    public function getLiability()
    {
        return $this->liability;
    }

    /**
     * @param string
     */
    public function setLiability($value)
    {
        $this->liability = $value;
    }

    /**
     * @return string
     */
    public function getSchemeEci()
    {
        return $this->schemeEci;
    }

    /**
     * @param string
     */
    public function setSchemeEci($value)
    {
        $this->schemeEci = $value;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string
     */
    public function setVersion($value)
    {
        $this->version = $value;
    }

    /**
     * @return string
     */
    public function getXid()
    {
        return $this->xid;
    }

    /**
     * @param string
     */
    public function setXid($value)
    {
        $this->xid = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->acsTransactionId)) {
            $object->acsTransactionId = $this->acsTransactionId;
        }
        if (!is_null($this->appliedExemption)) {
            $object->appliedExemption = $this->appliedExemption;
        }
        if (!is_null($this->authenticationStatus)) {
            $object->authenticationStatus = $this->authenticationStatus;
        }
        if (!is_null($this->cavv)) {
            $object->cavv = $this->cavv;
        }
        if (!is_null($this->challengeIndicator)) {
            $object->challengeIndicator = $this->challengeIndicator;
        }
        if (!is_null($this->dsTransactionId)) {
            $object->dsTransactionId = $this->dsTransactionId;
        }
        if (!is_null($this->eci)) {
            $object->eci = $this->eci;
        }
        if (!is_null($this->exemptionEngineFlow)) {
            $object->exemptionEngineFlow = $this->exemptionEngineFlow;
        }
        if (!is_null($this->flow)) {
            $object->flow = $this->flow;
        }
        if (!is_null($this->liability)) {
            $object->liability = $this->liability;
        }
        if (!is_null($this->schemeEci)) {
            $object->schemeEci = $this->schemeEci;
        }
        if (!is_null($this->version)) {
            $object->version = $this->version;
        }
        if (!is_null($this->xid)) {
            $object->xid = $this->xid;
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
        if (property_exists($object, 'acsTransactionId')) {
            $this->acsTransactionId = $object->acsTransactionId;
        }
        if (property_exists($object, 'appliedExemption')) {
            $this->appliedExemption = $object->appliedExemption;
        }
        if (property_exists($object, 'authenticationStatus')) {
            $this->authenticationStatus = $object->authenticationStatus;
        }
        if (property_exists($object, 'cavv')) {
            $this->cavv = $object->cavv;
        }
        if (property_exists($object, 'challengeIndicator')) {
            $this->challengeIndicator = $object->challengeIndicator;
        }
        if (property_exists($object, 'dsTransactionId')) {
            $this->dsTransactionId = $object->dsTransactionId;
        }
        if (property_exists($object, 'eci')) {
            $this->eci = $object->eci;
        }
        if (property_exists($object, 'exemptionEngineFlow')) {
            $this->exemptionEngineFlow = $object->exemptionEngineFlow;
        }
        if (property_exists($object, 'flow')) {
            $this->flow = $object->flow;
        }
        if (property_exists($object, 'liability')) {
            $this->liability = $object->liability;
        }
        if (property_exists($object, 'schemeEci')) {
            $this->schemeEci = $object->schemeEci;
        }
        if (property_exists($object, 'version')) {
            $this->version = $object->version;
        }
        if (property_exists($object, 'xid')) {
            $this->xid = $object->xid;
        }
        return $this;
    }
}
