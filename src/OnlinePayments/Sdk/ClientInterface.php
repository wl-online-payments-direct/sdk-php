<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Logging\CommunicatorLogger;
use OnlinePayments\Sdk\Merchant\MerchantClientInterface;

/**
 * Payment platform client interface.
 */
interface ClientInterface
{
    /**
     * @param CommunicatorLogger $communicatorLogger
     */
    public function enableLogging(CommunicatorLogger $communicatorLogger): void;

    /**
     * @return void
     */
    public function disableLogging(): void;

    /**
     * @param string $clientMetaInfo
     * @return $this
     */
    public function setClientMetaInfo(string $clientMetaInfo): ClientInterface;

    /**
     * Resource /v2/{merchantId}
     *
     * @param string $merchantId
     * @return MerchantClientInterface
     */
    public function merchant(string $merchantId): MerchantClientInterface;
}
