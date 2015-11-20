<?php

/**
 * Password data value class to validate password string
*
* @package		datavalue
* @version		1.0.0
* @author		Prakash Rajput
* @license		Proprietary
* @copyright
*/
namespace PCH\Library\DataValue;

use PCH\Library\DataValue\Interfaces\iDataValue;
use PCH\Library\DataValue\Validator\PasswordValidator;

/**
 * Password  DataValue class
 */
class Password implements iDataValue {
	private $value;

	public function __construct($value) {
		
		if (PasswordValidator::validate ( $value )) {	
			$this->value = $value;
		}
	}

	public function value() {
		return $this->value;
	}
}