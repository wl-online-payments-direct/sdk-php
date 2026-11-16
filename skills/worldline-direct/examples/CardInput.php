<?php

declare(strict_types=1);

namespace Examples;

/**
 * Card details as entered by the customer. Never log or store this object.
 */
final readonly class CardInput
{
    /**
     * @param string $expiryDate MMYY, e.g. 1230 for December 2030.
     */
    public function __construct(
        #[\SensitiveParameter] public string $number,
        public string $holderName,
        #[\SensitiveParameter] public string $expiryDate,
        #[\SensitiveParameter] public string $cvv,
    ) {
    }

    /**
     * Keeps card data out of var_dump() and print_r() output.
     *
     * @return array<string, string>
     */
    public function __debugInfo(): array
    {
        return ['card' => '[masked]'];
    }
}
