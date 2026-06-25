<?php

namespace OnlinePayments\Sdk\Unit;

use OnlinePayments\Sdk\Domain\UploadableFile;
use PHPUnit\Framework\TestCase;
use UnexpectedValueException;

class UploadableFileTest extends TestCase
{
    public function testUploadableFile_Construct_WithStringContent_SetsAllFieldsAndContentLength(): void
    {
        $file = new UploadableFile(
            'file.txt',
            'hello world',
            'text/plain'
        );

        $this->assertSame('file.txt', $file->getFileName());
        $this->assertSame('hello world', $file->getContent());
        $this->assertSame('text/plain', $file->getContentType());
        $this->assertSame(strlen('hello world'), $file->getContentLength());
    }

    public function testUploadableFile_Construct_WithExplicitContentLength_OverridesCalculatedLength(): void
    {
        $file = new UploadableFile(
            'file.txt',
            'hello world',
            'text/plain',
            5
        );

        $this->assertSame(5, $file->getContentLength());
    }

    public function testUploadableFile_Construct_WithResourceContent_AcceptsResourceAsContent(): void
    {
        $stream = fopen('php://memory', 'r+');
        fwrite($stream, 'abc');

        $file = new UploadableFile(
            'file.txt',
            $stream,
            'text/plain'
        );

        $this->assertIsResource($file->getContent());
        $this->assertSame('file.txt', $file->getFileName());
        $this->assertSame('text/plain', $file->getContentType());
        $this->assertSame(-1, $file->getContentLength());

        fclose($stream);
    }

    public function testUploadableFile_Construct_WithCallableContent_AcceptsCallableAsContent(): void
    {
        $callable = function (int $length) {
            return str_repeat('a', $length);
        };

        $file = new UploadableFile(
            'file.txt',
            $callable,
            'text/plain'
        );

        $this->assertIsCallable($file->getContent());
    }

    public function testUploadableFile_Construct_WithEmptyFileName_ThrowsUnexpectedValueException(): void
    {
        $this->expectException(UnexpectedValueException::class);
        $this->expectExceptionMessage('fileName is required');

        new UploadableFile(
            '',
            'data',
            'text/plain'
        );
    }

    public function testUploadableFile_Construct_WithEmptyContentType_ThrowsUnexpectedValueException(): void
    {
        $this->expectException(UnexpectedValueException::class);
        $this->expectExceptionMessage('contentType is required');

        new UploadableFile(
            'file.txt',
            'data',
            ''
        );
    }

    public function testUploadableFile_Construct_WithWhitespaceContentType_ThrowsUnexpectedValueException(): void
    {
        $this->expectException(UnexpectedValueException::class);
        $this->expectExceptionMessage('contentType is required');

        new UploadableFile(
            'file.txt',
            'data',
            '   '
        );
    }

    public function testUploadableFile_Construct_WithInvalidContent_ThrowsException(): void
    {
        $this->expectException(UnexpectedValueException::class);

        $invalidContent = 12345;

        new UploadableFile(
            'file.txt',
            $invalidContent,
            'text/plain'
        );
    }

    public function testUploadableFile_Construct_WithWhitespaceFileName_ThrowsUnexpectedValueException(): void
    {
        $this->expectException(UnexpectedValueException::class);
        $this->expectExceptionMessage('fileName is required');

        new UploadableFile(
            '   ',
            'data',
            'text/plain'
        );
    }
}
