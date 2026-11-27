<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ReattemptInstructionsConditions extends DataObject
{
    /**
     * @var int|null
     */
    public ?int $maxAttempts = null;

    /**
     * @var int|null
     */
    public ?int $maxDelay = null;

    /**
     * @return int|null
     */
    public function getMaxAttempts(): ?int
    {
        return $this->maxAttempts;
    }

    /**
     * @param int|null $value
     */
    public function setMaxAttempts(?int $value): void
    {
        $this->maxAttempts = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withMaxAttempts(?int $value): static
    {
        $this->maxAttempts = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxDelay(): ?int
    {
        return $this->maxDelay;
    }

    /**
     * @param int|null $value
     */
    public function setMaxDelay(?int $value): void
    {
        $this->maxDelay = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withMaxDelay(?int $value): static
    {
        $this->maxDelay = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->maxAttempts !== null) {
            $object->maxAttempts = $this->maxAttempts;
        }
        if ($this->maxDelay !== null) {
            $object->maxDelay = $this->maxDelay;
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
        if (property_exists($object, 'maxAttempts')) {
            $this->maxAttempts = $object->maxAttempts;
        }
        if (property_exists($object, 'maxDelay')) {
            $this->maxDelay = $object->maxDelay;
        }
        return $this;
    }
}
