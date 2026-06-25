<?php

namespace OnlinePayments\Sdk\Unit\Communication\Exception;

use OnlinePayments\Sdk\Webhooks\SignatureValidationException;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * @group communication
 * @group exception
 */
class SignatureValidationExceptionTest extends TestCase
{
    public function testConstruct_WithMessage_StoresMessage(): void
    {
        $exception = new SignatureValidationException('Signature validation failed');

        $this->assertSame('Signature validation failed', $exception->getMessage());
    }

    public function testConstruct_WithCause_StoresCause(): void
    {
        $cause = new RuntimeException('Cryptographic error');
        $exception = new SignatureValidationException('Signature validation failed', $cause);

        $this->assertSame($cause, $exception->getPrevious());
    }

    public function testConstruct_WithMessageAndCause_StoresBoth(): void
    {
        $cause = new RuntimeException('Cryptographic error');
        $exception = new SignatureValidationException('Signature validation failed', $cause);

        $this->assertSame('Signature validation failed', $exception->getMessage());
        $this->assertSame($cause, $exception->getPrevious());
    }

    public function testConstruct_WithNullMessage_IsAccepted(): void
    {
        $exception = new SignatureValidationException('');

        $this->assertSame('', $exception->getMessage());
    }

    public function testConstruct_WithNullCause_IsAccepted(): void
    {
        $exception = new SignatureValidationException('message', null);

        $this->assertNull($exception->getPrevious());
    }

    public function testConstruct_WithEmptyMessage_IsAccepted(): void
    {
        $exception = new SignatureValidationException('');

        $this->assertSame('', $exception->getMessage());
    }

    public function testConstruct_SpecialCharactersInMessage_Preserved(): void
    {
        $message = "failed to validate signature 'abc!@#$%'";
        $exception = new SignatureValidationException($message);

        $this->assertSame($message, $exception->getMessage());
    }

    public function testException_IsRuntimeException(): void
    {
        $exception = new SignatureValidationException('Signature validation failed');

        $this->assertInstanceOf(RuntimeException::class, $exception);
    }

    public function testException_IsCatchableAsRuntimeException(): void
    {
        $caught = null;
        try {
            throw new SignatureValidationException('Signature mismatch');
        } catch (RuntimeException $e) {
            $caught = $e;
        }

        $this->assertNotNull($caught);
        $this->assertInstanceOf(SignatureValidationException::class, $caught);
    }

    public function testException_ExceptionChaining_PreservesCauseChain(): void
    {
        $root = new RuntimeException('root');
        $middle = new RuntimeException('middle', 0, $root);
        $exception = new SignatureValidationException('top', $middle);

        $this->assertSame($middle, $exception->getPrevious());
        $this->assertSame($root, $exception->getPrevious()->getPrevious());
    }

    public function testConstruct_WithCause_CauseMessageIsAccessible(): void
    {
        $causeMessage = 'Invalid key format';
        $cause = new RuntimeException($causeMessage);
        $exception = new SignatureValidationException('Signature validation failed', $cause);

        $this->assertSame($causeMessage, $exception->getPrevious()->getMessage());
    }

    public function testException_IsCatchableAsException(): void
    {
        $caught = null;
        try {
            throw new SignatureValidationException('Signature mismatch');
        } catch (\Exception $e) {
            $caught = $e;
        }

        $this->assertNotNull($caught);
        $this->assertInstanceOf(SignatureValidationException::class, $caught);
    }
}
