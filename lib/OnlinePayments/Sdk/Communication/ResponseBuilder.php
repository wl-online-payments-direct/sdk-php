<?php
namespace OnlinePayments\Sdk\Communication;

/**
 * Class ResponseBuilder
 *
 * @package OnlinePayments\Sdk\Communication
 */
class ResponseBuilder
{
    /** @var int */
    private $httpStatusCode;

    /** @var array */
    private $headers;

    /** @var string */
    private $body = '';

    /**
     * @param int $httpStatusCode
     */
    public function setHttpStatusCode($httpStatusCode)
    {
        $this->httpStatusCode = $httpStatusCode;
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }

    /**
     * @param string $data
     */
    public function appendBody($data)
    {
        $this->body .= $data;
    }

    /**
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return ConnectionResponseInterface
     */
    public function getResponse()
    {
        return new ConnectionResponse($this->httpStatusCode, $this->headers, $this->body);
    }
}
