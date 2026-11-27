<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Visa extends DataObject
{
    /**
     * @var VisaAuthenticationOptions|null
     */
    public ?VisaAuthenticationOptions $authenticationOptions = null;

    /**
     * @var string|null
     */
    public ?string $encryptionKey = null;

    /**
     * @var string|null
     */
    public ?string $nModulus = null;

    /**
     * @var string|null
     */
    public ?string $srcInitiatorId = null;

    /**
     * @var string|null
     */
    public ?string $srciDpaId = null;

    /**
     * @return VisaAuthenticationOptions|null
     */
    public function getAuthenticationOptions(): ?VisaAuthenticationOptions
    {
        return $this->authenticationOptions;
    }

    /**
     * @param VisaAuthenticationOptions|null $value
     */
    public function setAuthenticationOptions(?VisaAuthenticationOptions $value): void
    {
        $this->authenticationOptions = $value;
    }

    /**
     * @param VisaAuthenticationOptions|null $value
     * @return $this
     */
    public function withAuthenticationOptions(?VisaAuthenticationOptions $value): static
    {
        $this->authenticationOptions = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEncryptionKey(): ?string
    {
        return $this->encryptionKey;
    }

    /**
     * @param string|null $value
     */
    public function setEncryptionKey(?string $value): void
    {
        $this->encryptionKey = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withEncryptionKey(?string $value): static
    {
        $this->encryptionKey = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNModulus(): ?string
    {
        return $this->nModulus;
    }

    /**
     * @param string|null $value
     */
    public function setNModulus(?string $value): void
    {
        $this->nModulus = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withNModulus(?string $value): static
    {
        $this->nModulus = $value;
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
        if ($this->encryptionKey !== null) {
            $object->encryptionKey = $this->encryptionKey;
        }
        if ($this->nModulus !== null) {
            $object->nModulus = $this->nModulus;
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
            $value = new VisaAuthenticationOptions();
            $this->authenticationOptions = $value->fromObject($object->authenticationOptions);
        }
        if (property_exists($object, 'encryptionKey')) {
            $this->encryptionKey = $object->encryptionKey;
        }
        if (property_exists($object, 'nModulus')) {
            $this->nModulus = $object->nModulus;
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
