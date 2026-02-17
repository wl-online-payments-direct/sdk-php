<?php
namespace OnlinePayments\Sdk\It;

use Exception;
use OnlinePayments\Sdk\Communication\MultipartDataObject;
use OnlinePayments\Sdk\Communication\MultipartFormDataObject;
use OnlinePayments\Sdk\Communication\ResponseBuilder;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Communicator;
use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\Domain\UploadableFile;
use OnlinePayments\Sdk\TestCase;
use OnlinePayments\Sdk\TestUtil\TestingAuthenticator;

/**
 * @group multipart/form-data
 *
 */
class MultipartFormDataTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testMultipartFormDataUploadPostWithMultipartFormDataObjectWithResponse()
    {
        try {
            $communicatorConfiguration = $this->getCommunicatorConfiguration();
            $communicatorConfiguration->setApiEndpoint($this->startMockServerForTest());
            $communicator = new Communicator($communicatorConfiguration, new TestingAuthenticator());

            $multipart = new MultipartFormDataObject();
            $multipart->addFile('file', new UploadableFile('file.txt', 'file-content', 'text/plain'));
            $multipart->addValue('value', 'Hello World');

            $responseClassMap = new ResponseClassMap();
            $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\It\HttpBinResponse';

            /** @var HttpBinResponse $response */
            $response = $communicator->post($responseClassMap, '/post', '', $multipart);

            $this->assertEquals('Hello World', $response->form->value);
            $this->assertEquals('file-content', $response->files->file);

        } finally {
            $this->stopMockServerForTest();
        }
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataUploadPostWithMultipartDataObjectWithResponse()
    {
        try {
            $communicatorConfiguration = $this->getCommunicatorConfiguration();
            $communicatorConfiguration->setApiEndpoint($this->startMockServerForTest());
            $communicator = new Communicator($communicatorConfiguration, new TestingAuthenticator());

            $multipart = new MultipartFormDataObject();
            $multipart->addFile('file', new UploadableFile('file.txt', 'file-content', 'text/plain'));
            $multipart->addValue('value', 'Hello World');

            $responseClassMap = new ResponseClassMap();
            $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\It\HttpBinResponse';

            /** @var HttpBinResponse $response */
            $response = $communicator->post(
                $responseClassMap,
                '/post',
                '',
                new MultipartFormDataWrapper($multipart)
            );

            $this->assertEquals('Hello World', $response->form->value);
            $this->assertEquals('file-content', $response->files->file);

        } finally {
            $this->stopMockServerForTest();
        }
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataUploadPostWithMultipartFormDataObjectWithCallable()
    {
        try {
            $communicatorConfiguration = $this->getCommunicatorConfiguration();
            $communicatorConfiguration->setApiEndpoint($this->startMockServerForTest());
            $communicator = new Communicator($communicatorConfiguration, new TestingAuthenticator());

            $multipart = new MultipartFormDataObject();
            $multipart->addFile('file', new UploadableFile('file.txt', 'file-content', 'text/plain'));
            $multipart->addValue('value', 'Hello World');

            $responseClassMap = new ResponseClassMap();

            $responseBuilder = new ResponseBuilder();
            $bodyHandler = function ($data, $headers) use ($responseBuilder) {
                $responseBuilder->setHeaders($headers);
                $responseBuilder->appendBody($data);
            };

            $communicator->postWithBinaryResponse(
                $bodyHandler,
                $responseClassMap,
                '/post',
                '',
                $multipart
            );

            $response = new HttpBinResponse();
            $response->fromJson($responseBuilder->getResponse()->getBody());

            $this->assertEquals('Hello World', $response->form->value);
            $this->assertEquals('file-content', $response->files->file);

        } finally {
            $this->stopMockServerForTest();
        }
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataUploadPostWithMultipartDataObjectWithCallable()
    {
        try {
            $communicatorConfiguration = $this->getCommunicatorConfiguration();
            $communicatorConfiguration->setApiEndpoint($this->startMockServerForTest());
            $communicator = new Communicator($communicatorConfiguration, new TestingAuthenticator());

            $multipart = new MultipartFormDataObject();
            $multipart->addFile('file', new UploadableFile('file.txt', 'file-content', 'text/plain'));
            $multipart->addValue('value', 'Hello World');

            $responseClassMap = new ResponseClassMap();

            $responseBuilder = new ResponseBuilder();
            $bodyHandler = function ($data, $headers) use ($responseBuilder) {
                $responseBuilder->setHeaders($headers);
                $responseBuilder->appendBody($data);
            };

            $communicator->postWithBinaryResponse(
                $bodyHandler,
                $responseClassMap,
                '/post',
                '',
                new MultipartFormDataWrapper($multipart)
            );

            $response = new HttpBinResponse();
            $response->fromJson($responseBuilder->getResponse()->getBody());

            $this->assertEquals('Hello World', $response->form->value);
            $this->assertEquals('file-content', $response->files->file);

        } finally {
            $this->stopMockServerForTest();
        }
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataUploadPutWithMultipartFormDataObjectWithResponse()
    {
        try {
            $communicatorConfiguration = $this->getCommunicatorConfiguration();
            $communicatorConfiguration->setApiEndpoint($this->startMockServerForTest());
            $communicator = new Communicator($communicatorConfiguration, new TestingAuthenticator());

            $multipart = new MultipartFormDataObject();
            $multipart->addFile('file', new UploadableFile('file.txt', 'file-content', 'text/plain'));
            $multipart->addValue('value', 'Hello World');

            $responseClassMap = new ResponseClassMap();
            $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\It\HttpBinResponse';

            /** @var HttpBinResponse $response */
            $response = $communicator->put($responseClassMap, '/put', '', $multipart);

            $this->assertEquals('Hello World', $response->form->value);
            $this->assertEquals('file-content', $response->files->file);

        } finally {
            $this->stopMockServerForTest();
        }
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataUploadPutWithMultipartDataObjectWithResponse()
    {
        try {
            $communicatorConfiguration = $this->getCommunicatorConfiguration();
            $communicatorConfiguration->setApiEndpoint($this->startMockServerForTest());
            $communicator = new Communicator($communicatorConfiguration, new TestingAuthenticator());

            $multipart = new MultipartFormDataObject();
            $multipart->addFile('file', new UploadableFile('file.txt', 'file-content', 'text/plain'));
            $multipart->addValue('value', 'Hello World');

            $responseClassMap = new ResponseClassMap();
            $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\It\HttpBinResponse';

            /** @var HttpBinResponse $response */
            $response = $communicator->put($responseClassMap, '/put', '', new MultipartFormDataWrapper($multipart));

            $this->assertEquals('Hello World', $response->form->value);
            $this->assertEquals('file-content', $response->files->file);

        } finally {
            $this->stopMockServerForTest();
        }
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataUploadPutWithMultipartFormDataObjectWithCallable()
    {
        try {
            $communicatorConfiguration = $this->getCommunicatorConfiguration();
            $communicatorConfiguration->setApiEndpoint($this->startMockServerForTest());
            $communicator = new Communicator($communicatorConfiguration, new TestingAuthenticator());

            $multipart = new MultipartFormDataObject();
            $multipart->addFile('file', new UploadableFile('file.txt', 'file-content', 'text/plain'));
            $multipart->addValue('value', 'Hello World');

            $responseClassMap = new ResponseClassMap();

            $responseBuilder = new ResponseBuilder();
            $bodyHandler = function ($data, $headers) use ($responseBuilder) {
                $responseBuilder->setHeaders($headers);
                $responseBuilder->appendBody($data);
            };

            $communicator->putWithBinaryResponse($bodyHandler, $responseClassMap, '/put', '', $multipart);

            $response = new HttpBinResponse();
            $response->fromJson($responseBuilder->getResponse()->getBody());

            $this->assertEquals('Hello World', $response->form->value);
            $this->assertEquals('file-content', $response->files->file);

        } finally {
            $this->stopMockServerForTest();
        }
    }

    /**
     * @throws Exception
     */
    public function testMultipartFormDataUploadPutWithMultipartDataObjectWithCallable()
    {
        try {
            $communicatorConfiguration = $this->getCommunicatorConfiguration();
            $communicatorConfiguration->setApiEndpoint($this->startMockServerForTest());
            $communicator = new Communicator($communicatorConfiguration, new TestingAuthenticator());

            $multipart = new MultipartFormDataObject();
            $multipart->addFile('file', new UploadableFile('file.txt', 'file-content', 'text/plain'));
            $multipart->addValue('value', 'Hello World');

            $responseClassMap = new ResponseClassMap();

            $responseBuilder = new ResponseBuilder();
            $bodyHandler = function ($data, $headers) use ($responseBuilder) {
                $responseBuilder->setHeaders($headers);
                $responseBuilder->appendBody($data);
            };

            $communicator->putWithBinaryResponse(
                $bodyHandler,
                $responseClassMap,
                '/put',
                '',
                new MultipartFormDataWrapper($multipart)
            );

            $response = new HttpBinResponse();
            $response->fromJson($responseBuilder->getResponse()->getBody());

            // Access form and files as arrays
            $this->assertEquals('Hello World', $response->form->value);
            $this->assertEquals('file-content', $response->files->file);

        } finally {
            $this->stopMockServerForTest();
        }
    }
}

class HttpBinResponse extends DataObject
{
    public $form;
    public $files;

    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->form)) {
            $object->form = $this->form;
        }
        if (!is_null($this->files)) {
            $object->files = $this->files;
        }
        return $object;
    }

    public function fromObject(object $object): DataObject
    {
        parent::fromObject($object);
        if (property_exists($object, 'form')) {
            $this->form = $object->form;
        }
        if (property_exists($object, 'files')) {
            $this->files = $object->files;
        }
        return $this;
    }
}

class MultipartFormDataWrapper extends MultipartDataObject
{
    private $multipart;

    public function __construct($multipart)
    {
        $this->multipart = $multipart;
    }

    public function toMultipartFormDataObject(): MultipartFormDataObject
    {
        return $this->multipart;
    }
}
