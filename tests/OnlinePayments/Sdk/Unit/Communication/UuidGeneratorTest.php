<?php

namespace OnlinePayments\Sdk\Unit\Communication;

use OnlinePayments\Sdk\Communication\UuidGenerator;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 */
class UuidGeneratorTest extends TestCase
{
    public function testUuidGenerator_GeneratedUuid_ReturnsValidUuidV4()
    {
        $uuidV4ValidationRegex = '/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/';
        $this->assertMatchesRegularExpression($uuidV4ValidationRegex, UuidGenerator::generatedUuid());
    }

    public function testUuidGenerator_GeneratedUuid_ReturnsUniqueValuesOnConsecutiveCalls()
    {
        $this->assertNotEquals(UuidGenerator::generatedUuid(), UuidGenerator::generatedUuid());
    }
}
