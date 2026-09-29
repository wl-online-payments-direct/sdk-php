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
     * @return Visa
    */
    public function withAuthenticationOptions(?VisaAuthenticationOptions $value): Visa
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
     * @return Visa
    */
    public function withEncryptionKey(?string $value): Visa
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
     * @return Visa
    */
    public function withNModulus(?string $value): Visa
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
     * @return Visa
    */
    public function withSrcInitiatorId(?string $value): Visa
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
     * @return Visa
    */
    public function withSrciDpaId(?string $value): Visa
    {
        $this->srciDpaId = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->authenticationOptions)) {
            $object->authenticationOptions = $this->authenticationOptions->toObject();
        }
        if (!is_null($this->encryptionKey)) {
            $object->encryptionKey = $this->encryptionKey;
        }
        if (!is_null($this->nModulus)) {
            $object->nModulus = $this->nModulus;
        }
        if (!is_null($this->srcInitiatorId)) {
            $object->srcInitiatorId = $this->srcInitiatorId;
        }
        if (!is_null($this->srciDpaId)) {
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
    public function fromObject(object $object): Visa
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
