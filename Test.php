<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
	
	public function testFailMulOne() {
		$this->assertEquals(1*1,2);
  	}
	public function testFailMulZero() {
		$this->assertEquals(0*0,0);
  	}
	public function testPassDivTwo() {
		$this->assertEquals(2/2,1);
  	}	
	
}

?>
