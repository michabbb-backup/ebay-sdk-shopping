<?php
namespace DTS\eBaySDK\Shopping\Mocks;

class Service extends \DTS\eBaySDK\Shopping\Services\ShoppingBaseService
{
    public function __construct(\DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient, $config = array())
    {
        parent::__construct($httpClient, $config);
    }

    public function testOperation()
    {
        return $this->callOperation(
            'testOperation',
            '',
            '\DTS\eBaySDK\Mocks\ComplexClass'
        );
    }
}
