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
class GetPrivacyPolicyResponse extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $htmlContent;

    // Methods
    /**
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->htmlContent;
    }
    /**
     * @var string
     */
    public function setHtmlContent($value)
    {
        $this->htmlContent = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->htmlContent !== null) {
            $object->htmlContent = $this->htmlContent;
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
        if (property_exists($object, 'htmlContent')) {
            $this->htmlContent = $object->htmlContent;
        }
        return $this;
    }
}
