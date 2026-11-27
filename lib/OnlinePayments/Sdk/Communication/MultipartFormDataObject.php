<?php

namespace OnlinePayments\Sdk\Communication;

use UnexpectedValueException;
use OnlinePayments\Sdk\Domain\UploadableFile;

/**
 * Class MultipartFormDataObject
 *
 * @package OnlinePayments\Sdk\Communication
 */
class MultipartFormDataObject
{
    /** @var string */
    private readonly string $boundary;

    /** @var string */
    private readonly string $contentType;

    /** @var array<string, string> */
    private array $values = [];

    /** @var array<string, UploadableFile> */
    private array $files = [];

    public function __construct()
    {
        $this->boundary = UuidGenerator::generatedUuid();
        $this->contentType = 'multipart/form-data; boundary=' . $this->boundary;
    }

    /**
     * @return string
     */
    public function getBoundary(): string
    {
        return $this->boundary;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @return array<string, string>
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * @return array<string, UploadableFile>
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @param string $parameterName
     * @param string $value
     */
    public function addValue(string $parameterName, string $value): void
    {
        if (trim($parameterName) === '') {
            throw new UnexpectedValueException('parameterName is required');
        }
        if (array_key_exists($parameterName, $this->values) || array_key_exists($parameterName, $this->files)) {
            throw new UnexpectedValueException('Duplicate parameter name: ' . $parameterName);
        }
        $this->values[$parameterName] = $value;
    }

    /**
     * @param string $parameterName
     * @param UploadableFile $file
     */
    public function addFile(string $parameterName, UploadableFile $file): void
    {
        if (trim($parameterName) === '') {
            throw new UnexpectedValueException('parameterName is required');
        }
        if (array_key_exists($parameterName, $this->values) || array_key_exists($parameterName, $this->files)) {
            throw new UnexpectedValueException('Duplicate parameter name: ' . $parameterName);
        }
        $this->files[$parameterName] = $file;
    }
}
