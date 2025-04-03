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
     * @var LabelTemplateElement[]
     */
    public $labelTemplate = null;

    /**
     * @var string
     */
    public $logo = null;

    /**
     * @return LabelTemplateElement[]
     */
    public function getLabelTemplate()
    {
        return $this->labelTemplate;
    }

    /**
     * @param LabelTemplateElement[]
     */
    public function setLabelTemplate($value)
    {
        $this->labelTemplate = $value;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string
     */
    public function setLogo($value)
    {
        $this->logo = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->labelTemplate)) {
            $object->labelTemplate = [];
            foreach ($this->labelTemplate as $element) {
                if (!is_null($element)) {
                    $object->labelTemplate[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->logo)) {
            $object->logo = $this->logo;
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
