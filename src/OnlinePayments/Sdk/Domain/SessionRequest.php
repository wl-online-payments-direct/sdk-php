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
class SessionRequest extends DataObject
{
    // Properties
    /**
     * @var string[]
     */
    private $tokens;

    // Methods
    /**
     * @return string[]
     */
    public function getTokens()
    {
        return $this->tokens;
    }
    /**
     * @var string[]
     */
    public function setTokens($value)
    {
        $this->tokens = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->tokens !== null) {
            $object->tokens = [];
            foreach ($this->tokens as $element) {
                if ($element !== null) {
                    $object->tokens[] = $element;
                }
            }
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
        if (property_exists($object, 'tokens')) {
            if (!is_array($object->tokens) && !is_object($object->tokens)) {
                throw new UnexpectedValueException('value \'' . print_r($object->tokens, true) . '\' is not an array or object');
            }
            $this->tokens = [];
            foreach ($object->tokens as $element) {
                $this->tokens[] = $element;
            }
        }
        return $this;
    }
}
