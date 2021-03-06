<?php

use DTS\eBaySDK\Shopping\Types\ReviewDetailsType;

class ReviewDetailsTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReviewDetailsType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Types\ReviewDetailsType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
