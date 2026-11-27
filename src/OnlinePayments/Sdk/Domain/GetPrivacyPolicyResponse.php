<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GetPrivacyPolicyResponse extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $htmlContent = null;

    /**
     * @return string|null
     */
    public function getHtmlContent(): ?string
    {
        return $this->htmlContent;
    }

    /**
     * @param string|null $value
     */
    public function setHtmlContent(?string $value): void
    {
        $this->htmlContent = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withHtmlContent(?string $value): static
    {
        $this->htmlContent = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->htmlContent !== null) {
            $object->htmlContent = $this->htmlContent;
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
        if (property_exists($object, 'htmlContent')) {
            $this->htmlContent = $object->htmlContent;
        }
        return $this;
    }
}
