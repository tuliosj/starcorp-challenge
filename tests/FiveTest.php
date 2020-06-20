<?php

namespace ChallengeTests;

use PHPUnit\Framework\TestCase;
use Challenge\Dividable\Five;

class FiveTest extends TestCase
{
	
	function testDivides() {
		$minusTen = new Five(-10);
		$minusEight = new Five(-8);
		$zero = new Five(0);
		$five = new Five(5);
		$eight = new Five(8);
		$fortyFive = new Five(45);

		$this->assertEquals(true, $minusTen->divides());
		$this->assertEquals(false, $minusEight->divides());
		$this->assertEquals(true, $zero->divides());
		$this->assertEquals(true, $five->divides());
		$this->assertEquals(false, $eight->divides());
		$this->assertEquals(true, $fortyFive->divides());
	}

}