<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class BrowserData extends DataObject
{
    /**
     * @var int|null
     */
    public ?int $colorDepth = null;

    /**
     * @var bool|null
     */
    public ?bool $javaEnabled = null;

    /**
     * @var bool|null
     */
    public ?bool $javaScriptEnabled = null;

    /**
     * @var string|null
     */
    public ?string $screenHeight = null;

    /**
     * @var string|null
     */
    public ?string $screenWidth = null;

    /**
     * @return int|null
     */
    public function getColorDepth(): ?int
    {
        return $this->colorDepth;
    }

    /**
     * @param int|null $value
     */
    public function setColorDepth(?int $value): void
    {
        $this->colorDepth = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withColorDepth(?int $value): static
    {
        $this->colorDepth = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getJavaEnabled(): ?bool
    {
        return $this->javaEnabled;
    }

    /**
     * @param bool|null $value
     */
    public function setJavaEnabled(?bool $value): void
    {
        $this->javaEnabled = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withJavaEnabled(?bool $value): static
    {
        $this->javaEnabled = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getJavaScriptEnabled(): ?bool
    {
        return $this->javaScriptEnabled;
    }

    /**
     * @param bool|null $value
     */
    public function setJavaScriptEnabled(?bool $value): void
    {
        $this->javaScriptEnabled = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withJavaScriptEnabled(?bool $value): static
    {
        $this->javaScriptEnabled = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScreenHeight(): ?string
    {
        return $this->screenHeight;
    }

    /**
     * @param string|null $value
     */
    public function setScreenHeight(?string $value): void
    {
        $this->screenHeight = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withScreenHeight(?string $value): static
    {
        $this->screenHeight = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScreenWidth(): ?string
    {
        return $this->screenWidth;
    }

    /**
     * @param string|null $value
     */
    public function setScreenWidth(?string $value): void
    {
        $this->screenWidth = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withScreenWidth(?string $value): static
    {
        $this->screenWidth = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->colorDepth !== null) {
            $object->colorDepth = $this->colorDepth;
        }
        if ($this->javaEnabled !== null) {
            $object->javaEnabled = $this->javaEnabled;
        }
        if ($this->javaScriptEnabled !== null) {
            $object->javaScriptEnabled = $this->javaScriptEnabled;
        }
        if ($this->screenHeight !== null) {
            $object->screenHeight = $this->screenHeight;
        }
        if ($this->screenWidth !== null) {
            $object->screenWidth = $this->screenWidth;
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
        if (property_exists($object, 'colorDepth')) {
            $this->colorDepth = $object->colorDepth;
        }
        if (property_exists($object, 'javaEnabled')) {
            $this->javaEnabled = $object->javaEnabled;
        }
        if (property_exists($object, 'javaScriptEnabled')) {
            $this->javaScriptEnabled = $object->javaScriptEnabled;
        }
        if (property_exists($object, 'screenHeight')) {
            $this->screenHeight = $object->screenHeight;
        }
        if (property_exists($object, 'screenWidth')) {
            $this->screenWidth = $object->screenWidth;
        }
        return $this;
    }
}
