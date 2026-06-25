<?php

namespace OnlinePayments\Sdk\Unit\Communication\Exception;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\DeclinedPaymentException;
use OnlinePayments\Sdk\DeclinedPayoutException;
use OnlinePayments\Sdk\DeclinedRefundException;
use OnlinePayments\Sdk\Domain\APIError;
use OnlinePayments\Sdk\Domain\CreatePaymentResponse;
use OnlinePayments\Sdk\Domain\ErrorResponse;
use OnlinePayments\Sdk\Domain\PaymentErrorResponse;
use OnlinePayments\Sdk\Domain\PayoutErrorResponse;
use OnlinePayments\Sdk\Domain\PayoutResult;
use OnlinePayments\Sdk\Domain\RefundErrorResponse;
use OnlinePayments\Sdk\Domain\RefundResponse;
use OnlinePayments\Sdk\ExceptionFactory;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 * @group exception
 */
class ExceptionFactoryTest extends TestCase
{
    private ExceptionFactory $factory;

    protected function setUp(): void
    {
        $this->factory = new ExceptionFactory();
    }

    public function testExceptionFactory_CreateException_WithPaymentErrorResponseAndPaymentResult_ReturnsDeclinedPaymentException(): void
    {
        $createPaymentResponse = new CreatePaymentResponse();

        $errorObject = new PaymentErrorResponse();
        $errorObject->errorId = 'payment-error-id';
        $errorObject->paymentResult = $createPaymentResponse;

        $exception = $this->factory->createException(402, $errorObject);

        $this->assertInstanceOf(DeclinedPaymentException::class, $exception);
        $this->assertSame(402, $exception->getHttpStatusCode());
        $this->assertSame($createPaymentResponse, $exception->getCreatePaymentResponse());
    }

    public function testExceptionFactory_CreateException_WithPayoutErrorResponseAndPayoutResult_ReturnsDeclinedPayoutException(): void
    {
        $payoutResult = new PayoutResult();
        $payoutResult->id = 'payout-id';
        $payoutResult->status = 'REJECTED';

        $errorObject = new PayoutErrorResponse();
        $errorObject->errorId = 'payout-error-id';
        $errorObject->payoutResult = $payoutResult;

        $exception = $this->factory->createException(402, $errorObject);

        $this->assertInstanceOf(DeclinedPayoutException::class, $exception);
        $this->assertSame(402, $exception->getHttpStatusCode());
        $this->assertSame($payoutResult, $exception->getPayoutResult());
    }

    public function testExceptionFactory_CreateException_WithRefundErrorResponseAndRefundResult_ReturnsDeclinedRefundException(): void
    {
        $refundResponse = new RefundResponse();
        $refundResponse->id = 'refund-id';
        $refundResponse->status = 'REJECTED';

        $errorObject = new RefundErrorResponse();
        $errorObject->errorId = 'refund-error-id';
        $errorObject->refundResult = $refundResponse;

        $exception = $this->factory->createException(402, $errorObject);

        $this->assertInstanceOf(DeclinedRefundException::class, $exception);
        $this->assertSame(402, $exception->getHttpStatusCode());
        $this->assertSame($refundResponse, $exception->getRefundResponse());
    }

    public function testExceptionFactory_CreateException_WithHttpStatus400_ReturnsValidationException(): void
    {
        $exception = $this->factory->createException(400, new ErrorResponse());

        $this->assertInstanceOf(ValidationException::class, $exception);
    }

    public function testExceptionFactory_CreateException_WithHttpStatus403_ReturnsAuthorizationException(): void
    {
        $exception = $this->factory->createException(403, new ErrorResponse());

        $this->assertInstanceOf(AuthorizationException::class, $exception);
    }

    public function testExceptionFactory_CreateException_WithHttpStatus404_ReturnsReferenceException(): void
    {
        $exception = $this->factory->createException(404, new ErrorResponse());

        $this->assertInstanceOf(ReferenceException::class, $exception);
    }

