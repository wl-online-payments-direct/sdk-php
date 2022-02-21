<?php

namespace OnlinePayments\Sdk;

/**
 * Class ResponseClassMap
 *
 * @package OnlinePayments\Sdk
 */
class ResponseClassMap
{
    /** @var string */
    public $defaultSuccessResponseClassName;

    /** @var string */
    private $defaultErrorResponseClassName = '';

    /** @var string[] */
    protected $responseClassNamesByHttpStatusCode = array();

    /**
     * ResponseClassMap constructor.
     * @param string $defaultSuccessResponseClassName
     */
    public function __construct($defaultSuccessResponseClassName)
    {
        $this->defaultSuccessResponseClassName = $defaultSuccessResponseClassName;
    }

    /**
     * @param string $defaultErrorResponseClassName
     */
    public function setDefaultErrorResponseClassName($defaultErrorResponseClassName)
    {
        $this->defaultErrorResponseClassName = $defaultErrorResponseClassName;
    }

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
