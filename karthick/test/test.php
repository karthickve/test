<?php
use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{
	private $_printobj;

	protected function setUp(){
        $this->_printobj = new PrintNumbers();
    }

    public function testThree(){

        $this->assertEquals(0,$this->_printobj->remainder(9,3));
        $this->assertEquals(0,$this->_printobj->remainder(12,3));
        $this->assertEquals(0,$this->_printobj->remainder(27,3));
      	$this->assertEquals(0,$this->_printobj->remainder(90,3));
    }

    public function testFive(){

        $this->assertEquals(0,$this->_printobj->remainder(5,5));
        $this->assertEquals(0,$this->_printobj->remainder(50,5));
        $this->assertEquals(0,$this->_printobj->remainder(90,5));
        $this->assertEquals(0,$this->_printobj->remainder(100,5));

    }

    public function testThreeAndFive(){
        $this->assertEquals(0,$this->_printobj->add(0,0));
        $this->assertEquals(0,$this->_printobj->add(($this->_printobj->remainder(15,5)),($this->_printobj->remainder(15,3))));
        $this->assertEquals(0,$this->_printobj->add(($this->_printobj->remainder(60,5)),($this->_printobj->remainder(60,3))));
        $this->assertEquals(0,$this->_printobj->add(($this->_printobj->remainder(90,5)),($this->_printobj->remainder(90,3))));
        $this->assertEquals(0,$this->_printobj->add(($this->_printobj->remainder(75,5)),($this->_printobj->remainder(75,3))));
	}

    public function testNone(){
        $this->assertNotEquals(0,$this->_printobj->remainder(4,3));
        $this->assertNotEquals(0,$this->_printobj->remainder(7,5));
        $this->assertNotEquals(0,$this->_printobj->add(1,0));
        $this->assertNotEquals(0,$this->_printobj->add(($this->_printobj->remainder(17,5)),($this->_printobj->remainder(17,3))));
    }
}

?>