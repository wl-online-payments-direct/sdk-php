<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentLinksResponse extends DataObject
{
    /**
     * @var PaymentLinkResponse[]|null
     */
    public ?array $PaymentLinks = null;

    /**
     * @return PaymentLinkResponse[]|null
     */
    public function getPaymentLinks(): ?array
    {
        return $this->PaymentLinks;
    }

    /**
     * @param PaymentLinkResponse[]|null $value
     */
    public function setPaymentLinks(?array $value): void
    {
        $this->PaymentLinks = $value;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->PaymentLinks !== null) {
            $object->PaymentLinks = [];
            foreach ($this->PaymentLinks as $element) {
                if ($element !== null) {
                    $object->PaymentLinks[] = $element->toObject();
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
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'PaymentLinks')) {
            if (!is_array($object->PaymentLinks) && !is_object($object->PaymentLinks)) {
                throw new UnexpectedValueException('value \'' . print_r($object->PaymentLinks, true) . '\' is not an array or object');
            }
            $this->PaymentLinks = [];
            foreach ($object->PaymentLinks as $element) {
                $value = new PaymentLinkResponse();
                $this->PaymentLinks[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
