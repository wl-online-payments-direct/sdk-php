<?php

namespace OnlinePayments\Sdk;

use Exception;

class IdempotenceTest extends OnlinePaymentsTestCase
{
    /**
     * @throws Exception
     */
    public function testRequestHeadersWithIdempotenceKey()
    {
        $callContext = new CallContext();
        $requestHeaderGenerator = new RequestHeaderGenerator(
            $this->getCommunicatorConfiguration(),
            'GET',
            'https://example.com',
            '',
            $callContext
        );
        $idempotenceKey = 'test';
        $idempotenceKeyHeaderName = 'X-GCS-Idempotence-Key';
        $authorizationHeaderName = 'Authorization';
        $requestHeaders = $requestHeaderGenerator->generateRequestHeaders();
        $this->assertArrayNotHasKey($idempotenceKeyHeaderName, $requestHeaders);
        $this->assertArrayHasKey($authorizationHeaderName, $requestHeaders);
        $authorizationValueWithoutIdempotence = $requestHeaders[$authorizationHeaderName];
        $callContext->setIdempotenceKey('test');
        $requestHeaders = $requestHeaderGenerator->generateRequestHeaders();
        $this->assertArrayHasKey($idempotenceKeyHeaderName, $requestHeaders);
        $this->assertEquals($idempotenceKey, $requestHeaders[$idempotenceKeyHeaderName]);
        $this->assertArrayHasKey($authorizationHeaderName, $requestHeaders);
        $authorizationValueWithIdempotence = $requestHeaders[$authorizationHeaderName];
        $this->assertNotEquals($authorizationValueWithoutIdempotence, $authorizationValueWithIdempotence);
    }

    /**
     * @throws Exception
     */
    public function testGetWithCallContext()
    {
        $callContext = new CallContext();
        $idempotenceKey = 'test';
        $idempotenceRequestTimestamp = '12345';
        $callContext->setIdempotenceKey($idempotenceKey);
        $responseHeaders = array(
            'Content-Type' => 'application/json',
            'X-GCS-Idempotence-Request-Timestamp' => $idempotenceRequestTimestamp
        );
        $responseBody = <<<EOD
{
    "creationOutput": {
        "additionalReference": "ref1",
        "externalReference": "extRef1"
    },
    "payment": {
        "id": "1_1",
        "paymentOutput": {
            "amountOfMoney": {
                "amount": 2345,
                "currencyCode": "CAD"
            },
            "references": {
                "merchantReference": "0"
            },
            "paymentMethod": "card",
            "cardPaymentMethodSpecificOutput": {
                "paymentProductId": 1,
                "authorisationCode": "OK1131",
                "card": {
                    "cardNumber": "************9176",
                    "expiryDate": "1230"
                },
                "fraudResults": {
                    "fraudServiceResult": "error",
                    "avsResult": "X",
                    "cvvResult": "M"
                }
            }
        },
        "status": "PENDING_APPROVAL",
        "statusOutput": {
            "isAuthorized": true,
            "isCancellable": true,
            "statusCodeChangeDateTime": "20200101000000"
        }
    }
}
EOD;
        $response = new DefaultConnectionResponse(201, $responseHeaders, $responseBody);
        $communicatorConfiguration = $this->getMockCommunicatorConfiguration();
        $communicator = new Communicator(new TestingConnection($response), $communicatorConfiguration);
        $communicator->get(new ResponseClassMap(''), '/', '', null, $callContext);
        $this->assertEquals($idempotenceKey, $callContext->getIdempotenceKey());
        $this->assertEquals($idempotenceRequestTimestamp, $callContext->getIdempotenceRequestTimestamp());
    }

    /**
     * @throws Exception
     */
    public function testIdempotenceException()
    {
        $callContext = new CallContext();
        $callContext->setIdempotenceKey('test');
        $responseHeaders = array(
            'Content-Type' => 'application/json',
            'X-GCS-Idempotence-Request-Timestamp' => '12345'
        );
        $responseBody = <<<EOD
{
   "errorId" : "75b0f13a-04a5-41b3-83b8-b295ddb23439-000013c6",
   "errors" : [ {
      "code" : "1409",
      "message" : "DUPLICATE REQUEST IN PROGRESS",
      "httpStatusCode" : 409
   } ]
}
EOD;
        $connectionResponse = new DefaultConnectionResponse(409, $responseHeaders, $responseBody);
        $communicatorConfiguration = $this->getMockCommunicatorConfiguration();
        $communicator = new Communicator(new TestingConnection($connectionResponse), $communicatorConfiguration);
        try {
            $communicator->get(new ResponseClassMap(''), '/', '', null, $callContext);
            $this->fail('expected IdempotenceException');
        } catch (IdempotenceException $exception) {
            $this->assertEquals($callContext->getIdempotenceKey(), $exception->getIdempotenceKey());
            $this->assertNotEmpty($exception->getIdempotenceRequestTimestamp());
            $this->assertEquals(
                $callContext->getIdempotenceRequestTimestamp(),
                $exception->getIdempotenceRequestTimestamp()
            );
        }
    }

    public function testReferenceException()
    {
        $callContext = new CallContext();
        $callContext->setIdempotenceKey('test');
        $responseHeaders = array(
            'Content-Type' => 'application/json',
            'X-GCS-Idempotence-Request-Timestamp' => '12345'
        );
        $responseBody = <<<EOD
{
   "errorId" : "75b0f13a-04a5-41b3-83b8-b295ddb23439-000013c6",
   "errors" : [ {
      "code" : "1400",
      "message" : "DUPLICATE REQUEST IN PROGRESS",
      "httpStatusCode" : 409
   } ]
}
EOD;
        $connectionResponse = new DefaultConnectionResponse(409, $responseHeaders, $responseBody);
        $responseFactory = new ResponseFactory();
        $responseExceptionFactory = new ResponseExceptionFactory();
        $exception = $responseExceptionFactory->createException(
            $connectionResponse->getHttpStatusCode(),
            $responseFactory->createResponse($connectionResponse, new ResponseClassMap('')),
            $callContext
        );
        $this->assertInstanceOf('\OnlinePayments\Sdk\ReferenceException', $exception);
    }

    /**
     * @return CommunicatorConfiguration
     */
    protected function getMockCommunicatorConfiguration()
    {
        return $this->getMockBuilder('\OnlinePayments\Sdk\CommunicatorConfiguration')->disableOriginalConstructor()->getMock();
    }
}
