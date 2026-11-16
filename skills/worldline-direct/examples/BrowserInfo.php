<?php

declare(strict_types=1);

namespace Examples;

/**
 * Browser values collected with JavaScript on the checkout page.
 */
final readonly class BrowserInfo
{
    public function __construct(
        public int $colorDepth,
        public bool $javaEnabled,
        public int $screenHeight,
        public int $screenWidth,
        public int $timezoneOffsetUtcMinutes,
        public string $locale,
    ) {
    }
}
