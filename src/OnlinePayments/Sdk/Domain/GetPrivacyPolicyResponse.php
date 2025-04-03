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
     * @var string
     */
    public $htmlContent = null;

    /**
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->htmlContent;
    }

    /**
     * @param string
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
        if (!is_null($this->htmlContent)) {
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
