<?php
use DTS\eBaySDK\Shopping\Services\ShoppingBaseService;
use DTS\eBaySDK\Mocks\HttpClient;

class ShoppingBaseServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new ShoppingBaseService(new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Services\ShoppingBaseService', $this->obj);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->obj);
    }
}
