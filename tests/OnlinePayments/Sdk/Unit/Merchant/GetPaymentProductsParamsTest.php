<?php

namespace OnlinePayments\Sdk\Unit\Merchant;

use OnlinePayments\Sdk\Merchant\Products\GetPaymentProductsParams;
use PHPUnit\Framework\TestCase;

class GetPaymentProductsParamsTest extends TestCase
{
    public function testToArray_WithFalseAndZero_IncludesThem(): void
    {
        $params = (new GetPaymentProductsParams())
            ->withIsRecurring(false)
            ->withAmount(0);

        $array = $params->toArray();

        $this->assertSame('false', $array['isRecurring']);
        $this->assertSame(0, $array['amount']);
    }

    public function testToArray_WithNull_OmitsParameter(): void
    {
        $params = (new GetPaymentProductsParams())
            ->withCountryCode('NL')
            ->withCountryCode(null);

        $this->assertArrayNotHasKey('countryCode', $params->toArray());
    }

    public function testAddHide_AddsSingleElementPerCall(): void
    {
        $params = new GetPaymentProductsParams();
        $params->addHide('fields');
        $params->addHide('accountsOnFile');

        $this->assertSame(['fields', 'accountsOnFile'], $params->toArray()['hide']);
    }
}
