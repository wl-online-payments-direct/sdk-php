<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SessionRequest extends DataObject
{
    /**
     * @var string[]|null
     */
    public ?array $tokens = null;

    /**
     * @return string[]|null
     */
    public function getTokens(): ?array
    {
        return $this->tokens;
    }

    /**
     * @param string[]|null $value
     */
    public function setTokens(?array $value): void
    {
        $this->tokens = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->tokens)) {
            $object->tokens = [];
            foreach ($this->tokens as $element) {
                if (!is_null($element)) {
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
    public function fromObject(object $object): SessionRequest
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
