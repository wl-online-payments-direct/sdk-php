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
class TokenResponse extends DataObject
{
    // Properties
    /**
     * @var TokenCard
     */
    private $card;

    /**
     * @var TokenEWallet
     */
    private $eWallet;

    /**
     * @var ExternalTokenLinked
     */
    private $externalTokenLinked;

    /**
     * @var string
     */
    private $id;

    /**
     * @var bool
     */
    private $isTemporary;

    /**
     * @var int
     */
    private $paymentProductId;

    // Methods
    /**
     * @return TokenCard
     */
    public function getCard()
    {
        return $this->card;
    }
    /**
     * @var TokenCard
     */
    public function setCard($value)
    {
        $this->card = $value;
    }

    /**
     * @return TokenEWallet
     */
    public function getEWallet()
    {
        return $this->eWallet;
    }
    /**
     * @var TokenEWallet
     */
    public function setEWallet($value)
    {
        $this->eWallet = $value;
    }

    /**
     * @return ExternalTokenLinked
     */
    public function getExternalTokenLinked()
    {
        return $this->externalTokenLinked;
    }
    /**
     * @var ExternalTokenLinked
     */
    public function setExternalTokenLinked($value)
    {
        $this->externalTokenLinked = $value;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    public function setId($value)
    {
        $this->id = $value;
    }

    /**
     * @return bool
     */
    public function getIsTemporary()
    {
        return $this->isTemporary;
    }
    /**
     * @var bool
     */
    public function setIsTemporary($value)
    {
        $this->isTemporary = $value;
    }

    /**
     * @return int
     */
    public function getPaymentProductId()
    {
        return $this->paymentProductId;
    }
    /**
     * @var int
     */
    public function setPaymentProductId($value)
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->card !== null) {
            $object->card = $this->card->toObject();
        }
        if ($this->eWallet !== null) {
            $object->eWallet = $this->eWallet->toObject();
        }
        if ($this->externalTokenLinked !== null) {
            $object->externalTokenLinked = $this->externalTokenLinked->toObject();
        }
        if ($this->id !== null) {
            $object->id = $this->id;
        }
        if ($this->isTemporary !== null) {
            $object->isTemporary = $this->isTemporary;
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
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
        if (property_exists($object, 'card')) {
            if (!is_object($object->card)) {
                throw new UnexpectedValueException('value \'' . print_r($object->card, true) . '\' is not an object');
            }
            $value = new TokenCard();
            $this->card = $value->fromObject($object->card);
        }
        if (property_exists($object, 'eWallet')) {
            if (!is_object($object->eWallet)) {
                throw new UnexpectedValueException('value \'' . print_r($object->eWallet, true) . '\' is not an object');
            }
            $value = new TokenEWallet();
            $this->eWallet = $value->fromObject($object->eWallet);
        }
        if (property_exists($object, 'externalTokenLinked')) {
            if (!is_object($object->externalTokenLinked)) {
                throw new UnexpectedValueException('value \'' . print_r($object->externalTokenLinked, true) . '\' is not an object');
            }
            $value = new ExternalTokenLinked();
            $this->externalTokenLinked = $value->fromObject($object->externalTokenLinked);
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'isTemporary')) {
            $this->isTemporary = $object->isTemporary;
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        return $this;
    }
}
