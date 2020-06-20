<?php

namespace ChallengeTests;

use PHPUnit\Framework\TestCase;
use Challenge\Dividable\Three;

class ThreeTest extends TestCase
{
	
	function testDivides() {
		$minusNine = new Three(-9);
		$minusEight = new Three(-8);
		$zero = new Three(0);
		$three = new Three(3);
		$eight = new Three(8);
		$fortyFive = new Three(45);

		$this->assertEquals(true, $minusNine->divides());
		$this->assertEquals(false, $minusEight->divides());
		$this->assertEquals(true, $zero->divides());
		$this->assertEquals(true, $three->divides());
		$this->assertEquals(false, $eight->divides());
		$this->assertEquals(true, $fortyFive->divides());
	}

}