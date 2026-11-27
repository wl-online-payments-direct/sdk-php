<?php

namespace OnlinePayments\Sdk\Unit\Communication\Transport;

use InvalidArgumentException;
use OnlinePayments\Sdk\Authentication\Authenticator;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\ConnectionResponse;
use OnlinePayments\Sdk\Communication\RequestObject;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Communicator;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\Domain\ErrorResponse;
use OnlinePayments\Sdk\Merchant\Products\GetPaymentProductsParams;
use OnlinePayments\Sdk\TestUtil\Unit\TestingConnection;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('communication')]
#[Group('transport')]
class CommunicatorRequestTest extends TestCase
{
    /** @var array<string, string> */
    private array $signedHeaders = [];

    private string $signedUriPath = '';

    public function testCommunicator_IdempotenceKeyWithLineBreak_IsRejected(): void
    {
        $callContext = new CallContext();
        $callContext->setIdempotenceKey("key\r\nX-Evil: 1");

        $this->expectException(InvalidArgumentException::class);

        $this->get(callContext: $callContext);
    }

    public function testCommunicator_ClientMetaInfoWithLineBreak_IsRejected(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->get(clientMetaInfo: "info\nX-Evil: 1");
    }

    public function testCommunicator_AuthorizationWithLineBreak_IsRejected(): void
    {
        $authenticator = new class implements Authenticator {
            public function getAuthorization(string $httpMethod, string $uriPath, array $requestHeaders = []): string
            {
                return "signature\r\nX-Evil: 1";
            }
        };

        $this->expectException(InvalidArgumentException::class);

        $this->get(authenticator: $authenticator);
    }

    public function testCommunicator_EmptyArrayQueryParameter_IsOmittedWithoutQuestionMark(): void
    {
        $this->get(requestParameters: (new GetPaymentProductsParams())->withHide([]));

        $this->assertSame('/v2/m1/products', $this->signedUriPath);
    }

    private function get(
        string $clientMetaInfo = '',
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null,
        ?Authenticator $authenticator = null,
    ): void {
        $defaultAuthenticator = new class implements Authenticator {
            /** @var array<string, string> */
            public array $signedHeaders = [];

            public string $signedUriPath = '';

            public function getAuthorization(string $httpMethod, string $uriPath, array $requestHeaders = []): string
            {
                $this->signedHeaders = $requestHeaders;
                $this->signedUriPath = $uriPath;
                return '';
            }
        };
        $authenticator ??= $defaultAuthenticator;

        $communicator = new Communicator(
            new CommunicatorConfiguration('apiKeyId', 'secretKey', 'https://example.com', 'integrator'),
            $authenticator,
            new TestingConnection(new ConnectionResponse(200, ['Content-Type' => 'application/json'], '{}')),
        );

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = ErrorResponse::class;
        $responseClassMap->defaultErrorResponseClassName = ErrorResponse::class;

        $communicator->get($responseClassMap, '/v2/m1/products', $clientMetaInfo, $requestParameters, $callContext);

        $this->signedHeaders = $defaultAuthenticator->signedHeaders;
        $this->signedUriPath = $defaultAuthenticator->signedUriPath;
    }
}
