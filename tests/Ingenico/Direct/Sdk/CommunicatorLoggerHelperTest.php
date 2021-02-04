<?php
namespace Ingenico\Direct\Sdk;

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
                'https://preprod.direct.ingenico.com/v2/1/services/testconnection',
                'https://preprod.direct.ingenico.com',
                '/v2/1/services/testconnection',
            ),
            array(
                'https://preprod.direct.ingenico.com/v2/1/services/convert/amount?source=EUR&target=USD&amount=1000',
                'https://preprod.direct.ingenico.com',
                '/v2/1/services/convert/amount?source=EUR&target=USD&amount=1000',
            ),
            array(
                'https://preprod.direct.ingenico.com',
                'https://preprod.direct.ingenico.com',
                ''
            ),
            array(
                '/v2/1/services/testconnection',
                '',
                '/v2/1/services/testconnection'
            ),
        );
    }
}
