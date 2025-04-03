<?php
namespace OnlinePayments\Sdk\Communication;

/**
 * Class ResponseHeaderBuilder
 *
 * @package OnlinePayments\Sdk\Communication
 */
class ResponseHeaderBuilder
{
    /** @var string */
    private $headerString = '';

    /** @var array|null */
    private $headers = null;

    /** @var string|null */
    private $contentType = null;

    /**
     * @param string $data
     */
    public function append($data)
    {
        $this->headerString .= $data;
        $this->headers = null;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        if (is_null($this->headers)) {
            $this->headers = HttpHeaderHelper::parseRawHeaders(explode("\r\n", $this->headerString));
        }
        return $this->headers;
    }

    /**
     * @return string|null
     */
    public function getContentType()
    {
        if (is_null($this->contentType)) {
            $headers = $this->getHeaders();
            foreach ($headers as $headerKey => $headerValue) {
                if (strtolower($headerKey) === 'content-type') {
                    $this->contentType = $headerValue;
                    break;
                }
            }
        }
        return $this->contentType;
    }
}
