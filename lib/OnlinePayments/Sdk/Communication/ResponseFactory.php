<?php
namespace OnlinePayments\Sdk\Communication;

use UnexpectedValueException;
use OnlinePayments\Sdk\Domain\DataObject;

/**
 * Class ResponseFactory
 *
 * @package OnlinePayments\Sdk\Communication
 */
class ResponseFactory
{
    const MIME_APPLICATION_JSON = 'application/json';
    const MIME_APPLICATION_PROBLEM_JSON = 'application/problem+json';

    /**
     * @param ConnectionResponseInterface $response
     * @param ResponseClassMap $responseClassMap
     * @return DataObject|null
     */
    public function createResponse(ConnectionResponseInterface $response, ResponseClassMap $responseClassMap)
    {
        try {
            return $this->getResponseObject($response, $responseClassMap);
        } catch (UnexpectedValueException $e) {
            throw new InvalidResponseException($response, $e->getMessage());
        }
    }

    /**
     * @param ConnectionResponseInterface $response
     * @param ResponseClassMap $responseClassMap
     * @return DataObject|null
     */
    protected function getResponseObject(ConnectionResponseInterface $response, ResponseClassMap $responseClassMap)
    {
        $httpStatusCode = $response->getHttpStatusCode();
        if (!$httpStatusCode) {
            throw new UnexpectedValueException('HTTP status code is missing');
        }
        $contentType = $response->getHeaderValue('Content-Type');
        if (!$contentType && $httpStatusCode !== 204) {
            throw new UnexpectedValueException('Content type is missing or empty');
        }
        if (!$this->isJsonContentType($contentType) && $httpStatusCode !== 204) {
            throw new UnexpectedValueException(
                "Invalid content type; got '$contentType', expected '" .
                static::MIME_APPLICATION_JSON . "' or '" . static::MIME_APPLICATION_PROBLEM_JSON . "'"
            );
        }
        $responseClassName = $responseClassMap->getResponseClassName($httpStatusCode);
        if (empty($responseClassName)) {
            if ($httpStatusCode < 400) {
                return null;
            }
            throw new UnexpectedValueException('No default error response class name defined');
        }
        if (!class_exists($responseClassName)) {
            throw new UnexpectedValueException("class '$responseClassName' does not exist");
        }
        $responseObject = new $responseClassName();
        if (!$responseObject instanceof DataObject) {
            throw new UnexpectedValueException("class '$responseClassName' is not a 'DataObject'");
        }
        return $responseObject->fromJson($response->getBody());
    }

    private function isJsonContentType($contentType)
    {
        return $contentType === static::MIME_APPLICATION_JSON
            || $contentType === static::MIME_APPLICATION_PROBLEM_JSON
            || substr($contentType, 0, strlen(static::MIME_APPLICATION_JSON)) === static::MIME_APPLICATION_JSON
            || substr($contentType, 0, strlen(static::MIME_APPLICATION_PROBLEM_JSON)) === static::MIME_APPLICATION_PROBLEM_JSON;
    }
}
