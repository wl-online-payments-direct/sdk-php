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
class AccountOnFileDisplayHints extends DataObject
{
    // Properties
    /**
     * @var LabelTemplateElement[]
     */
    private $labelTemplate;

    /**
     * @var string
     */
    private $logo;

    // Methods
    /**
     * @return LabelTemplateElement[]
     */
    public function getLabelTemplate()
    {
        return $this->labelTemplate;
    }
    /**
     * @var LabelTemplateElement[]
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
     * @var string
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
