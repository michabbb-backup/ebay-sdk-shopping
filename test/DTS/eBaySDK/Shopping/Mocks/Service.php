<?php
namespace DTS\eBaySDK\Shopping\Mocks;

class Service extends \DTS\eBaySDK\Shopping\Services\ShoppingBaseService
{
    public function __construct($config = array(), \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient = null)
    {
        parent::__construct($config, $httpClient);
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
