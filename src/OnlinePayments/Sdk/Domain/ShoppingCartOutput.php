<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ShoppingCartOutput extends DataObject
{
    /**
     * @var LineItemDetail[]|null
     */
    public ?array $lineItemDetails = null;

    /**
     * @return LineItemDetail[]|null
     */
    public function getLineItemDetails(): ?array
    {
        return $this->lineItemDetails;
    }

    /**
     * @param LineItemDetail[]|null $value
     */
    public function setLineItemDetails(?array $value): void
    {
        $this->lineItemDetails = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->lineItemDetails)) {
            $object->lineItemDetails = [];
            foreach ($this->lineItemDetails as $element) {
                if (!is_null($element)) {
                    $object->lineItemDetails[] = $element->toObject();
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
    public function fromObject(object $object): ShoppingCartOutput
    {
        parent::fromObject($object);
        if (property_exists($object, 'lineItemDetails')) {
            if (!is_array($object->lineItemDetails) && !is_object($object->lineItemDetails)) {
                throw new UnexpectedValueException('value \'' . print_r($object->lineItemDetails, true) . '\' is not an array or object');
            }
            $this->lineItemDetails = [];
            foreach ($object->lineItemDetails as $element) {
                $value = new LineItemDetail();
                $this->lineItemDetails[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
