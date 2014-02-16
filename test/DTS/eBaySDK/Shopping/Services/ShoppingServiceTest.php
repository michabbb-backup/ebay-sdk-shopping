<?php

use DTS\eBaySDK\Shopping\Services\ShoppingService;
use DTS\eBaySDK\HttpClient\HttpClient;

class ShoppingServiceTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShoppingService(new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Services\ShoppingService', $this->obj);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Services\ShoppingBaseService', $this->obj);
    }
}
