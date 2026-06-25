<?php

namespace OnlinePayments\Sdk\Unit\Communication\Json;

use OnlinePayments\Sdk\JSON\JSONUtil;
use PHPUnit\Framework\TestCase;
use stdClass;
use UnexpectedValueException;

/**
 * @group communication
 * @group json
 */
class JSONUtilTest extends TestCase
{
    public function testJSONUtil_Decode_ValidJson_ReturnsStdClass()
    {
        $json = '{"foo":"bar"}';
        $result = JSONUtil::decode($json);
        $this->assertEquals('bar', $result->foo);
    }

    public function testJSONUtil_Decode_EmptyJson_ReturnsEmptyStdClass()
    {
        $json = '{}';
        $result = JSONUtil::decode($json);
        $this->assertEmpty(get_object_vars($result));
    }

    public function testJSONUtil_Decode_InvalidJson_ThrowsUnexpectedValueException()
    {
        $this->expectException(UnexpectedValueException::class);
        JSONUtil::decode('{invalid json}');
    }

    public function testJSONUtil_Decode_ArrayJson_ReturnsStdClassWithProperties()
    {
        $json = '{"foo":"bar","baz":123}';
        $result = JSONUtil::decode($json);
        $this->assertEquals('bar', $result->foo);
        $this->assertEquals(123, $result->baz);
    }

    public function testJSONUtil_Decode_NestedJson_ReturnsNestedStdClass()
    {
        $json = '{"outer":{"inner":"value"}}';
        $result = JSONUtil::decode($json);
        $this->assertInstanceOf(stdClass::class, $result->outer);
        $this->assertEquals('value', $result->outer->inner);
    }
}
