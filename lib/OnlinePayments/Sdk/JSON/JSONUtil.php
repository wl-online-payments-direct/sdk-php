<?php

namespace OnlinePayments\Sdk\JSON;

use JsonException;
use stdClass;
use UnexpectedValueException;

/**
 * Class JSONUtil
 *
 * @package OnlinePayments\Sdk
 */
class JSONUtil
{
    private function __construct() {}

    /**
     * @param string $value
     * @return stdClass
     * @throws UnexpectedValueException
     */
    public static function decode(string $value): stdClass
    {
        try {
            $object = json_decode($value, false, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            throw new UnexpectedValueException('Invalid JSON value: ' . $e->getMessage(), 0, $e);
        }
        if (!$object instanceof stdClass) {
            throw new UnexpectedValueException('Invalid JSON value: expected a JSON object');
        }
        return $object;
    }
}
