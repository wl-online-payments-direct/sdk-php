<?php

namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Domain\APIError;
use OnlinePayments\Sdk\Domain\ErrorResponse;
use RuntimeException;

/**
 * Class ResponseException
 *
 * @package OnlinePayments\Sdk
 */
class ResponseException extends RuntimeException
{
    /** @var int */
    private $httpStatusCode;

    /**
     * @var DataObject
     */
    private $response;

    /**
     * @param int $httpStatusCode
     * @param DataObject $response
     * @param string $message
     */
    public function __construct($httpStatusCode, DataObject $response, $message = null)
    {
        if (is_null($message)) {
            $message = 'The server returned an error.';
        }
        parent::__construct($message);
        $this->httpStatusCode = $httpStatusCode;
        $this->response = $response;
    }

    public function __toString()
    {
        return sprintf(
            "exception '%s' with message '%s'. in %s:%d\nHTTP status code: %s\nResponse:\n%s\nStack trace:\n%s",
            __CLASS__,
            $this->getMessage(),
            $this->getFile(),
            $this->getLine(),
            $this->getHttpStatusCode(),
            $this->getResponse()->toJson(),
            $this->getTraceAsString()
        );
    }

    /**
     * @return int
     */
    public function getHttpStatusCode()
    {
        return $this->httpStatusCode;
    }

    /**
     * @return DataObject
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return string
     */
    public function getErrorId()
    {
        $responseVariables = (array)$this->getResponse()->toObject();
        if (!array_key_exists('errorId', $responseVariables)) {
            return '';
        }
        return $responseVariables['errorId'];
    }

    /**
     * @return APIError[]
     */
    public function getErrors()
    {
        $response = $this->getResponse();
        if (!$response instanceof ErrorResponse) {
            return array();
        }
        $errors = $response->getErrors();
        if (!is_array($errors)) {
            return array();
        }
        foreach ($errors as $error) {
            if (!($error instanceof APIError)) {
                return array();
            }
        }
        return $errors;
    }
}
