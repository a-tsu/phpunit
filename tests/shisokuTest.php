<?php
require './vendor/autoload.php';
/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-09-16 at 13:59:07.
 */
	include_once("shisoku.inc");
class shisokuTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var shisoku
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new shisoku(6, 2);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers shisoku::setNum
     */
    public function testSetNum()
    {
        $this->assertEquals(1, 1);
    }

    /**
     * @covers shisoku::add
     */
    public function testAdd()
    {
        $this->assertEquals(8, $this->object->add());
    }

    /**
     * @covers shisoku::sub
     */
    public function testSub()
    {
        $this->assertEquals(4, $this->object->sub());
    }

    /**
     * @covers shisoku::mul
     */
    public function testMul()
    {
        $this->assertEquals(12, $this->object->mul());
    }

    /**
     * @covers shisoku::div
     */
    public function testDiv()
    {
        $this->assertEquals(3, $this->object->div());
    }
}
