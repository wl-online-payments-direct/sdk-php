<?php

namespace OnlinePayments\Sdk\Integration\MultipartFormData;

use Exception;
use OnlinePayments\Sdk\Communication\MultipartFormDataObject;
use OnlinePayments\Sdk\Communication\ResponseBuilder;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Communicator;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\Domain\UploadableFile;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\TestUtil\Unit\MockUtil;
use OnlinePayments\Sdk\TestUtil\Unit\MultipartFormDataWrapper;
use OnlinePayments\Sdk\TestUtil\Unit\MultipartFormResponse;
use OnlinePayments\Sdk\TestUtil\Unit\TestingAuthenticator;

class MultipartFormDataTest extends TestCase
{
    private MockUtil $mockUtil;
    private Communicator $communicator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->mockUtil = new MockUtil();

        $configuration = new CommunicatorConfiguration(
            'apiKey',
            'apiSecret',
            '',
            'OnlinePayments'
        );

        $configuration->setApiEndpoint($this->mockUtil->startMockServerForTest());

        $this->communicator = new Communicator($configuration, new TestingAuthenticator());
    }

    protected function tearDown(): void
    {
        $this->mockUtil->stopMockServerForTest();

        parent::tearDown();
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PostWithFileAndValue_ReturnsResponse(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('file', new UploadableFile('file.txt', $this->createTestFileStream('file content'), 'text/plain'));
        $multipart->addValue('value', 'Hello World');

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = MultipartFormResponse::class;

        /** @var MultipartFormResponse $response */
        $response = $this->communicator->post($responseClassMap, '/post', '', $multipart);

        $this->assertNotNull($response);
        $this->assertEquals('file content', $response->getFiles()->file);
        $this->assertEquals('Hello World', $response->getForm()->value);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PostWithFileAndValue_InvokesBodyHandler(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('file', new UploadableFile('file.txt', $this->createTestFileStream('file content'), 'text/plain'));
        $multipart->addValue('value', 'Hello World');

        $responseClassMap = new ResponseClassMap();
        $responseBuilder = new ResponseBuilder();
        $bodyHandler = function ($data, $headers) use ($responseBuilder) {
            $responseBuilder->setHeaders($headers);
            $responseBuilder->appendBody($data);
        };

        $this->communicator->postWithBinaryResponse($bodyHandler, $responseClassMap, '/post', '', $multipart);

        $response = new MultipartFormResponse();
        $response->fromJson($responseBuilder->getResponse()->getBody());

        $this->assertEquals(1, count((array) $response->getFiles()));
        $this->assertEquals('file content', $response->getFiles()->file);
        $this->assertEquals(1, count((array) $response->getForm()));
        $this->assertEquals('Hello World', $response->getForm()->value);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PostWithTwoFiles_ReturnsBothFiles(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('firstFile', new UploadableFile('first.txt', $this->createTestFileStream('firstContent'), 'text/plain'));
        $multipart->addFile('secondFile', new UploadableFile('second.txt', $this->createTestFileStream('secondContent'), 'text/plain'));

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = MultipartFormResponse::class;

        /** @var MultipartFormResponse $response */
        $response = $this->communicator->post($responseClassMap, '/post', '', $multipart);

        $this->assertNotNull($response);
        $this->assertEquals(2, count((array) $response->getFiles()));
        $this->assertEquals('firstContent', $response->getFiles()->firstFile);
        $this->assertEquals('secondContent', $response->getFiles()->secondFile);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PostWithThreeDifferentTypeFiles_ReturnsAllFiles(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('textFile', new UploadableFile('file.txt', $this->createTestFileStream('text'), 'text/plain'));
        $multipart->addFile('jsonFile', new UploadableFile('file.json', $this->createTestFileStream('json'), 'application/json'));
        $multipart->addFile('xmlFile', new UploadableFile('file.xml', $this->createTestFileStream('xml'), 'application/xml'));

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = MultipartFormResponse::class;

        /** @var MultipartFormResponse $response */
        $response = $this->communicator->post($responseClassMap, '/post', '', $multipart);

        $this->assertNotNull($response);
        $this->assertEquals(3, count((array) $response->getFiles()));
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PostWithTwoValues_ReturnsBothValues(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addValue('firstKey', 'firstValue');
        $multipart->addValue('secondKey', 'secondValue');

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = MultipartFormResponse::class;

        /** @var MultipartFormResponse $response */
        $response = $this->communicator->post($responseClassMap, '/post', '', $multipart);

        $this->assertNotNull($response);
        $this->assertEquals(2, count((array) $response->getForm()));
        $this->assertEquals('firstValue', $response->getForm()->firstKey);
        $this->assertEquals('secondValue', $response->getForm()->secondKey);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PostWithThreeValues_ReturnsAllValues(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addValue('name', 'John');
        $multipart->addValue('age', '30');
        $multipart->addValue('city', 'NYC');

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = MultipartFormResponse::class;

        /** @var MultipartFormResponse $response */
        $response = $this->communicator->post($responseClassMap, '/post', '', $multipart);

        $this->assertNotNull($response);
        $this->assertEquals(3, count((array) $response->getForm()));
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PostWithSingleFileNoValues_ReturnsFile(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('document', new UploadableFile('doc.pdf', $this->createTestFileStream('doc content'), 'application/pdf'));

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = MultipartFormResponse::class;

        /** @var MultipartFormResponse $response */
        $response = $this->communicator->post($responseClassMap, '/post', '', $multipart);

        $this->assertNotNull($response);
        $this->assertEquals('doc content', $response->getFiles()->document);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PostWithSingleValueNoFiles_ReturnsValue(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addValue('message', 'Hello');

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = MultipartFormResponse::class;

        /** @var MultipartFormResponse $response */
        $response = $this->communicator->post($responseClassMap, '/post', '', $multipart);

        $this->assertNotNull($response);
        $this->assertEquals('Hello', $response->getForm()->message);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PostWithPdfFile_ReturnsResponse(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('pdf', new UploadableFile('document.pdf', $this->createTestFileStream('pdf content'), 'application/pdf'));

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = MultipartFormResponse::class;

        $response = $this->communicator->post($responseClassMap, '/post', '', $multipart);

        $this->assertNotNull($response);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PostWithJpegFile_ReturnsResponse(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('image', new UploadableFile('photo.jpg', $this->createTestFileStream('image content'), 'image/jpeg'));

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = MultipartFormResponse::class;

        $response = $this->communicator->post($responseClassMap, '/post', '', $multipart);

        $this->assertNotNull($response);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PostWithJsonFile_ReturnsResponse(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('data', new UploadableFile('data.json', $this->createTestFileStream('json content'), 'application/json'));

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = MultipartFormResponse::class;

        $response = $this->communicator->post($responseClassMap, '/post', '', $multipart);

        $this->assertNotNull($response);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PostWithKnownFileLength_ReturnsResponse(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('file', new UploadableFile('file.txt', $this->createTestFileStream('content'), 'text/plain', 7));

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = MultipartFormResponse::class;

        $response = $this->communicator->post($responseClassMap, '/post', '', $multipart);

        $this->assertNotNull($response);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PostWithUnknownFileLength_ReturnsResponse(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('file', new UploadableFile('file.txt', $this->createTestFileStream('content'), 'text/plain'));

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = MultipartFormResponse::class;

        $response = $this->communicator->post($responseClassMap, '/post', '', $multipart);

        $this->assertNotNull($response);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PostViaRequestWithFileAndValue_ReturnsResponse(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('file', new UploadableFile('file.txt', $this->createTestFileStream('file content'), 'text/plain'));
        $multipart->addValue('value', 'Hello World');

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = MultipartFormResponse::class;

        /** @var MultipartFormResponse $response */
        $response = $this->communicator->post($responseClassMap, '/post', '', new MultipartFormDataWrapper($multipart));

        $this->assertNotNull($response);
        $this->assertEquals(1, count((array) $response->getFiles()));
        $this->assertEquals('file content', $response->getFiles()->file);
        $this->assertEquals(1, count((array) $response->getForm()));
        $this->assertEquals('Hello World', $response->getForm()->value);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PostViaRequestWithFileAndValue_InvokesBodyHandler(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('file', new UploadableFile('file.txt', $this->createTestFileStream('file content'), 'text/plain'));
        $multipart->addValue('value', 'Hello World');

        $responseClassMap = new ResponseClassMap();
        $responseBuilder = new ResponseBuilder();
        $bodyHandler = function ($data, $headers) use ($responseBuilder) {
            $responseBuilder->setHeaders($headers);
            $responseBuilder->appendBody($data);
        };

        $this->communicator->postWithBinaryResponse(
            $bodyHandler,
            $responseClassMap,
            '/post',
            '',
            new MultipartFormDataWrapper($multipart)
        );

        $response = new MultipartFormResponse();
        $response->fromJson($responseBuilder->getResponse()->getBody());

        $this->assertEquals(1, count((array) $response->getFiles()));
        $this->assertEquals('file content', $response->getFiles()->file);
        $this->assertEquals(1, count((array) $response->getForm()));
        $this->assertEquals('Hello World', $response->getForm()->value);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PutWithFileAndValue_ReturnsResponse(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('file', new UploadableFile('file.txt', $this->createTestFileStream('file-content'), 'text/plain'));
        $multipart->addValue('value', 'Hello World');

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = MultipartFormResponse::class;

        /** @var MultipartFormResponse $response */
        $response = $this->communicator->put($responseClassMap, '/put', '', $multipart);

        $this->assertNotNull($response);
        $this->assertEquals(1, count((array) $response->getFiles()));
        $this->assertEquals('file-content', $response->getFiles()->file);
        $this->assertEquals(1, count((array) $response->getForm()));
        $this->assertEquals('Hello World', $response->getForm()->value);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PutWithFileAndValue_InvokesBodyHandler(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('file', new UploadableFile('file.txt', $this->createTestFileStream('file-content'), 'text/plain'));
        $multipart->addValue('value', 'Hello World');

        $responseClassMap = new ResponseClassMap();
        $responseBuilder = new ResponseBuilder();
        $bodyHandler = function ($data, $headers) use ($responseBuilder) {
            $responseBuilder->setHeaders($headers);
            $responseBuilder->appendBody($data);
        };

        $this->communicator->putWithBinaryResponse($bodyHandler, $responseClassMap, '/put', '', $multipart);

        $response = new MultipartFormResponse();
        $response->fromJson($responseBuilder->getResponse()->getBody());

        $this->assertEquals(1, count((array) $response->getFiles()));
        $this->assertEquals('file-content', $response->getFiles()->file);
        $this->assertEquals(1, count((array) $response->getForm()));
        $this->assertEquals('Hello World', $response->getForm()->value);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PutViaRequestWithFileAndValue_ReturnsResponse(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('file', new UploadableFile('file.txt', $this->createTestFileStream('file-content'), 'text/plain'));
        $multipart->addValue('value', 'Hello World');

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = MultipartFormResponse::class;

        /** @var MultipartFormResponse $response */
        $response = $this->communicator->put($responseClassMap, '/put', '', new MultipartFormDataWrapper($multipart));

        $this->assertNotNull($response);
        $this->assertEquals(1, count((array) $response->getFiles()));
        $this->assertEquals('file-content', $response->getFiles()->file);
        $this->assertEquals(1, count((array) $response->getForm()));
        $this->assertEquals('Hello World', $response->getForm()->value);
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataObject_PutViaRequestWithFileAndValue_InvokesBodyHandler(): void
    {
        $multipart = new MultipartFormDataObject();
        $multipart->addFile('file', new UploadableFile('file.txt', $this->createTestFileStream('file-content'), 'text/plain'));
        $multipart->addValue('value', 'Hello World');

        $responseClassMap = new ResponseClassMap();
        $responseBuilder = new ResponseBuilder();
        $bodyHandler = function ($data, $headers) use ($responseBuilder) {
            $responseBuilder->setHeaders($headers);
            $responseBuilder->appendBody($data);
        };

        $this->communicator->putWithBinaryResponse(
            $bodyHandler,
            $responseClassMap,
            '/put',
            '',
            new MultipartFormDataWrapper($multipart)
        );

        $response = new MultipartFormResponse();
        $response->fromJson($responseBuilder->getResponse()->getBody());

        $this->assertEquals(1, count((array) $response->getFiles()));
        $this->assertEquals('file-content', $response->getFiles()->file);
        $this->assertEquals(1, count((array) $response->getForm()));
        $this->assertEquals('Hello World', $response->getForm()->value);
    }

    public function testMultipartFormDataObject_AddFileWithKnownLength_AddsSuccessfully(): void
    {
        $multipart = new MultipartFormDataObject();
        $file = new UploadableFile('file.txt', $this->createTestFileStream('content'), 'text/plain', 7);

        $multipart->addFile('document', $file);

        $this->assertEquals(1, count($multipart->getFiles()));
        $this->assertArrayHasKey('document', $multipart->getFiles());
        $this->assertSame($file, $multipart->getFiles()['document']);
    }

    public function testMultipartFormDataObject_AddFileWithUnknownLength_ContentLengthIsMinusOne(): void
    {
        $multipart = new MultipartFormDataObject();
        $file = new UploadableFile('file.txt', $this->createTestFileStream('content'), 'text/plain');

        $multipart->addFile('document', $file);

        $this->assertEquals(1, count($multipart->getFiles()));
        $this->assertEquals(-1, $multipart->getFiles()['document']->getContentLength());
    }

    public function testMultipartFormDataObject_AddFileWithEmptyParameterName_ThrowsException(): void
    {
        $multipart = new MultipartFormDataObject();
        $file = new UploadableFile('file.txt', $this->createTestFileStream('content'), 'text/plain');

        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('boundary is required');

        $multipart->addFile('', $file);
    }

    public function testMultipartFormDataObject_AddFileDuplicateParameterNameExistingFile_ThrowsException(): void
    {
        $multipart = new MultipartFormDataObject();
        $firstFile = new UploadableFile('first.txt', $this->createTestFileStream('firstContent'), 'text/plain');
        $secondFile = new UploadableFile('second.txt', $this->createTestFileStream('secondContent'), 'text/plain');

        $multipart->addFile('document', $firstFile);

        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('Duplicate parameter name: document');

        $multipart->addFile('document', $secondFile);
    }

    public function testMultipartFormDataObject_AddFileDuplicateParameterNameExistingValue_ThrowsException(): void
    {
        $multipart = new MultipartFormDataObject();
        $file = new UploadableFile('file.txt', $this->createTestFileStream('content'), 'text/plain');

        $multipart->addValue('field', 'value');

        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('Duplicate parameter name: field');

        $multipart->addFile('field', $file);
    }

    public function testMultipartFormDataObject_AddSingleValue_AddsSuccessfully(): void
    {
        $multipart = new MultipartFormDataObject();

        $multipart->addValue('key', 'value');

        $this->assertEquals(1, count($multipart->getValues()));
        $this->assertArrayHasKey('key', $multipart->getValues());
        $this->assertEquals('value', $multipart->getValues()['key']);
    }

    public function testMultipartFormDataObject_AddMultipleValues_AddsAllSuccessfully(): void
    {
        $multipart = new MultipartFormDataObject();

        $multipart->addValue('firstKey', 'firstValue');
        $multipart->addValue('secondKey', 'secondValue');
        $multipart->addValue('thirdKey', 'thirdValue');

        $this->assertEquals(3, count($multipart->getValues()));
        $this->assertEquals('firstValue', $multipart->getValues()['firstKey']);
        $this->assertEquals('secondValue', $multipart->getValues()['secondKey']);
        $this->assertEquals('thirdValue', $multipart->getValues()['thirdKey']);
    }

    public function testMultipartFormDataObject_AddValueWithEmptyParameterName_ThrowsException(): void
    {
        $multipart = new MultipartFormDataObject();

        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('boundary is required');

        $multipart->addValue('', 'value');
    }

    public function testMultipartFormDataObject_AddValueDuplicateParameterNameExistingValue_ThrowsException(): void
    {
        $multipart = new MultipartFormDataObject();

        $multipart->addValue('key', 'value1');

        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('Duplicate parameter name: key');

        $multipart->addValue('key', 'value2');
    }

    public function testMultipartFormDataObject_AddValueDuplicateParameterNameExistingFile_ThrowsException(): void
    {
        $multipart = new MultipartFormDataObject();
        $file = new UploadableFile('file.txt', $this->createTestFileStream('content'), 'text/plain');

        $multipart->addFile('field', $file);

        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('Duplicate parameter name: field');

        $multipart->addValue('field', 'value');
    }

    public function testMultipartFormDataObject_GetBoundaryTwoInstances_GeneratesUniqueBoundaries(): void
    {
        $multipartFirst = new MultipartFormDataObject();
        $multipartSecond = new MultipartFormDataObject();

        $boundaryFirst = $multipartFirst->getBoundary();
        $boundarySecond = $multipartSecond->getBoundary();

        $this->assertNotEquals($boundaryFirst, $boundarySecond);
    }

    public function testMultipartFormDataObject_GetContentType_ContainsBoundary(): void
    {
        $multipart = new MultipartFormDataObject();

        $contentType = $multipart->getContentType();
        $boundary = $multipart->getBoundary();

        $this->assertStringContainsString($boundary, $contentType);
        $this->assertStringStartsWith('multipart/form-data; boundary=', $contentType);
    }

    public function testMultipartFormDataObject_GetContentType_StartsWithMultipartFormData(): void
    {
        $multipart = new MultipartFormDataObject();

        $contentType = $multipart->getContentType();

        $this->assertStringStartsWith('multipart/form-data', $contentType);
        $this->assertStringContainsString('boundary=', $contentType);
    }

    public function testUploadableFile_ValidInputWithKnownLength_SetsAllProperties(): void
    {
        $content = $this->createTestFileStream('test content');

        $file = new UploadableFile('test.txt', $content, 'text/plain', 12);

        $this->assertEquals('test.txt', $file->getFileName());
        $this->assertEquals('text/plain', $file->getContentType());
        $this->assertEquals(12, $file->getContentLength());
        $this->assertNotNull($file->getContent());
    }

    public function testUploadableFile_ValidInputWithoutLength_ContentLengthIsMinusOne(): void
    {
        $content = $this->createTestFileStream('test content');

        $file = new UploadableFile('test.txt', $content, 'text/plain');

        $this->assertEquals('test.txt', $file->getFileName());
        $this->assertEquals('text/plain', $file->getContentType());
        $this->assertEquals(-1, $file->getContentLength());
        $this->assertNotNull($file->getContent());
    }

    public function testUploadableFile_NegativeContentLength_NormalizesToMinusOne(): void
    {
        $content = $this->createTestFileStream('content');

        $file = new UploadableFile('file.txt', $content, 'text/plain', -100);

        $this->assertEquals(-1, $file->getContentLength());
    }

    public function testUploadableFile_EmptyFileName_ThrowsException(): void
    {
        $content = $this->createTestFileStream('content');

        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('fileName is required');

        new UploadableFile('', $content, 'text/plain');
    }

    public function testUploadableFile_NullContent_ThrowsException(): void
    {
        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('content is required as resource, string or callable');

        new UploadableFile('file.txt', null, 'text/plain');
    }

    public function testUploadableFile_EmptyContentType_ThrowsException(): void
    {
        $content = $this->createTestFileStream('content');

        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('contentType is required');

        new UploadableFile('file.txt', $content, '');
    }

    private function createTestFileStream(string $content)
    {
        $stream = fopen('php://memory', 'r+');
        fwrite($stream, $content);
        rewind($stream);

        return $stream;
    }
}
