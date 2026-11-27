<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Mastercard extends DataObject
{
    /**
     * @var AuthenticationOptions|null
     */
    public ?AuthenticationOptions $authenticationOptions = null;

    /**
     * @var string|null
     */
    public ?string $srcInitiatorId = null;

    /**
     * @var string|null
     */
    public ?string $srciDpaId = null;

    /**
     * @return AuthenticationOptions|null
     */
    public function getAuthenticationOptions(): ?AuthenticationOptions
    {
        return $this->authenticationOptions;
    }

    /**
     * @param AuthenticationOptions|null $value
     */
    public function setAuthenticationOptions(?AuthenticationOptions $value): void
    {
        $this->authenticationOptions = $value;
    }

    /**
     * @param AuthenticationOptions|null $value
     * @return $this
     */
    public function withAuthenticationOptions(?AuthenticationOptions $value): static
    {
        $this->authenticationOptions = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSrcInitiatorId(): ?string
    {
        return $this->srcInitiatorId;
    }

    /**
     * @param string|null $value
     */
    public function setSrcInitiatorId(?string $value): void
    {
        $this->srcInitiatorId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSrcInitiatorId(?string $value): static
    {
        $this->srcInitiatorId = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSrciDpaId(): ?string
    {
        return $this->srciDpaId;
    }

    /**
     * @param string|null $value
     */
    public function setSrciDpaId(?string $value): void
    {
        $this->srciDpaId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSrciDpaId(?string $value): static
    {
        $this->srciDpaId = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->authenticationOptions !== null) {
            $object->authenticationOptions = $this->authenticationOptions->toObject();
        }
        if ($this->srcInitiatorId !== null) {
            $object->srcInitiatorId = $this->srcInitiatorId;
        }
        if ($this->srciDpaId !== null) {
            $object->srciDpaId = $this->srciDpaId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'authenticationOptions')) {
            if (!is_object($object->authenticationOptions)) {
                throw new UnexpectedValueException('value \'' . print_r($object->authenticationOptions, true) . '\' is not an object');
            }
            $value = new AuthenticationOptions();
            $this->authenticationOptions = $value->fromObject($object->authenticationOptions);
        }
        if (property_exists($object, 'srcInitiatorId')) {
            $this->srcInitiatorId = $object->srcInitiatorId;
        }
        if (property_exists($object, 'srciDpaId')) {
            $this->srciDpaId = $object->srciDpaId;
        }
        return $this;
    }
}
