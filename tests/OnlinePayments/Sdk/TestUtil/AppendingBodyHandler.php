<?php
namespace OnlinePayments\Sdk\TestUtil;

use OnlinePayments\Sdk\BodyHandler;

class AppendingBodyHandler extends BodyHandler
{
    /** @var string */
    private $body;

    protected function initialize(array $headers): void
    {
        $this->body = '';
    }

    protected function doHandleBodyPart(string $bodyPart): void
    {
        $this->body .= $bodyPart;
    }

    public function getBody()
    {
        return $this->body;
    }
}
