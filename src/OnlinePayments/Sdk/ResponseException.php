<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk;

use RuntimeException;
use OnlinePayments\Sdk\Domain\APIError;
use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\Logging\BodyObfuscator;
use Throwable;

/**
 * Class ResponseException
 *
 * @package OnlinePayments\Sdk
 */
class ResponseException extends RuntimeException
{
    /**
     * @var int
     */
    private int $httpStatusCode;

    /**
     * @var DataObject
     */
    private DataObject $response;

    /**
     * @param int            $httpStatusCode
     * @param DataObject     $response
     * @param string|null    $message
     * @param Throwable|null $previous
     */
    public function __construct(
        int        $httpStatusCode,
        DataObject $response,
        ?string    $message = null,
        ?Throwable $previous = null
    ) {
        if ($message === null) {
            $message = 'the payment platform returned an error response';
        }
        parent::__construct($message, 0, $previous);
        $this->httpStatusCode = $httpStatusCode;
        $this->response = $response;
    }

    /**
     * @return string
     */
    #[\Override]
    public function __toString(): string
    {
        return sprintf(
            "%s: %s in %s:%d\nHTTP status code: %s\nResponse:\n%s\nStack trace:\n%s",
            static::class,
            $this->getMessage(),
            $this->getFile(),
            $this->getLine(),
            $this->getHttpStatusCode(),
            $this->getObfuscatedResponse(),
            $this->getTraceAsString()
        );
    }

    /**
     * Returns the response as JSON, with sensitive values masked.
     *
     * @return string
     */
    private function getObfuscatedResponse(): string
    {
        try {
            $json = $this->getResponse()->toJson();
        } catch (Throwable $e) {
            return '<the response could not be obfuscated: ' . $e->getMessage() . '>';
        }
        return (new BodyObfuscator())->obfuscateBody(BodyObfuscator::MIME_APPLICATION_JSON, $json);
    }

    /**
     * @return int
     */
    public function getHttpStatusCode(): int
    {
        return $this->httpStatusCode;
    }

    /**
     * @return DataObject
     */
    public function getResponse(): DataObject
    {
        return $this->response;
    }

    /**
     * @return string|null
     */
    public function getErrorId(): ?string
    {
        $responseVariables = get_object_vars($this->getResponse());
        if (!array_key_exists('errorId', $responseVariables)) {
            return '';
        }
        return $responseVariables['errorId'] ?? '';
    }

    /**
     * @return APIError[]
     */
    public function getErrors(): array
    {
        $responseVariables = get_object_vars($this->getResponse());
        if (!array_key_exists('errors', $responseVariables)) {
            return [];
        }
        $errors = $responseVariables['errors'];
        if (!is_array($errors)) {
            return [];
        }
        foreach ($errors as $e) {
            if (!($e instanceof APIError)) {
                return [];
            }
        }
        return $errors;
    }
}
