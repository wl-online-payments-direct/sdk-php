<?php

namespace OnlinePayments\Sdk\Unit\Communication\Exception;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\DeclinedPaymentException;
use OnlinePayments\Sdk\DeclinedPayoutException;
use OnlinePayments\Sdk\DeclinedRefundException;
use OnlinePayments\Sdk\Domain\APIError;
use OnlinePayments\Sdk\Domain\CreatePaymentResponse;
use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\Domain\ErrorResponse;
use OnlinePayments\Sdk\Domain\PaymentErrorResponse;
use OnlinePayments\Sdk\Domain\PaymentResponse;
use OnlinePayments\Sdk\Domain\PayoutErrorResponse;
use OnlinePayments\Sdk\Domain\PayoutResult;
use OnlinePayments\Sdk\Domain\RefundErrorResponse;
use OnlinePayments\Sdk\Domain\RefundResponse;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ResponseException;
use OnlinePayments\Sdk\ValidationException;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 * @group exception
 */
class ResponseExceptionTest extends TestCase
{
    public function testResponseException_GetErrorId_WithErrorIdInResponse_ReturnsErrorId(): void
    {
        $response = new ErrorResponse();
        $response->errorId = 'err-123';

        $exception = new ResponseException(400, $response);

        $this->assertSame('err-123', $exception->getErrorId());
    }

    public function testResponseException_GetErrorId_WithNullErrorId_ReturnsEmptyString(): void
    {
        $exception = new ResponseException(400, new ErrorResponse());

        $this->assertSame('', $exception->getErrorId());
    }

    public function testResponseException_GetErrors_WithApiErrors_ReturnsErrors(): void
    {
        $apiError = new APIError();
        $response = new ErrorResponse();
        $response->errors = [$apiError];

        $exception = new ResponseException(400, $response);

        $this->assertSame([$apiError], $exception->getErrors());
    }

    public function testResponseException_GetErrors_WithEmptyArray_ReturnsEmptyArray(): void
    {
        $response = new ErrorResponse();
        $response->errors = [];

        $exception = new ResponseException(400, $response);

        $this->assertSame([], $exception->getErrors());
    }

    public function testResponseException_GetErrors_WithMissingErrorsKey_ReturnsEmptyArray(): void
    {
        $response = new class extends DataObject {};

        $exception = new ResponseException(400, $response);

        $this->assertSame([], $exception->getErrors());
    }

    public function testResponseException_GetErrors_WithNonApiErrorItems_ReturnsEmptyArray(): void
    {
        $response = new ErrorResponse();
        $response->errors = ['not-an-api-error'];

        $exception = new ResponseException(400, $response);

        $this->assertSame([], $exception->getErrors());
    }

    public function testResponseException_ToString_ContainsExpectedFields(): void
    {
        $response = new ErrorResponse();
        $response->errorId = 'test-error-id';

        $exception = new ResponseException(400, $response, 'test message');

        $string = (string) $exception;

        $this->assertStringContainsString("exception 'OnlinePayments\\Sdk\\ResponseException'", $string);
        $this->assertStringContainsString("with message 'test message'", $string);
        $this->assertStringContainsString('HTTP status code: 400', $string);
        $this->assertStringContainsString('Response:', $string);
        $this->assertStringContainsString('test-error-id', $string);
    }

    public function testResponseException_GetHttpStatusCode_ReturnsSetValue(): void
    {
        $exception = new ResponseException(503, new ErrorResponse());

        $this->assertSame(503, $exception->getHttpStatusCode());
    }

    public function testResponseException_CustomMessage_IsPreserved(): void
    {
        $exception = new ResponseException(400, new ErrorResponse(), 'Custom SDK message');

        $this->assertSame('Custom SDK message', $exception->getMessage());
    }

    public function testApiException_DefaultMessage_IsSet(): void
    {
        $exception = new ApiException(400, new ErrorResponse());

        $this->assertSame('the payment platform returned an error response', $exception->getMessage());
    }

    public function testValidationException_DefaultMessage_IsSet(): void
    {
        $exception = new ValidationException(400, new ErrorResponse());

        $this->assertSame('the payment platform returned an incorrect request error response', $exception->getMessage());
    }

    public function testAuthorizationException_DefaultMessage_IsSet(): void
    {
        $exception = new AuthorizationException(403, new ErrorResponse());

        $this->assertSame('the payment platform returned an authorization error response', $exception->getMessage());
    }

    public function testReferenceException_DefaultMessage_IsSet(): void
    {
        $exception = new ReferenceException(404, new ErrorResponse());

        $this->assertSame('the payment platform returned a reference error response', $exception->getMessage());
    }

    public function testPlatformException_DefaultMessage_IsSet(): void
    {
        $exception = new PlatformException(500, new ErrorResponse());

        $this->assertSame('the payment platform returned an error response', $exception->getMessage());
    }

    public function testIdempotenceException_DefaultMessage_IsSet(): void
    {
        $exception = new IdempotenceException(409, new ErrorResponse());

        $this->assertSame('the payment platform returned a duplicate request error response', $exception->getMessage());
    }

