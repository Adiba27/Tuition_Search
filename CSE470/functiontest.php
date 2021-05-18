<?php

use PHPUnit\Framework\TestCase;

class functiontest extends TestCase
{
	public function testAddReturnsTheCorrectSum()
	{
		require 'function.php';
		
		
		$this->assertEquals(4, add(2,2));
		$this->assertEquals(9, add(2,7));
		$this->assertEquals(19, add(2,17));
		$this->assertEquals(17, add(2,15));
	}
}

	









?>