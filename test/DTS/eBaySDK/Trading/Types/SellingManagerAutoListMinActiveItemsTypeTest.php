<?php

use DTS\eBaySDK\Trading\Types\SellingManagerAutoListMinActiveItemsType;

class SellingManagerAutoListMinActiveItemsTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerAutoListMinActiveItemsType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\SellingManagerAutoListMinActiveItemsType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
