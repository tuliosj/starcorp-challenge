<?php

namespace ChallengeTests;

use PHPUnit\Framework\TestCase;
use Challenge\Formattable\StarcorpFormatter;

class StarcorpFormatterTest extends TestCase
{
	
	function testFormats() {
		$formatter = new StarcorpFormatter;

		$this->assertEquals('IT', $formatter->format(-10));
		$this->assertEquals('-8', $formatter->format(-8));
		$this->assertEquals('Starcorpianos', $formatter->format(0));
		$this->assertEquals('Starcorp', $formatter->format(3));
		$this->assertEquals('IT', $formatter->format(5));
		$this->assertEquals('8', $formatter->format(8));
		$this->assertEquals('Starcorpianos', $formatter->format(45));
	}

}