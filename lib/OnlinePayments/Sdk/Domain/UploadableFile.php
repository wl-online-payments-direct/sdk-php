<?php

namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * Class UploadableFile
 *
 * @package OnlinePayments\Sdk\Domain
 */
class UploadableFile
{
    /** @var string */
    private readonly string $fileName;

    /** @var resource|string|callable */
    private readonly mixed $content;

    /** @var string */
    private readonly string $contentType;

    /** @var int */
    private readonly int $contentLength;

    /**
     * @param string $fileName
     * @param resource|string|callable $content
     *        If it's a callable it should take a length argument and return a string that is not larger than the input.
     * @param string $contentType
     * @param int $contentLength
     */
    public function __construct(string $fileName, mixed $content, string $contentType, int $contentLength = -1)
    {
        if (trim($fileName) === '') {
            throw new UnexpectedValueException('fileName is required');
        }
        if (!is_resource($content) && !is_string($content) && !is_callable($content)) {
            throw new UnexpectedValueException('content is required as resource, string or callable');
        }
        if (trim($contentType) === '') {
            throw new UnexpectedValueException('contentType is required');
        }
        $this->fileName = $fileName;
        $this->content = $content;
        $this->contentType = $contentType;
        $contentLength = max($contentLength, -1);
        if ($contentLength === -1 && is_string($content)) {
            $contentLength = strlen($content);
        }
        $this->contentLength = $contentLength;
    }

    /**
     * @return string The name of the file.
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @return resource|string|callable A resource, string or callable with the file's content.
     *         If it's a callable it should take a length argument and return a string that is not larger than the input.
     */
    public function getContent(): mixed
    {
        return $this->content;
    }

    /**
     * @return string The file's content type.
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @return int The file's content length, or -1 if not known.
     */
    public function getContentLength(): int
    {
        return $this->contentLength;
    }
}