    public function testIdempotenceException_GetIdempotenceKey_ReturnsSetValue(): void
    {
        $exception = new IdempotenceException(409, new ErrorResponse(), null, 'my-idem-key');

        $this->assertSame('my-idem-key', $exception->getIdempotenceKey());
    }

    public function testIdempotenceException_GetIdempotenceRequestTimestamp_ReturnsSetValue(): void
    {
        $exception = new IdempotenceException(409, new ErrorResponse(), null, 'key', '2026-04-22T10:00:00Z');

        $this->assertSame('2026-04-22T10:00:00Z', $exception->getIdempotenceRequestTimestamp());
    }

    public function testDeclinedPaymentException_Message_WithPaymentIdAndStatus_FormatsCorrectly(): void
    {
        $payment = new PaymentResponse();
        $payment->id = 'pay-001';
        $payment->status = 'DECLINED';

        $paymentResult = new CreatePaymentResponse();
        $paymentResult->payment = $payment;

        $response = new PaymentErrorResponse();
        $response->paymentResult = $paymentResult;

        $exception = new DeclinedPaymentException(402, $response);

        $this->assertSame("declined payment 'pay-001' with status 'DECLINED'", $exception->getMessage());
    }

    public function testDeclinedPaymentException_Message_WithoutPaymentData_UsesFallback(): void
    {
        $exception = new DeclinedPaymentException(402, new PaymentErrorResponse());

        $this->assertSame('the payment platform returned a declined payment response', $exception->getMessage());
    }

    public function testDeclinedPaymentException_GetCreatePaymentResponse_WithPaymentResult_ReturnsIt(): void
    {
        $paymentResult = new CreatePaymentResponse();
        $response = new PaymentErrorResponse();
        $response->paymentResult = $paymentResult;

        $exception = new DeclinedPaymentException(402, $response);

        $this->assertSame($paymentResult, $exception->getCreatePaymentResponse());
    }

    public function testDeclinedPaymentException_GetCreatePaymentResponse_WithoutPaymentResult_ReturnsEmpty(): void
    {
        $exception = new DeclinedPaymentException(402, new PaymentErrorResponse());

        $this->assertInstanceOf(CreatePaymentResponse::class, $exception->getCreatePaymentResponse());
    }

    public function testDeclinedPayoutException_Message_WithPayoutResultIdAndStatus_FormatsCorrectly(): void
    {
        $payoutResult = new PayoutResult();
        $payoutResult->id = 'payout-001';
        $payoutResult->status = 'DECLINED';

        $response = new PayoutErrorResponse();
        $response->payoutResult = $payoutResult;

        $exception = new DeclinedPayoutException(402, $response);

        $this->assertSame("declined payout 'payout-001' with status 'DECLINED'", $exception->getMessage());
    }

    public function testDeclinedPayoutException_Message_WithoutPayoutResult_UsesFallback(): void
    {
        $exception = new DeclinedPayoutException(402, new PayoutErrorResponse());

        $this->assertSame('the payment platform returned a declined payout response', $exception->getMessage());
    }

    public function testDeclinedPayoutException_GetPayoutResult_WithPayoutResult_ReturnsIt(): void
    {
        $payoutResult = new PayoutResult();
        $response = new PayoutErrorResponse();
        $response->payoutResult = $payoutResult;

        $exception = new DeclinedPayoutException(402, $response);

        $this->assertSame($payoutResult, $exception->getPayoutResult());
    }

    public function testDeclinedPayoutException_GetPayoutResult_WithoutPayoutResult_ReturnsEmpty(): void
    {
        $exception = new DeclinedPayoutException(402, new PayoutErrorResponse());

        $this->assertInstanceOf(PayoutResult::class, $exception->getPayoutResult());
    }

    public function testDeclinedRefundException_Message_WithRefundResultIdAndStatus_FormatsCorrectly(): void
    {
        $refundResult = new RefundResponse();
        $refundResult->id = 'refund-001';
        $refundResult->status = 'DECLINED';

        $response = new RefundErrorResponse();
        $response->refundResult = $refundResult;

        $exception = new DeclinedRefundException(402, $response);

        $this->assertSame("declined refund 'refund-001' with status 'DECLINED'", $exception->getMessage());
    }

    public function testDeclinedRefundException_Message_WithoutRefundResult_UsesFallback(): void
    {
        $exception = new DeclinedRefundException(402, new RefundErrorResponse());

        $this->assertSame('the payment platform returned a declined refund response', $exception->getMessage());
    }

    public function testDeclinedRefundException_GetRefundResponse_WithRefundResult_ReturnsIt(): void
    {
        $refundResult = new RefundResponse();
        $response = new RefundErrorResponse();
        $response->refundResult = $refundResult;

        $exception = new DeclinedRefundException(402, $response);

        $this->assertSame($refundResult, $exception->getRefundResponse());
    }

    public function testDeclinedRefundException_GetRefundResponse_WithoutRefundResult_ReturnsEmpty(): void
    {
        $exception = new DeclinedRefundException(402, new RefundErrorResponse());

        $this->assertInstanceOf(RefundResponse::class, $exception->getRefundResponse());
    }
}
