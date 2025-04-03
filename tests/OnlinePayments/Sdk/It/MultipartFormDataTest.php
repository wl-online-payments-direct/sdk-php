<?php
namespace OnlinePayments\Sdk\It;

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
    public function testMultipartFormDataUploadPostWithMultipartFormDataObjectWithResponse()
    {
        $communicatorConfiguration = $this->getCommunicatorConfiguration();
        $communicatorConfiguration->setApiEndpoint($this->getHttpBinUrl());
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
    }

    public function testMultipartFormDataUploadPostWithMultipartDataObjectWithResponse()
    {
        $communicatorConfiguration = $this->getCommunicatorConfiguration();
        $communicatorConfiguration->setApiEndpoint($this->getHttpBinUrl());
        $communicator = new Communicator($communicatorConfiguration, new TestingAuthenticator());

        $multipart = new MultipartFormDataObject();
        $multipart->addFile('file', new UploadableFile('file.txt', 'file-content', 'text/plain'));
        $multipart->addValue('value', 'Hello World');

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\It\HttpBinResponse';

        /** @var HttpBinResponse $response */
        $response = $communicator->post($responseClassMap, '/post', '', new MultipartFormDataWrapper($multipart));

        $this->assertEquals('Hello World', $response->form->value);
        $this->assertEquals('file-content', $response->files->file);
    }

    public function testMultipartFormDataUploadPostWithMultipartFormDataObjectWithCallable()
    {
        $communicatorConfiguration = $this->getCommunicatorConfiguration();
        $communicatorConfiguration->setApiEndpoint($this->getHttpBinUrl());
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

        $communicator->postWithBinaryResponse($bodyHandler, $responseClassMap, '/post', '', $multipart);

        $response = new HttpBinResponse();
        $response->fromJson($responseBuilder->getResponse()->getBody());

        $this->assertEquals('Hello World', $response->form->value);
        $this->assertEquals('file-content', $response->files->file);
    }

    public function testMultipartFormDataUploadPostWithMultipartDataObjectWithCallable()
    {
        $communicatorConfiguration = $this->getCommunicatorConfiguration();
        $communicatorConfiguration->setApiEndpoint($this->getHttpBinUrl());
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

        $communicator->postWithBinaryResponse($bodyHandler, $responseClassMap, '/post', '', new MultipartFormDataWrapper($multipart));

        $response = new HttpBinResponse();
        $response->fromJson($responseBuilder->getResponse()->getBody());

        $this->assertEquals('Hello World', $response->form->value);
        $this->assertEquals('file-content', $response->files->file);
    }

    public function testMultipartFormDataUploadPutWithMultipartFormDataObjectWithResponse()
    {
        $communicatorConfiguration = $this->getCommunicatorConfiguration();
        $communicatorConfiguration->setApiEndpoint($this->getHttpBinUrl());
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
    }

    public function testMultipartFormDataUploadPutWithMultipartDataObjectWithResponse()
    {
        $communicatorConfiguration = $this->getCommunicatorConfiguration();
        $communicatorConfiguration->setApiEndpoint($this->getHttpBinUrl());
        $communicator = new Communicator($communicatorConfiguration, new TestingAuthenticator());

        $multipart = new MultipartFormDataObject();
        $multipart->addFile('file', new UploadableFile('file.txt', 'file-content', 'text/plain'));
        $multipart->addValue('value', 'Hello World');

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\It\HttpBinResponse';

        /** @var HttpBinResponse $response */
        $response = $communicator->put($responseClassMap,  '/put', '', new MultipartFormDataWrapper($multipart));

        $this->assertEquals('Hello World', $response->form->value);
        $this->assertEquals('file-content', $response->files->file);
    }

    public function testMultipartFormDataUploadPutWithMultipartFormDataObjectWithCallable()
    {
        $communicatorConfiguration = $this->getCommunicatorConfiguration();
        $communicatorConfiguration->setApiEndpoint($this->getHttpBinUrl());
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
    }

    public function testMultipartFormDataUploadPutWithMultipartDataObjectWithCallable()
    {
        $communicatorConfiguration = $this->getCommunicatorConfiguration();
        $communicatorConfiguration->setApiEndpoint($this->getHttpBinUrl());
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

        $communicator->putWithBinaryResponse($bodyHandler, $responseClassMap, '/put', '', new MultipartFormDataWrapper($multipart));

        $response = new HttpBinResponse();
        $response->fromJson($responseBuilder->getResponse()->getBody());

        $this->assertEquals('Hello World', $response->form->value);
        $this->assertEquals('file-content', $response->files->file);
    }
}

class HttpBinResponse extends DataObject
{
    public $form;
    public $files;

    public function toObject()
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

    public function fromObject($object)
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

    public function toMultipartFormDataObject()
    {
        return $this->multipart;
    }
}
