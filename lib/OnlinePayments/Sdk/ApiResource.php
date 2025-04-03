<?php
namespace OnlinePayments\Sdk;

/**
 * Class ApiResource
 *
 * @package OnlinePayments\Sdk
 */
class ApiResource
{
    /**
     * @var ApiResource|null
     */
    private $parent;

    /**
     * @var array
     */
    protected $context = array();

    /**
     * Creates a new proxy object for a API resource.
     *
     * @param ApiResource|null $parent The parent resource.
     * @param array $context An associative array that maps URI parameters to values.
     */
    public function __construct(ApiResource $parent = null, $context = array())
    {
        $this->parent = $parent;
        $this->context = $context;
    }

    /**
     * Returns the connection associated with this resource.
     *
     * @return CommunicatorInterface
     */
    protected function getCommunicator()
    {
        return $this->parent->getCommunicator();
    }

    /**
     * Returns the client headers with this resource.
     *
     * @return string
     */
    protected function getClientMetaInfo()
    {
        return $this->parent->getClientMetaInfo();
    }

    /**
     * Converts a URI template to a fully qualified URI by replacing
     * URI parameters ('{...}') by their corresponding value in
     * $this->context.
     *
     * @param string $template The URL template to instantiate.
     * @return string The URL in which the URI parameters have been replaced.
     */
    protected function instantiateUri($template)
    {
        // We assume that API URLs follow the recommendations in
        // RFC 1738, and therefore do not use unencoded { and }.
        foreach ($this->context as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
        return $template;
    }
}
