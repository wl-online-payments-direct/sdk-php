<?php

namespace OnlinePayments\Sdk\Unit\Logging;

use OnlinePayments\Sdk\Communication\CommunicatorLoggerHelper;
use PHPUnit\Framework\TestCase;

/**
 * @group logging
 */
class CommunicatorLoggerHelperTest extends TestCase
{
    /**
     * @dataProvider communicatorLoggerHelperUriProvider
     * @param string $requestUri
     * @param string $endpoint
     * @param string $relativeUriPathWithRequestParameters
     */
    public function testCommunicatorLoggerHelper_UriSplitting_ReturnsCorrectEndpointAndRelativeUri(
        string $requestUri,
        string $endpoint,
        string $relativeUriPathWithRequestParameters
    ) {
        $communicatorLoggingHelper = new CommunicatorLoggerHelper();

        $actualEndpoint = $communicatorLoggingHelper->getEndpoint($requestUri);
        $actualRelativeUri = $communicatorLoggingHelper->getRelativeUriPathWithRequestParameters($requestUri);

        $this->assertEquals($endpoint, $actualEndpoint);

        $this->assertEquals(
            $relativeUriPathWithRequestParameters,
            $actualRelativeUri
        );

        $this->assertEquals(
            $requestUri,
            $endpoint . $relativeUriPathWithRequestParameters
        );
    }

    /**
     * @return array
     */
    public function communicatorLoggerHelperUriProvider(): array
    {
        return [
            [
                'https://payment.preprod.online-payments.com/v1/20000/services/testconnection',
                'https://payment.preprod.online-payments.com',
                '/v1/20000/services/testconnection',
            ],
            [
                'https://payment.preprod.online-payments.com/v1/20000/services/convert/amount?source=EUR&target=USD&amount=1000',
                'https://payment.preprod.online-payments.com',
                '/v1/20000/services/convert/amount?source=EUR&target=USD&amount=1000',
            ],
            [
                'https://payment.preprod.online-payments.com',
                'https://payment.preprod.online-payments.com',
                ''
            ],
            [
                '/v1/20000/services/testconnection',
                '',
                '/v1/20000/services/testconnection'
            ],
        ];
    }
}
