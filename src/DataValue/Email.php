<?php

/**
 * Email Data Value class
*
* @package		datavalue
* @version		1.0.0
* @author		Prakash Rajput
* @license		Proprietary
* @copyright	
*/
namespace PCH\Library\DataValue;

use PCH\Library\DataValue\Interfaces\iDataValue;
use PCH\Library\DataValue\Validator\EmailValidator;

/**
 * Email DataValue class
 */
class Email implements iDataValue {
	private $value;
	
	public function __construct($value) {
		if (EmailValidator::validate ( $value )) {
			$this->value = $value;
		}
	}
	
	public function value() {
		return $this->value;
	}
}