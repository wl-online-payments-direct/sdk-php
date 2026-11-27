<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class DetokenizationResponse extends DataObject
{
    /**
     * @var DetokenizedTokenResponse[]|null
     */
    public ?array $tokens = null;

    /**
     * @return DetokenizedTokenResponse[]|null
     */
    public function getTokens(): ?array
    {
        return $this->tokens;
    }

    /**
     * @param DetokenizedTokenResponse[]|null $value
     */
    public function setTokens(?array $value): void
    {
        $this->tokens = $value;
    }

    /**
     * @param DetokenizedTokenResponse[]|null $value
     * @return $this
     */
    public function withTokens(?array $value): static
    {
        $this->tokens = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->tokens !== null) {
            $object->tokens = [];
            foreach ($this->tokens as $element) {
                if ($element !== null) {
                    $object->tokens[] = $element->toObject();
                }
            }
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
        if (property_exists($object, 'tokens')) {
            if (!is_array($object->tokens) && !is_object($object->tokens)) {
                throw new UnexpectedValueException('value \'' . print_r($object->tokens, true) . '\' is not an array or object');
            }
            $this->tokens = [];
            foreach ($object->tokens as $element) {
                $value = new DetokenizedTokenResponse();
                $this->tokens[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
