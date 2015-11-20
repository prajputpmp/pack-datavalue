<?php

namespace PCH\Library\Tests\Unit\DataValue\PasswordTest;

use PCH\Library\DataValue\Password;
use PCH\Library\DataValue\Validator\PasswordValidator;

class PasswordTest extends \PHPUnit_Framework_TestCase {
	public function test_Empty_Password_Validation() {
		try {
			$password = new Password ( "");			
		} catch ( \Exception $ex ) {
			$this->assertEquals ( PasswordValidator::EMPTY_PASSWORD_MESSAGE, $ex->getMessage () );
			return;
		}
		$this->assertTrue ( False );
	}

	public function test_Password_Min_Length_Validation() {
		try {
			$password = new Password ( "abcd" );
		} catch ( \Exception $ex ) {
			$this->assertEquals ( PasswordValidator::MIN_LENGTH_MESSAGE, $ex->getMessage () );
			return;
		}
		$this->assertTrue ( False );
	}	
	
	public function test_Password_Max_Length_Validation() {
		try {
			$password = new Password ( "123456789101112123141516" );
		} catch ( \Exception $ex ) {
			$this->assertEquals ( PasswordValidator::MAX_LENGTH_MESSAGE, $ex->getMessage () );
			return;
		}
		$this->assertTrue ( False );
	}
	
	public function test_Invalid_Password_Validation() {
		try {
			$password = new Password ( "simpletextpassword" );
		} catch ( \Exception $ex ) {
			$this->assertEquals ( PasswordValidator::INVALID_PASSOWRD_MESSAGE, $ex->getMessage () );
			return;
		}
		$this->assertTrue ( False );
	}
	
	public function test_Valid_Password() {
		try {
			$password = new Password ( "Val1dP@ssW0rd" );
		} catch ( \Exception $ex ) {
			$this->assertTrue ( false );
			return;
		}
		$this->assertTrue ( true );
	}
	
}

?>