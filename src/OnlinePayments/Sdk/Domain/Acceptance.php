<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use DateTime;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Acceptance extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $acceptanceSystemApplicationId = null;

    /**
     * @var DateTime|null
    */
    public ?DateTime $authorizationDate = null;

    /**
     * @var string|null
    */
    public ?string $authorizationMessageReference = null;

    /**
     * @return string|null
    */
    public function getAcceptanceSystemApplicationId(): ?string
    {
        return $this->acceptanceSystemApplicationId;
    }

    /**
     * @param string|null $value
    */
    public function setAcceptanceSystemApplicationId(?string $value): void
    {
        $this->acceptanceSystemApplicationId = $value;
    }

    /**
     * @param string|null $value
     * @return Acceptance
    */
    public function withAcceptanceSystemApplicationId(?string $value): Acceptance
    {
        $this->acceptanceSystemApplicationId = $value;
        return $this;
    }

    /**
     * @return DateTime|null
    */
    public function getAuthorizationDate(): ?DateTime
    {
        return $this->authorizationDate;
    }

    /**
     * @param DateTime|null $value
    */
    public function setAuthorizationDate(?DateTime $value): void
    {
        $this->authorizationDate = $value;
    }

    /**
     * @param DateTime|null $value
     * @return Acceptance
    */
    public function withAuthorizationDate(?DateTime $value): Acceptance
    {
        $this->authorizationDate = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getAuthorizationMessageReference(): ?string
    {
        return $this->authorizationMessageReference;
    }

    /**
     * @param string|null $value
    */
    public function setAuthorizationMessageReference(?string $value): void
    {
        $this->authorizationMessageReference = $value;
    }

    /**
     * @param string|null $value
     * @return Acceptance
    */
    public function withAuthorizationMessageReference(?string $value): Acceptance
    {
        $this->authorizationMessageReference = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->acceptanceSystemApplicationId)) {
            $object->acceptanceSystemApplicationId = $this->acceptanceSystemApplicationId;
        }
        if (!is_null($this->authorizationDate)) {
            $object->authorizationDate = $this->authorizationDate->format('Y-m-d\\TH:i:s.vP');
        }
        if (!is_null($this->authorizationMessageReference)) {
            $object->authorizationMessageReference = $this->authorizationMessageReference;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): Acceptance
    {
        parent::fromObject($object);
        if (property_exists($object, 'acceptanceSystemApplicationId')) {
            $this->acceptanceSystemApplicationId = $object->acceptanceSystemApplicationId;
        }
        if (property_exists($object, 'authorizationDate')) {
            $this->authorizationDate = new DateTime($object->authorizationDate);
        }
        if (property_exists($object, 'authorizationMessageReference')) {
            $this->authorizationMessageReference = $object->authorizationMessageReference;
        }
        return $this;
    }
}
