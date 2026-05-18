<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MobilePaymentMethodSpecificOutput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $authorisationCode = null;

    /**
     * @var CardFraudResults|null
     */
    public ?CardFraudResults $fraudResults = null;

    /**
     * @var string|null
     */
    public ?string $network = null;

    /**
     * @var MobilePaymentData|null
     */
    public ?MobilePaymentData $paymentData = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @var ThreeDSecureResults|null
     */
    public ?ThreeDSecureResults $threeDSecureResults = null;

    /**
     * @return string|null
     */
    public function getAuthorisationCode(): ?string
    {
        return $this->authorisationCode;
    }

    /**
     * @param string|null $value
     */
    public function setAuthorisationCode(?string $value): void
    {
        $this->authorisationCode = $value;
    }

    /**
     * @return CardFraudResults|null
     */
    public function getFraudResults(): ?CardFraudResults
    {
        return $this->fraudResults;
    }

    /**
     * @param CardFraudResults|null $value
     */
    public function setFraudResults(?CardFraudResults $value): void
    {
        $this->fraudResults = $value;
    }

    /**
     * @return string|null
     */
    public function getNetwork(): ?string
    {
        return $this->network;
    }

    /**
     * @param string|null $value
     */
    public function setNetwork(?string $value): void
    {
        $this->network = $value;
    }

    /**
     * @return MobilePaymentData|null
     */
    public function getPaymentData(): ?MobilePaymentData
    {
        return $this->paymentData;
    }

    /**
     * @param MobilePaymentData|null $value
     */
    public function setPaymentData(?MobilePaymentData $value): void
    {
        $this->paymentData = $value;
    }

    /**
     * @return int|null
     */
    public function getPaymentProductId(): ?int
    {
        return $this->paymentProductId;
    }

    /**
     * @param int|null $value
     */
    public function setPaymentProductId(?int $value): void
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return ThreeDSecureResults|null
     */
    public function getThreeDSecureResults(): ?ThreeDSecureResults
    {
        return $this->threeDSecureResults;
    }

    /**
     * @param ThreeDSecureResults|null $value
     */
    public function setThreeDSecureResults(?ThreeDSecureResults $value): void
    {
        $this->threeDSecureResults = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->authorisationCode)) {
            $object->authorisationCode = $this->authorisationCode;
        }
        if (!is_null($this->fraudResults)) {
            $object->fraudResults = $this->fraudResults->toObject();
        }
        if (!is_null($this->network)) {
            $object->network = $this->network;
        }
        if (!is_null($this->paymentData)) {
            $object->paymentData = $this->paymentData->toObject();
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if (!is_null($this->threeDSecureResults)) {
            $object->threeDSecureResults = $this->threeDSecureResults->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): MobilePaymentMethodSpecificOutput
    {
        parent::fromObject($object);
        if (property_exists($object, 'authorisationCode')) {
            $this->authorisationCode = $object->authorisationCode;
        }
        if (property_exists($object, 'fraudResults')) {
            if (!is_object($object->fraudResults)) {
                throw new UnexpectedValueException('value \'' . print_r($object->fraudResults, true) . '\' is not an object');
            }
            $value = new CardFraudResults();
            $this->fraudResults = $value->fromObject($object->fraudResults);
        }
        if (property_exists($object, 'network')) {
            $this->network = $object->network;
        }
        if (property_exists($object, 'paymentData')) {
            if (!is_object($object->paymentData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentData, true) . '\' is not an object');
            }
            $value = new MobilePaymentData();
            $this->paymentData = $value->fromObject($object->paymentData);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'threeDSecureResults')) {
            if (!is_object($object->threeDSecureResults)) {
                throw new UnexpectedValueException('value \'' . print_r($object->threeDSecureResults, true) . '\' is not an object');
            }
            $value = new ThreeDSecureResults();
            $this->threeDSecureResults = $value->fromObject($object->threeDSecureResults);
        }
        return $this;
    }
}
