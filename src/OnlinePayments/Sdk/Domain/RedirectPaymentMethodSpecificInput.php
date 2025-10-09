<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentMethodSpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $paymentOption = null;

    /**
     * @var RedirectPaymentProduct3203SpecificInput|null
     */
    public ?RedirectPaymentProduct3203SpecificInput $paymentProduct3203SpecificInput = null;

    /**
     * @var RedirectPaymentProduct3204SpecificInput|null
     */
    public ?RedirectPaymentProduct3204SpecificInput $paymentProduct3204SpecificInput = null;

    /**
     * @var RedirectPaymentProduct3302SpecificInput|null
     */
    public ?RedirectPaymentProduct3302SpecificInput $paymentProduct3302SpecificInput = null;

    /**
     * @var RedirectPaymentProduct3306SpecificInput|null
     */
    public ?RedirectPaymentProduct3306SpecificInput $paymentProduct3306SpecificInput = null;

    /**
     * @var RedirectPaymentProduct5001SpecificInput|null
     */
    public ?RedirectPaymentProduct5001SpecificInput $paymentProduct5001SpecificInput = null;

    /**
     * @var RedirectPaymentProduct5300SpecificInput|null
     */
    public ?RedirectPaymentProduct5300SpecificInput $paymentProduct5300SpecificInput = null;

    /**
     * @var RedirectPaymentProduct5402SpecificInput|null
     */
    public ?RedirectPaymentProduct5402SpecificInput $paymentProduct5402SpecificInput = null;

    /**
     * @var RedirectPaymentProduct5403SpecificInput|null
     */
    public ?RedirectPaymentProduct5403SpecificInput $paymentProduct5403SpecificInput = null;

    /**
     * @var RedirectPaymentProduct5406SpecificInput|null
     */
    public ?RedirectPaymentProduct5406SpecificInput $paymentProduct5406SpecificInput = null;

    /**
     * @var RedirectPaymentProduct5408SpecificInput|null
     */
    public ?RedirectPaymentProduct5408SpecificInput $paymentProduct5408SpecificInput = null;

    /**
     * @var RedirectPaymentProduct5410SpecificInput|null
     */
    public ?RedirectPaymentProduct5410SpecificInput $paymentProduct5410SpecificInput = null;

    /**
     * @var RedirectPaymentProduct5412SpecificInput|null
     */
    public ?RedirectPaymentProduct5412SpecificInput $paymentProduct5412SpecificInput = null;

    /**
     * @var RedirectPaymentProduct809SpecificInput|null
     */
    public ?RedirectPaymentProduct809SpecificInput $paymentProduct809SpecificInput = null;

    /**
     * @var RedirectPaymentProduct840SpecificInput|null
     */
    public ?RedirectPaymentProduct840SpecificInput $paymentProduct840SpecificInput = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @var RedirectionData|null
     */
    public ?RedirectionData $redirectionData = null;

    /**
     * @var bool|null
     */
    public ?bool $requiresApproval = null;

    /**
     * @var string|null
     */
    public ?string $token = null;

    /**
     * @var bool|null
     */
    public ?bool $tokenize = null;

    /**
     * @return string|null
     */
    public function getPaymentOption(): ?string
    {
        return $this->paymentOption;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentOption(?string $value): void
    {
        $this->paymentOption = $value;
    }

    /**
     * @return RedirectPaymentProduct3203SpecificInput|null
     */
    public function getPaymentProduct3203SpecificInput(): ?RedirectPaymentProduct3203SpecificInput
    {
        return $this->paymentProduct3203SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct3203SpecificInput|null $value
     */
    public function setPaymentProduct3203SpecificInput(?RedirectPaymentProduct3203SpecificInput $value): void
    {
        $this->paymentProduct3203SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct3204SpecificInput|null
     */
    public function getPaymentProduct3204SpecificInput(): ?RedirectPaymentProduct3204SpecificInput
    {
        return $this->paymentProduct3204SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct3204SpecificInput|null $value
     */
    public function setPaymentProduct3204SpecificInput(?RedirectPaymentProduct3204SpecificInput $value): void
    {
        $this->paymentProduct3204SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct3302SpecificInput|null
     */
    public function getPaymentProduct3302SpecificInput(): ?RedirectPaymentProduct3302SpecificInput
    {
        return $this->paymentProduct3302SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct3302SpecificInput|null $value
     */
    public function setPaymentProduct3302SpecificInput(?RedirectPaymentProduct3302SpecificInput $value): void
    {
        $this->paymentProduct3302SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct3306SpecificInput|null
     */
    public function getPaymentProduct3306SpecificInput(): ?RedirectPaymentProduct3306SpecificInput
    {
        return $this->paymentProduct3306SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct3306SpecificInput|null $value
     */
    public function setPaymentProduct3306SpecificInput(?RedirectPaymentProduct3306SpecificInput $value): void
    {
        $this->paymentProduct3306SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5001SpecificInput|null
     */
    public function getPaymentProduct5001SpecificInput(): ?RedirectPaymentProduct5001SpecificInput
    {
        return $this->paymentProduct5001SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct5001SpecificInput|null $value
     */
    public function setPaymentProduct5001SpecificInput(?RedirectPaymentProduct5001SpecificInput $value): void
    {
        $this->paymentProduct5001SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5300SpecificInput|null
     */
    public function getPaymentProduct5300SpecificInput(): ?RedirectPaymentProduct5300SpecificInput
    {
        return $this->paymentProduct5300SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct5300SpecificInput|null $value
     */
    public function setPaymentProduct5300SpecificInput(?RedirectPaymentProduct5300SpecificInput $value): void
    {
        $this->paymentProduct5300SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5402SpecificInput|null
     */
    public function getPaymentProduct5402SpecificInput(): ?RedirectPaymentProduct5402SpecificInput
    {
        return $this->paymentProduct5402SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct5402SpecificInput|null $value
     */
    public function setPaymentProduct5402SpecificInput(?RedirectPaymentProduct5402SpecificInput $value): void
    {
        $this->paymentProduct5402SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5403SpecificInput|null
     */
    public function getPaymentProduct5403SpecificInput(): ?RedirectPaymentProduct5403SpecificInput
    {
        return $this->paymentProduct5403SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct5403SpecificInput|null $value
     */
    public function setPaymentProduct5403SpecificInput(?RedirectPaymentProduct5403SpecificInput $value): void
    {
        $this->paymentProduct5403SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5406SpecificInput|null
     */
    public function getPaymentProduct5406SpecificInput(): ?RedirectPaymentProduct5406SpecificInput
    {
        return $this->paymentProduct5406SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct5406SpecificInput|null $value
     */
    public function setPaymentProduct5406SpecificInput(?RedirectPaymentProduct5406SpecificInput $value): void
    {
        $this->paymentProduct5406SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5408SpecificInput|null
     */
    public function getPaymentProduct5408SpecificInput(): ?RedirectPaymentProduct5408SpecificInput
    {
        return $this->paymentProduct5408SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct5408SpecificInput|null $value
     */
    public function setPaymentProduct5408SpecificInput(?RedirectPaymentProduct5408SpecificInput $value): void
    {
        $this->paymentProduct5408SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5410SpecificInput|null
     */
    public function getPaymentProduct5410SpecificInput(): ?RedirectPaymentProduct5410SpecificInput
    {
        return $this->paymentProduct5410SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct5410SpecificInput|null $value
     */
    public function setPaymentProduct5410SpecificInput(?RedirectPaymentProduct5410SpecificInput $value): void
    {
        $this->paymentProduct5410SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct5412SpecificInput|null
     */
    public function getPaymentProduct5412SpecificInput(): ?RedirectPaymentProduct5412SpecificInput
    {
        return $this->paymentProduct5412SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct5412SpecificInput|null $value
     */
    public function setPaymentProduct5412SpecificInput(?RedirectPaymentProduct5412SpecificInput $value): void
    {
        $this->paymentProduct5412SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct809SpecificInput|null
     */
    public function getPaymentProduct809SpecificInput(): ?RedirectPaymentProduct809SpecificInput
    {
        return $this->paymentProduct809SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct809SpecificInput|null $value
     */
    public function setPaymentProduct809SpecificInput(?RedirectPaymentProduct809SpecificInput $value): void
    {
        $this->paymentProduct809SpecificInput = $value;
    }

    /**
     * @return RedirectPaymentProduct840SpecificInput|null
     */
    public function getPaymentProduct840SpecificInput(): ?RedirectPaymentProduct840SpecificInput
    {
        return $this->paymentProduct840SpecificInput;
    }

    /**
     * @param RedirectPaymentProduct840SpecificInput|null $value
     */
    public function setPaymentProduct840SpecificInput(?RedirectPaymentProduct840SpecificInput $value): void
    {
        $this->paymentProduct840SpecificInput = $value;
    }

    /**
     * @return int|null
     */
    public function getPaymentProductId(): ?int
    {
        return $this->paymentProductId;
    }

    /**
     * @param int|null $value
     */
    public function setPaymentProductId(?int $value): void
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return RedirectionData|null
     */
    public function getRedirectionData(): ?RedirectionData
    {
        return $this->redirectionData;
    }

    /**
     * @param RedirectionData|null $value
     */
    public function setRedirectionData(?RedirectionData $value): void
    {
        $this->redirectionData = $value;
    }

    /**
     * @return bool|null
     */
    public function getRequiresApproval(): ?bool
    {
        return $this->requiresApproval;
    }

    /**
     * @param bool|null $value
     */
    public function setRequiresApproval(?bool $value): void
    {
        $this->requiresApproval = $value;
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param string|null $value
     */
    public function setToken(?string $value): void
    {
        $this->token = $value;
    }

    /**
     * @return bool|null
     */
    public function getTokenize(): ?bool
    {
        return $this->tokenize;
    }

    /**
     * @param bool|null $value
     */
    public function setTokenize(?bool $value): void
    {
        $this->tokenize = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->paymentOption)) {
            $object->paymentOption = $this->paymentOption;
        }
        if (!is_null($this->paymentProduct3203SpecificInput)) {
            $object->paymentProduct3203SpecificInput = $this->paymentProduct3203SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct3204SpecificInput)) {
            $object->paymentProduct3204SpecificInput = $this->paymentProduct3204SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct3302SpecificInput)) {
            $object->paymentProduct3302SpecificInput = $this->paymentProduct3302SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct3306SpecificInput)) {
            $object->paymentProduct3306SpecificInput = $this->paymentProduct3306SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct5001SpecificInput)) {
            $object->paymentProduct5001SpecificInput = $this->paymentProduct5001SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct5300SpecificInput)) {
            $object->paymentProduct5300SpecificInput = $this->paymentProduct5300SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct5402SpecificInput)) {
            $object->paymentProduct5402SpecificInput = $this->paymentProduct5402SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct5403SpecificInput)) {
            $object->paymentProduct5403SpecificInput = $this->paymentProduct5403SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct5406SpecificInput)) {
            $object->paymentProduct5406SpecificInput = $this->paymentProduct5406SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct5408SpecificInput)) {
            $object->paymentProduct5408SpecificInput = $this->paymentProduct5408SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct5410SpecificInput)) {
            $object->paymentProduct5410SpecificInput = $this->paymentProduct5410SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct5412SpecificInput)) {
            $object->paymentProduct5412SpecificInput = $this->paymentProduct5412SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct809SpecificInput)) {
            $object->paymentProduct809SpecificInput = $this->paymentProduct809SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct840SpecificInput)) {
            $object->paymentProduct840SpecificInput = $this->paymentProduct840SpecificInput->toObject();
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if (!is_null($this->redirectionData)) {
            $object->redirectionData = $this->redirectionData->toObject();
        }
        if (!is_null($this->requiresApproval)) {
            $object->requiresApproval = $this->requiresApproval;
        }
        if (!is_null($this->token)) {
            $object->token = $this->token;
        }
        if (!is_null($this->tokenize)) {
            $object->tokenize = $this->tokenize;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RedirectPaymentMethodSpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'paymentOption')) {
            $this->paymentOption = $object->paymentOption;
        }
        if (property_exists($object, 'paymentProduct3203SpecificInput')) {
            if (!is_object($object->paymentProduct3203SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3203SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct3203SpecificInput();
            $this->paymentProduct3203SpecificInput = $value->fromObject($object->paymentProduct3203SpecificInput);
        }
        if (property_exists($object, 'paymentProduct3204SpecificInput')) {
            if (!is_object($object->paymentProduct3204SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3204SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct3204SpecificInput();
            $this->paymentProduct3204SpecificInput = $value->fromObject($object->paymentProduct3204SpecificInput);
        }
        if (property_exists($object, 'paymentProduct3302SpecificInput')) {
            if (!is_object($object->paymentProduct3302SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3302SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct3302SpecificInput();
            $this->paymentProduct3302SpecificInput = $value->fromObject($object->paymentProduct3302SpecificInput);
        }
        if (property_exists($object, 'paymentProduct3306SpecificInput')) {
            if (!is_object($object->paymentProduct3306SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3306SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct3306SpecificInput();
            $this->paymentProduct3306SpecificInput = $value->fromObject($object->paymentProduct3306SpecificInput);
        }
        if (property_exists($object, 'paymentProduct5001SpecificInput')) {
            if (!is_object($object->paymentProduct5001SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5001SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct5001SpecificInput();
            $this->paymentProduct5001SpecificInput = $value->fromObject($object->paymentProduct5001SpecificInput);
        }
        if (property_exists($object, 'paymentProduct5300SpecificInput')) {
            if (!is_object($object->paymentProduct5300SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5300SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct5300SpecificInput();
            $this->paymentProduct5300SpecificInput = $value->fromObject($object->paymentProduct5300SpecificInput);
        }
        if (property_exists($object, 'paymentProduct5402SpecificInput')) {
            if (!is_object($object->paymentProduct5402SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5402SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct5402SpecificInput();
            $this->paymentProduct5402SpecificInput = $value->fromObject($object->paymentProduct5402SpecificInput);
        }
        if (property_exists($object, 'paymentProduct5403SpecificInput')) {
            if (!is_object($object->paymentProduct5403SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5403SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct5403SpecificInput();
            $this->paymentProduct5403SpecificInput = $value->fromObject($object->paymentProduct5403SpecificInput);
        }
        if (property_exists($object, 'paymentProduct5406SpecificInput')) {
            if (!is_object($object->paymentProduct5406SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5406SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct5406SpecificInput();
            $this->paymentProduct5406SpecificInput = $value->fromObject($object->paymentProduct5406SpecificInput);
        }
        if (property_exists($object, 'paymentProduct5408SpecificInput')) {
            if (!is_object($object->paymentProduct5408SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5408SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct5408SpecificInput();
            $this->paymentProduct5408SpecificInput = $value->fromObject($object->paymentProduct5408SpecificInput);
        }
        if (property_exists($object, 'paymentProduct5410SpecificInput')) {
            if (!is_object($object->paymentProduct5410SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5410SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct5410SpecificInput();
            $this->paymentProduct5410SpecificInput = $value->fromObject($object->paymentProduct5410SpecificInput);
        }
        if (property_exists($object, 'paymentProduct5412SpecificInput')) {
            if (!is_object($object->paymentProduct5412SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5412SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct5412SpecificInput();
            $this->paymentProduct5412SpecificInput = $value->fromObject($object->paymentProduct5412SpecificInput);
        }
        if (property_exists($object, 'paymentProduct809SpecificInput')) {
            if (!is_object($object->paymentProduct809SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct809SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct809SpecificInput();
            $this->paymentProduct809SpecificInput = $value->fromObject($object->paymentProduct809SpecificInput);
        }
        if (property_exists($object, 'paymentProduct840SpecificInput')) {
            if (!is_object($object->paymentProduct840SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct840SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct840SpecificInput();
            $this->paymentProduct840SpecificInput = $value->fromObject($object->paymentProduct840SpecificInput);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'redirectionData')) {
            if (!is_object($object->redirectionData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->redirectionData, true) . '\' is not an object');
            }
            $value = new RedirectionData();
            $this->redirectionData = $value->fromObject($object->redirectionData);
        }
        if (property_exists($object, 'requiresApproval')) {
            $this->requiresApproval = $object->requiresApproval;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        if (property_exists($object, 'tokenize')) {
            $this->tokenize = $object->tokenize;
        }
        return $this;
    }
}
