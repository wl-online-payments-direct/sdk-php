<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Merchant\MerchantClientInterface;

/**
 * API specifications
 */
interface ClientInterface
{
    /**
     * @param CommunicatorLogger $communicatorLogger
     */
    function enableLogging(CommunicatorLogger $communicatorLogger);

    function disableLogging();

    /**
     * Resource /v2/{merchantId}
     *
     * @param string $merchantId
     * @return MerchantClientInterface
     */
    public function merchant($merchantId);
}
