<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class TokenResponse extends DataObject
{
    /**
     * @var TokenCard
     */
    public $card = null;

    /**
     * @var TokenEWallet
     */
    public $eWallet = null;

    /**
     * @var ExternalTokenLinked
     */
    public $externalTokenLinked = null;

    /**
     * @var string
     */
    public $id = null;

    /**
     * @var bool
     */
    public $isTemporary = null;

    /**
     * @var int
     */
    public $paymentProductId = null;

    /**
     * @return TokenCard
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param TokenCard
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
     * @param TokenEWallet
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
     * @param ExternalTokenLinked
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
     * @param string
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
     * @param bool
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
     * @param int
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
        if (!is_null($this->card)) {
            $object->card = $this->card->toObject();
        }
        if (!is_null($this->eWallet)) {
            $object->eWallet = $this->eWallet->toObject();
        }
        if (!is_null($this->externalTokenLinked)) {
            $object->externalTokenLinked = $this->externalTokenLinked->toObject();
        }
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->isTemporary)) {
            $object->isTemporary = $this->isTemporary;
        }
        if (!is_null($this->paymentProductId)) {
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
