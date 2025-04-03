<?php
namespace OnlinePayments\Sdk\Communication;

use PHPUnit\Framework\TestCase;

/**
 * @group obfuscation
 */
class CommunicatorLoggerHelperTest extends TestCase
{
    /**
     * @dataProvider uriProvider
     * @param string $requestUri
     * @param string $endpoint
     * @param string $relativeUriPathWithRequestParameters
     */
    public function testUriSplitting($requestUri, $endpoint, $relativeUriPathWithRequestParameters)
    {
        $communicatorLoggingHelper = new CommunicatorLoggerHelper();
        $this->assertEquals($endpoint, $communicatorLoggingHelper->getEndpoint($requestUri));
        $this->assertEquals(
            $relativeUriPathWithRequestParameters,
            $communicatorLoggingHelper->getRelativeUriPathWithRequestParameters($requestUri)
        );
        $this->assertEquals($requestUri, $endpoint . $relativeUriPathWithRequestParameters);
    }

    /**
     * @return array
     */
    public function uriProvider()
    {
        return array(
            array(
                'https://payment.preprod.online-payments.com/v1/20000/services/testconnection',
                'https://payment.preprod.online-payments.com',
                '/v1/20000/services/testconnection',
            ),
            array(
                'https://payment.preprod.online-payments.com/v1/20000/services/convert/amount?source=EUR&target=USD&amount=1000',
                'https://payment.preprod.online-payments.com',
                '/v1/20000/services/convert/amount?source=EUR&target=USD&amount=1000',
            ),
            array(
                'https://payment.preprod.online-payments.com',
                'https://payment.preprod.online-payments.com',
                ''
            ),
            array(
                '/v1/20000/services/testconnection',
                '',
                '/v1/20000/services/testconnection'
            ),
        );
    }
}
