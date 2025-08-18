<?php
namespace OnlinePayments\Sdk\JSON;

use stdClass;
use UnexpectedValueException;

/**
 * Class JSONUtil
 *
 * @package OnlinePayments\Sdk
 */
class JSONUtil
{
    private function __construct()
    {
    }

    /**
     * @param string $value
     * @return stdClass
     * @throws UnexpectedValueException
     */
    public static function decode(string $value): stdClass
    {
        $object = json_decode($value);
        if (json_last_error()) {
            throw new UnexpectedValueException('Invalid JSON value: ' . json_last_error_msg());
        }
        return $object;
    }
}
