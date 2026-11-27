<?php

namespace OnlinePayments\Sdk\Domain;

use Exception;
use JsonException;
use stdClass;
use Throwable;
use UnexpectedValueException;
use OnlinePayments\Sdk\JSON\JSONUtil;
use OnlinePayments\Sdk\Logging\BodyObfuscator;

/**
 * Class DataObject
 *
 * @package OnlinePayments\Sdk\Domain
 */
abstract class DataObject
{
    /**
     * @return string
     * @throws UnexpectedValueException
     */
    public function toJson(): string
    {
        try {
            return json_encode($this->toObject(), JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            throw new UnexpectedValueException(
                'Could not encode ' . static::class . ' as JSON: ' . $e->getMessage(),
                0,
                $e,
            );
        }
    }

    /**
     * @param string $value
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromJson(string $value): static
    {
        $object = JSONUtil::decode($value);
        return $this->fromObject($object);
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        return new stdClass();
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): static
    {
        return $this;
    }

    /**
     * @param string $name
     * @param mixed $value
     * @throws Exception
     */
    public function __set(string $name, mixed $value): void
    {
        throw new Exception('Cannot add new property ' . $name . ' to instances of class ' . static::class);
    }

    /**
     * Returns the properties for var_dump and print_r, with sensitive values masked.
     *
     * @return array<string, mixed>
     */
    public function __debugInfo(): array
    {
        try {
            $obfuscated = (new BodyObfuscator())->obfuscateBody(BodyObfuscator::MIME_APPLICATION_JSON, $this->toJson());
            $properties = json_decode($obfuscated, true);
            return is_array($properties) ? $properties : [];
        } catch (Throwable) {
            return [];
        }
    }
}
