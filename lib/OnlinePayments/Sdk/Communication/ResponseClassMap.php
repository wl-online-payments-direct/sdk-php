<?php
namespace OnlinePayments\Sdk\Communication;

/**
 * Class ResponseClassMap
 *
 * @package OnlinePayments\Sdk\Communication
 */
class ResponseClassMap
{
    /** @var string */
    public $defaultSuccessResponseClassName = '';

    /** @var string */
    public $defaultErrorResponseClassName = '';

    /** @var string[]  */
    private $responseClassNamesByHttpStatusCode = array();

    /**
     * @param int $httpStatusCode
     * @param string $responseClassName
     * @return $this
     */
    public function addResponseClassName($httpStatusCode, $responseClassName)
    {
        $this->responseClassNamesByHttpStatusCode[$httpStatusCode] = $responseClassName;
        return $this;
    }

    /**
     * @param int $httpStatusCode
     * @return string
     */
    public function getResponseClassName($httpStatusCode)
    {
        if (array_key_exists($httpStatusCode, $this->responseClassNamesByHttpStatusCode)) {
            return $this->responseClassNamesByHttpStatusCode[$httpStatusCode];
        }
        if ($httpStatusCode < 400) {
            return $this->defaultSuccessResponseClassName;
        }
        return $this->defaultErrorResponseClassName;
    }
}
