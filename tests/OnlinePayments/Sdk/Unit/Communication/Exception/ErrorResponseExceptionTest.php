<?php

namespace OnlinePayments\Sdk\Unit\Communication\Exception;

use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Domain\DataObject;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 * @group exception
 */
class ErrorResponseExceptionTest extends TestCase
{
    public function testErrorResponseException_Construct_WithCustomMessage_SetsHttpStatusAndMessageAndErrorResponse(): void
    {
        $error = new class extends DataObject {};

        $exception = new ErrorResponseException(400, $error, 'Custom error');

        $this->assertSame(400, $exception->getHttpStatusCode());
        $this->assertSame($error, $exception->getErrorResponse());
        $this->assertSame('Custom error', $exception->getMessage());
    }

    public function testErrorResponseException_Construct_WithNullMessage_UsesDefaultMessage(): void
    {
        $error = new class extends DataObject {};

        $exception = new ErrorResponseException(500, $error, null);

        $this->assertSame(500, $exception->getHttpStatusCode());
        $this->assertSame($error, $exception->getErrorResponse());
        $this->assertSame('The server returned an error.', $exception->getMessage());
    }

    public function testErrorResponseException_Inheritance_AsRuntimeException_AllowsCatchingAndPreservesHttpStatusCode(): void
    {
        $error = new class extends DataObject {};

        try {
            throw new ErrorResponseException(403, $error);
        } catch (ErrorResponseException $exception) {
            $this->assertSame(403, $exception->getHttpStatusCode());
        }
    }
}
