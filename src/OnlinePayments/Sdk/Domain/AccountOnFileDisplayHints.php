<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AccountOnFileDisplayHints extends DataObject
{
    /**
     * @var LabelTemplateElement[]|null
     */
    public ?array $labelTemplate = null;

    /**
     * @var string|null
     */
    public ?string $logo = null;

    /**
     * @return LabelTemplateElement[]|null
     */
    public function getLabelTemplate(): ?array
    {
        return $this->labelTemplate;
    }

    /**
     * @param LabelTemplateElement[]|null $value
     */
    public function setLabelTemplate(?array $value): void
    {
        $this->labelTemplate = $value;
    }

    /**
     * @param LabelTemplateElement[]|null $value
     * @return $this
     */
    public function withLabelTemplate(?array $value): static
    {
        $this->labelTemplate = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * @param string|null $value
     */
    public function setLogo(?string $value): void
    {
        $this->logo = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withLogo(?string $value): static
    {
        $this->logo = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->labelTemplate !== null) {
            $object->labelTemplate = [];
            foreach ($this->labelTemplate as $element) {
                if ($element !== null) {
                    $object->labelTemplate[] = $element->toObject();
                }
            }
        }
        if ($this->logo !== null) {
            $object->logo = $this->logo;
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
        if (property_exists($object, 'labelTemplate')) {
            if (!is_array($object->labelTemplate) && !is_object($object->labelTemplate)) {
                throw new UnexpectedValueException('value \'' . print_r($object->labelTemplate, true) . '\' is not an array or object');
            }
            $this->labelTemplate = [];
            foreach ($object->labelTemplate as $element) {
                $value = new LabelTemplateElement();
                $this->labelTemplate[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'logo')) {
            $this->logo = $object->logo;
        }
        return $this;
    }
}
