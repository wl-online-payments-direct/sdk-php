<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundOutput extends DataObject
{
    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $amountOfMoney = null;

    /**
     * @var int|null
     */
    public ?int $amountPaid = null;

    /**
     * @var RefundCardMethodSpecificOutput|null
     */
    public ?RefundCardMethodSpecificOutput $cardRefundMethodSpecificOutput = null;

    /**
     * @var RefundEWalletMethodSpecificOutput|null
     */
    public ?RefundEWalletMethodSpecificOutput $eWalletRefundMethodSpecificOutput = null;

    /**
     * @var string|null
     */
    public ?string $merchantParameters = null;

    /**
     * @var RefundMobileMethodSpecificOutput|null
     */
    public ?RefundMobileMethodSpecificOutput $mobileRefundMethodSpecificOutput = null;

    /**
     * @var OperationPaymentReferences|null
     */
    public ?OperationPaymentReferences $operationReferences = null;

    /**
     * @var string|null
     */
    public ?string $paymentMethod = null;

    /**
     * @var RefundRedirectMethodSpecificOutput|null
     */
    public ?RefundRedirectMethodSpecificOutput $redirectRefundMethodSpecificOutput = null;

    /**
     * @var PaymentReferences|null
     */
    public ?PaymentReferences $references = null;

    /**
     * @return AmountOfMoney|null
     */
    public function getAmountOfMoney(): ?AmountOfMoney
    {
        return $this->amountOfMoney;
    }

    /**
     * @param AmountOfMoney|null $value
     */
    public function setAmountOfMoney(?AmountOfMoney $value): void
    {
        $this->amountOfMoney = $value;
    }

    /**
     * @return int|null
     */
    public function getAmountPaid(): ?int
    {
        return $this->amountPaid;
    }

    /**
     * @param int|null $value
     */
    public function setAmountPaid(?int $value): void
    {
        $this->amountPaid = $value;
    }

    /**
     * @return RefundCardMethodSpecificOutput|null
     */
    public function getCardRefundMethodSpecificOutput(): ?RefundCardMethodSpecificOutput
    {
        return $this->cardRefundMethodSpecificOutput;
    }

    /**
     * @param RefundCardMethodSpecificOutput|null $value
     */
    public function setCardRefundMethodSpecificOutput(?RefundCardMethodSpecificOutput $value): void
    {
        $this->cardRefundMethodSpecificOutput = $value;
    }

    /**
     * @return RefundEWalletMethodSpecificOutput|null
     */
    public function getEWalletRefundMethodSpecificOutput(): ?RefundEWalletMethodSpecificOutput
    {
        return $this->eWalletRefundMethodSpecificOutput;
    }

    /**
     * @param RefundEWalletMethodSpecificOutput|null $value
     */
    public function setEWalletRefundMethodSpecificOutput(?RefundEWalletMethodSpecificOutput $value): void
    {
        $this->eWalletRefundMethodSpecificOutput = $value;
    }

    /**
     * @return string|null
     */
    public function getMerchantParameters(): ?string
    {
        return $this->merchantParameters;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantParameters(?string $value): void
    {
        $this->merchantParameters = $value;
    }

    /**
     * @return RefundMobileMethodSpecificOutput|null
     */
    public function getMobileRefundMethodSpecificOutput(): ?RefundMobileMethodSpecificOutput
    {
        return $this->mobileRefundMethodSpecificOutput;
    }

    /**
     * @param RefundMobileMethodSpecificOutput|null $value
     */
    public function setMobileRefundMethodSpecificOutput(?RefundMobileMethodSpecificOutput $value): void
    {
        $this->mobileRefundMethodSpecificOutput = $value;
    }

    /**
     * @return OperationPaymentReferences|null
     */
    public function getOperationReferences(): ?OperationPaymentReferences
    {
        return $this->operationReferences;
    }

    /**
     * @param OperationPaymentReferences|null $value
     */
    public function setOperationReferences(?OperationPaymentReferences $value): void
    {
        $this->operationReferences = $value;
    }

    /**
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentMethod(?string $value): void
    {
        $this->paymentMethod = $value;
    }

    /**
     * @return RefundRedirectMethodSpecificOutput|null
     */
    public function getRedirectRefundMethodSpecificOutput(): ?RefundRedirectMethodSpecificOutput
    {
        return $this->redirectRefundMethodSpecificOutput;
    }

    /**
     * @param RefundRedirectMethodSpecificOutput|null $value
     */
    public function setRedirectRefundMethodSpecificOutput(?RefundRedirectMethodSpecificOutput $value): void
    {
        $this->redirectRefundMethodSpecificOutput = $value;
    }

    /**
     * @return PaymentReferences|null
     */
    public function getReferences(): ?PaymentReferences
    {
        return $this->references;
    }

    /**
     * @param PaymentReferences|null $value
     */
    public function setReferences(?PaymentReferences $value): void
    {
        $this->references = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->amountOfMoney)) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if (!is_null($this->amountPaid)) {
            $object->amountPaid = $this->amountPaid;
        }
        if (!is_null($this->cardRefundMethodSpecificOutput)) {
            $object->cardRefundMethodSpecificOutput = $this->cardRefundMethodSpecificOutput->toObject();
        }
        if (!is_null($this->eWalletRefundMethodSpecificOutput)) {
            $object->eWalletRefundMethodSpecificOutput = $this->eWalletRefundMethodSpecificOutput->toObject();
        }
        if (!is_null($this->merchantParameters)) {
            $object->merchantParameters = $this->merchantParameters;
        }
        if (!is_null($this->mobileRefundMethodSpecificOutput)) {
            $object->mobileRefundMethodSpecificOutput = $this->mobileRefundMethodSpecificOutput->toObject();
        }
        if (!is_null($this->operationReferences)) {
            $object->operationReferences = $this->operationReferences->toObject();
        }
        if (!is_null($this->paymentMethod)) {
            $object->paymentMethod = $this->paymentMethod;
        }
        if (!is_null($this->redirectRefundMethodSpecificOutput)) {
            $object->redirectRefundMethodSpecificOutput = $this->redirectRefundMethodSpecificOutput->toObject();
        }
        if (!is_null($this->references)) {
            $object->references = $this->references->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RefundOutput
    {
        parent::fromObject($object);
        if (property_exists($object, 'amountOfMoney')) {
            if (!is_object($object->amountOfMoney)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amountOfMoney, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amountOfMoney = $value->fromObject($object->amountOfMoney);
        }
        if (property_exists($object, 'amountPaid')) {
            $this->amountPaid = $object->amountPaid;
        }
        if (property_exists($object, 'cardRefundMethodSpecificOutput')) {
            if (!is_object($object->cardRefundMethodSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardRefundMethodSpecificOutput, true) . '\' is not an object');
            }
            $value = new RefundCardMethodSpecificOutput();
            $this->cardRefundMethodSpecificOutput = $value->fromObject($object->cardRefundMethodSpecificOutput);
        }
        if (property_exists($object, 'eWalletRefundMethodSpecificOutput')) {
            if (!is_object($object->eWalletRefundMethodSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->eWalletRefundMethodSpecificOutput, true) . '\' is not an object');
            }
            $value = new RefundEWalletMethodSpecificOutput();
            $this->eWalletRefundMethodSpecificOutput = $value->fromObject($object->eWalletRefundMethodSpecificOutput);
        }
        if (property_exists($object, 'merchantParameters')) {
            $this->merchantParameters = $object->merchantParameters;
        }
        if (property_exists($object, 'mobileRefundMethodSpecificOutput')) {
            if (!is_object($object->mobileRefundMethodSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->mobileRefundMethodSpecificOutput, true) . '\' is not an object');
            }
            $value = new RefundMobileMethodSpecificOutput();
            $this->mobileRefundMethodSpecificOutput = $value->fromObject($object->mobileRefundMethodSpecificOutput);
        }
        if (property_exists($object, 'operationReferences')) {
            if (!is_object($object->operationReferences)) {
                throw new UnexpectedValueException('value \'' . print_r($object->operationReferences, true) . '\' is not an object');
            }
            $value = new OperationPaymentReferences();
            $this->operationReferences = $value->fromObject($object->operationReferences);
        }
        if (property_exists($object, 'paymentMethod')) {
            $this->paymentMethod = $object->paymentMethod;
        }
        if (property_exists($object, 'redirectRefundMethodSpecificOutput')) {
            if (!is_object($object->redirectRefundMethodSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->redirectRefundMethodSpecificOutput, true) . '\' is not an object');
            }
            $value = new RefundRedirectMethodSpecificOutput();
            $this->redirectRefundMethodSpecificOutput = $value->fromObject($object->redirectRefundMethodSpecificOutput);
        }
        if (property_exists($object, 'references')) {
            if (!is_object($object->references)) {
                throw new UnexpectedValueException('value \'' . print_r($object->references, true) . '\' is not an object');
            }
            $value = new PaymentReferences();
            $this->references = $value->fromObject($object->references);
        }
        return $this;
    }
}
