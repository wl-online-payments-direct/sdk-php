<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreateCertificateResponse extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $certificateId = null;

    /**
     * @var string|null
     */
    public ?string $signedCertificate = null;

    /**
     * @return string|null
     */
    public function getCertificateId(): ?string
    {
        return $this->certificateId;
    }

    /**
     * @param string|null $value
     */
    public function setCertificateId(?string $value): void
    {
        $this->certificateId = $value;
    }

    /**
     * @return string|null
     */
    public function getSignedCertificate(): ?string
    {
        return $this->signedCertificate;
    }

    /**
     * @param string|null $value
     */
    public function setSignedCertificate(?string $value): void
    {
        $this->signedCertificate = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->certificateId)) {
            $object->certificateId = $this->certificateId;
        }
        if (!is_null($this->signedCertificate)) {
            $object->signedCertificate = $this->signedCertificate;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CreateCertificateResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'certificateId')) {
            $this->certificateId = $object->certificateId;
        }
        if (property_exists($object, 'signedCertificate')) {
            $this->signedCertificate = $object->signedCertificate;
        }
        return $this;
    }
}
