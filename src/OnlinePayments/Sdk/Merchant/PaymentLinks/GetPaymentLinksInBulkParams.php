<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\PaymentLinks;

use OnlinePayments\Sdk\Communication\RequestObject;

/**
 * Query parameters for Get payment links
 *
 * @package OnlinePayments\Sdk\Merchant\PaymentLinks
 */
class GetPaymentLinksInBulkParams extends RequestObject
{
    /**
     * @var string|null
     */
    public ?string $operationGroupReference = null;

    /**
     * @return string|null
     */
    public function getOperationGroupReference(): ?string
    {
        return $this->operationGroupReference;
    }

    /**
     * @param string|null $value
     */
    public function setOperationGroupReference(?string $value): void
    {
        $this->operationGroupReference = $value;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $array = [];
        if ($this->operationGroupReference != null) {
            $array['operationGroupReference'] = $this->operationGroupReference;
        }
        return $array;
    }
}