    public function testExceptionFactory_CreateException_WithHttpStatus409AndIdempotenceError_ReturnsIdempotenceException(): void
    {
        $callContext = $this->createCallContext('idempotence-key');
        $errorObject = $this->createIdempotenceErrorResponse();

        $exception = $this->factory->createException(409, $errorObject, $callContext);

        $this->assertInstanceOf(IdempotenceException::class, $exception);
        $this->assertSame('idempotence-key', $exception->getIdempotenceKey());
        $this->assertSame('2026-04-09T12:00:00Z', $exception->getIdempotenceRequestTimestamp());
    }

    public function testExceptionFactory_CreateException_WithHttpStatus409WithoutIdempotenceData_ReturnsReferenceException(): void
    {
        $callContext = $this->createCallContext('');
        $errorObject = new ErrorResponse();

        $exception = $this->factory->createException(409, $errorObject, $callContext);

        $this->assertInstanceOf(ReferenceException::class, $exception);
    }

    /**
     * @dataProvider platformStatusProvider
     */
    public function testExceptionFactory_CreateException_WithPlatformErrorStatus_ReturnsPlatformException(int $httpStatusCode): void
    {
        $exception = $this->factory->createException($httpStatusCode, new ErrorResponse());

        $this->assertInstanceOf(PlatformException::class, $exception);
    }

    public function platformStatusProvider(): array
    {
        return [
            [500],
            [502],
            [503],
        ];
    }

    public function testExceptionFactory_CreateException_WithUnknownHttpStatus_ReturnsApiException(): void
    {
        $exception = $this->factory->createException(418, new ErrorResponse());

        $this->assertInstanceOf(ApiException::class, $exception);
    }

    public function testExceptionFactory_CreateException_WithHttpStatus410_ReturnsReferenceException(): void
    {
        $exception = $this->factory->createException(410, new ErrorResponse());

        $this->assertInstanceOf(ReferenceException::class, $exception);
    }

    public function testExceptionFactory_CreateException_WithPaymentErrorResponseWithoutResult_At400_ReturnsValidationException(): void
    {
        $errorObject = new PaymentErrorResponse();
        $errorObject->errorId = 'payment-error-id';

        $exception = $this->factory->createException(400, $errorObject);

        $this->assertInstanceOf(ValidationException::class, $exception);
        $this->assertSame(400, $exception->getHttpStatusCode());
        $this->assertSame('payment-error-id', $exception->getErrorId());
    }

    public function testExceptionFactory_CreateException_WithPayoutErrorResponseWithoutResult_At400_ReturnsValidationException(): void
    {
        $errorObject = new PayoutErrorResponse();
        $errorObject->errorId = 'payout-error-id';

        $exception = $this->factory->createException(400, $errorObject);

        $this->assertInstanceOf(ValidationException::class, $exception);
        $this->assertSame(400, $exception->getHttpStatusCode());
        $this->assertSame('payout-error-id', $exception->getErrorId());
    }

    public function testExceptionFactory_CreateException_WithRefundErrorResponseWithoutResult_At400_ReturnsValidationException(): void
    {
        $errorObject = new RefundErrorResponse();
        $errorObject->errorId = 'refund-error-id';

        $exception = $this->factory->createException(400, $errorObject);

        $this->assertInstanceOf(ValidationException::class, $exception);
        $this->assertSame(400, $exception->getHttpStatusCode());
        $this->assertSame('refund-error-id', $exception->getErrorId());
    }

    private function createIdempotenceErrorResponse(): ErrorResponse
    {
        $apiError = new APIError();
        $apiError->errorCode = ExceptionFactory::IDEMPOTENCE_ERROR_CODE;

        $errorResponse = new ErrorResponse();
        $errorResponse->errors = [$apiError];

        return $errorResponse;
    }

    private function createCallContext(string $idempotenceKey): CallContext
    {
        $callContext = $this->getMockBuilder(CallContext::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getIdempotenceKey', 'getIdempotenceRequestTimestamp'])
            ->getMock();

        $callContext->method('getIdempotenceKey')->willReturn($idempotenceKey);
        $callContext->method('getIdempotenceRequestTimestamp')->willReturn('2026-04-09T12:00:00Z');

        return $callContext;
    }
}
