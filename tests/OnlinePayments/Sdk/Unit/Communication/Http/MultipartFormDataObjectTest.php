<?php

namespace OnlinePayments\Sdk\Unit\Communication\Http;

use OnlinePayments\Sdk\Communication\MultipartFormDataObject;
use OnlinePayments\Sdk\Domain\UploadableFile;
use PHPUnit\Framework\TestCase;
use UnexpectedValueException;

/**
 * @group communication
 * @group http
 */
class MultipartFormDataObjectTest extends TestCase
{
    public function testConstructor_InitializesEmptyState(): void
    {
        $multipartFromDataObject = new MultipartFormDataObject();

        $this->assertNotEmpty($multipartFromDataObject->getBoundary());
        $this->assertStringContainsString('multipart/form-data', $multipartFromDataObject->getContentType());
        $this->assertSame([], $multipartFromDataObject->getValues());
        $this->assertSame([], $multipartFromDataObject->getFiles());
    }

    public function testAddValue_AddsValueSuccessfully(): void
    {
        $multipartFromDataObject = new MultipartFormDataObject();

        $multipartFromDataObject->addValue('name', 'value');

        $this->assertSame(['name' => 'value'], $multipartFromDataObject->getValues());
    }

    public function testAddFile_AddsFileSuccessfully(): void
    {
        $multipartFromDataObject = new MultipartFormDataObject();

        $file = new UploadableFile('a.txt', 'content', 'text/plain');

        $multipartFromDataObject->addFile('file', $file);

        $this->assertArrayHasKey('file', $multipartFromDataObject->getFiles());
    }

    public function testAddValue_DuplicateKey_ThrowsException(): void
    {
        $multipartFromDataObject = new MultipartFormDataObject();

        $multipartFromDataObject->addValue('x', '1');

        $this->expectException(UnexpectedValueException::class);

        $multipartFromDataObject->addValue('x', '2');
    }

    public function testAddFile_DuplicateKey_ThrowsException(): void
    {
        $multipartFromDataObject = new MultipartFormDataObject();

        $file = new UploadableFile('a.txt', 'content', 'text/plain');

        $multipartFromDataObject->addFile('x', $file);

        $this->expectException(UnexpectedValueException::class);

        $multipartFromDataObject->addFile('x', $file);
    }

    public function testAddValue_EmptyName_ThrowsException(): void
    {
        $multipartFromDataObject = new MultipartFormDataObject();

        $this->expectException(UnexpectedValueException::class);

        $multipartFromDataObject->addValue('', 'value');
    }

    public function testAddValue_WhenFileWithSameNameExists_ThrowsException(): void
    {
        $multipartFromDataObject = new MultipartFormDataObject();

        $file = new UploadableFile('a.txt', 'content', 'text/plain');
        $multipartFromDataObject->addFile('param', $file);

        $this->expectException(UnexpectedValueException::class);

        $multipartFromDataObject->addValue('param', 'value');
    }

    public function testAddFile_WhenValueWithSameNameExists_ThrowsException(): void
    {
        $multipartFromDataObject = new MultipartFormDataObject();

        $multipartFromDataObject->addValue('param', 'value');

        $file = new UploadableFile('a.txt', 'content', 'text/plain');

        $this->expectException(UnexpectedValueException::class);

        $multipartFromDataObject->addFile('param', $file);
    }

    public function testGetContentType_ContainsBoundaryValue(): void
    {
        $multipartFromDataObject = new MultipartFormDataObject();

        $boundary    = $multipartFromDataObject->getBoundary();
        $contentType = $multipartFromDataObject->getContentType();

        $this->assertStringContainsString($boundary, $contentType);
    }
}
