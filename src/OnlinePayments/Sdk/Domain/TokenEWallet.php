<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class TokenEWallet extends DataObject
{
    /**
     * @var string|null
     * @deprecated This field is not used by any payment product An alias for the token. This can be used to visually represent the token.
     */
    public ?string $alias = null;

    /**
     * @var CustomerToken|null
     */
    public ?CustomerToken $customer = null;

    /**
     * @return string|null
     * @deprecated This field is not used by any payment product An alias for the token. This can be used to visually represent the token.
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param string|null $value
     * @deprecated This field is not used by any payment product An alias for the token. This can be used to visually represent the token.
     */
    public function setAlias(?string $value): void
    {
        $this->alias = $value;
    }

    /**
     * @return CustomerToken|null
     */
    public function getCustomer(): ?CustomerToken
    {
        return $this->customer;
    }

    /**
     * @param CustomerToken|null $value
     */
    public function setCustomer(?CustomerToken $value): void
    {
        $this->customer = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->alias)) {
            $object->alias = $this->alias;
        }
        if (!is_null($this->customer)) {
            $object->customer = $this->customer->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): TokenEWallet
    {
        parent::fromObject($object);
        if (property_exists($object, 'alias')) {
            $this->alias = $object->alias;
        }
        if (property_exists($object, 'customer')) {
            if (!is_object($object->customer)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customer, true) . '\' is not an object');
            }
            $value = new CustomerToken();
            $this->customer = $value->fromObject($object->customer);
        }
        return $this;
    }
}
