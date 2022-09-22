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
class ThreeDSecureResults extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $acsTransactionId;

    /**
     * @var string
     */
    private $appliedExemption;

    /**
     * @var string
     */
    private $authenticationStatus;

    /**
     * @var string
     */
    private $cavv;

    /**
     * @var string
     */
    private $challengeIndicator;

    /**
     * @var string
     */
    private $dsTransactionId;

    /**
     * @var string
     */
    private $eci;

    /**
     * @var string
     */
    private $exemptionEngineFlow;

    /**
     * @var string
     */
    private $flow;

    /**
     * @var string
     */
    private $liability;

    /**
     * @var string
     */
    private $schemeEci;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $xid;

    // Methods
    /**
     * @return string
     */
    public function getAcsTransactionId()
    {
        return $this->acsTransactionId;
    }
    /**
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
        if ($this->acsTransactionId !== null) {
            $object->acsTransactionId = $this->acsTransactionId;
        }
        if ($this->appliedExemption !== null) {
            $object->appliedExemption = $this->appliedExemption;
        }
        if ($this->authenticationStatus !== null) {
            $object->authenticationStatus = $this->authenticationStatus;
        }
        if ($this->cavv !== null) {
            $object->cavv = $this->cavv;
        }
        if ($this->challengeIndicator !== null) {
            $object->challengeIndicator = $this->challengeIndicator;
        }
        if ($this->dsTransactionId !== null) {
            $object->dsTransactionId = $this->dsTransactionId;
        }
        if ($this->eci !== null) {
            $object->eci = $this->eci;
        }
        if ($this->exemptionEngineFlow !== null) {
            $object->exemptionEngineFlow = $this->exemptionEngineFlow;
        }
        if ($this->flow !== null) {
            $object->flow = $this->flow;
        }
        if ($this->liability !== null) {
            $object->liability = $this->liability;
        }
        if ($this->schemeEci !== null) {
            $object->schemeEci = $this->schemeEci;
        }
        if ($this->version !== null) {
            $object->version = $this->version;
        }
        if ($this->xid !== null) {
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
