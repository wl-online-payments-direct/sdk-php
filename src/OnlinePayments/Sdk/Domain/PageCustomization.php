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
class PageCustomization extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $template;

    // Methods
    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }
    /**
     * @var string
     */
    public function setTemplate($value)
    {
        $this->template = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->template !== null) {
            $object->template = $this->template;
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
        if (property_exists($object, 'template')) {
            $this->template = $object->template;
        }
        return $this;
    }
}
