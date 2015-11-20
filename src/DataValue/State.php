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
namespace DataValue;

use DataValue\Interfaces\iDataValue;
use DataValue\Validator\NameStringValidator;

/**
 * NameString DataValue class (FirstName, LastName)
 */
class City implements iDataValue {
	private $value;

	public function __construct($value) {
			$this->value = $value;
	}

	public function value() {
		return $this->value;
	}
}