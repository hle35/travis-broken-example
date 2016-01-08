<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);      // corrected by HLE 20160108    this->assertEquals(1+1,1);
  	}
}

?>
