<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $RETURNMAC = null;

    /**
     * @var string|null
     */
    public ?string $redirectURL = null;

    /**
     * @return string|null
     */
    public function getRETURNMAC(): ?string
    {
        return $this->RETURNMAC;
    }

    /**
     * @param string|null $value
     */
    public function setRETURNMAC(?string $value): void
    {
        $this->RETURNMAC = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withRETURNMAC(?string $value): static
    {
        $this->RETURNMAC = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRedirectURL(): ?string
    {
        return $this->redirectURL;
    }

    /**
     * @param string|null $value
     */
    public function setRedirectURL(?string $value): void
    {
        $this->redirectURL = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withRedirectURL(?string $value): static
    {
        $this->redirectURL = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->RETURNMAC !== null) {
            $object->RETURNMAC = $this->RETURNMAC;
        }
        if ($this->redirectURL !== null) {
            $object->redirectURL = $this->redirectURL;
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
        if (property_exists($object, 'RETURNMAC')) {
            $this->RETURNMAC = $object->RETURNMAC;
        }
        if (property_exists($object, 'redirectURL')) {
            $this->redirectURL = $object->redirectURL;
        }
        return $this;
    }
}
