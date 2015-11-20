<?php

namespace PCH\Library\Tests\Unit\DataValue\EmailTest;

use PCH\Library\DataValue\Email;

class EmailTest extends \PHPUnit_Framework_TestCase {
	public function testInValidEmailException() {
		try {
			$email = new Email ( "abc" );
		} catch ( \Exception $ex ) {
			$this->assertEquals ( "Invalid Email", $ex->getMessage () );
			return;
		}
		$this->assertTrue ( False );
	}
	public function testEmptyValueValidation() {
		try {
			$email = new Email ( "" );
		} catch ( \Exception $ex ) {
			$this->assertEquals ( "Empty Email", $ex->getMessage () );
			return;
		}
		$this->assertTrue ( False );
	}
	public function testValidEmailValue() {
		try {
			$email = new Email ( "demo@test.com" );
		} catch ( \Exception $ex ) {
			$this->assertTrue ( false );
			return;
		}
		$this->assertTrue ( true );
	}
}

?>