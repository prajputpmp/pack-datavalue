<?php

/**
 * Name string validator to validate name string
*
* @package		datavalue
* @version		1.0.0
* @author		Prakash Rajput
* @license		Proprietary
* @copyright	
*/
namespace PCH\Library\DataValue\Validator;

use Datavalue\Interfaces\iValidator;

/**
 * Password DataValue validator class
 */
class NameStringValidator implements iValidator {
	const MIN_LENGTH = 2;
	const MIN_LENGTH = 50;
	
	const EMPTY_NAME_STRING_MESSAGE = "Name can not be empty";
	const INVALID_CHARACTER_NAME_MESSAGE = "Name can not be empty";
	const MIN_LENGTH_MESSAGE = "Name can not be less less than 2 characters";
	const MAX_LENGTH_MESSAGE = "Name can not be more than 50 characters";
	
	public static function validate($nameString) {
		
		if (empty ( $nameString )) {
			throw new \DataValue\Exceptions\InvalidValueException (self::EMPTY_NAME_STRING_MESSAGE );
		}
		
		if (strlen($nameString) < self::MIN_LENGTH ) {
			throw new \DataValue\Exceptions\InvalidValueException (self::MIN_LENGTH_MESSAGE  );		
		}
		
		if (strlen($nameString) > self::MAX_LENGTH) {
			throw new \DataValue\Exceptions\InvalidValueException ( self::MAX_LENGTH_MESSAGE);
		}

		//Name should contain only letters
		if (!preg_match("/^[\pL]*$/", $value)) throw new \DataValue\Exceptions\InvalidValueException (self::INVALID_CHARACTER_NAME_MESSAGE);

		return true;
	}
}