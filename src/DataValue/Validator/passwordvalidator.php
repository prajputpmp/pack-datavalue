<?php

/**
 * Email Data Value validator
*
* @package		datavalue
* @version		1.0.0
* @author		Prakash Rajput
* @license		Proprietary
* @copyright	
*/
namespace PCH\Library\DataValue\Validator;

use PCH\Library\Datavalue\Interfaces\iValidator;
use PCH\Library\DataValue\Exceptions\InvalidValueException;


/**
 * Password DataValue validator class
 */
class PasswordValidator implements iValidator {
	const MIN_LENGTH = 6;
	const MAX_LENGTH = 20;
	
	const EMPTY_PASSWORD_MESSAGE = "Password can not be empty";
	const MIN_LENGTH_MESSAGE =  "Password can not less minimum characters";
	const MAX_LENGTH_MESSAGE = 	"Password can not more than maximum characters";
	const INVALID_PASSOWRD_MESSAGE = "Invalid Password";
	
	public static function validate($password) {
		
		if (empty ( $password )) {
			throw new InvalidValueException (self::EMPTY_PASSWORD_MESSAGE );
		}
		
		if (strlen($password) < self::MIN_LENGTH ) {
			throw new InvalidValueException (self::MIN_LENGTH_MESSAGE  );		
		}
		
		if (strlen($password) > self::MAX_LENGTH) {
			throw new InvalidValueException ( self::MAX_LENGTH_MESSAGE);
		}

		/*
		 Explaining $\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$
		$ = beginning of string
		\S* = any set of characters
		(?=\S{8,}) = of at least length 8
		(?=\S*[a-z]) = containing at least one lowercase letter
		(?=\S*[A-Z]) = and at least one uppercase letter
		(?=\S*[\d]) = and at least one number
		(?=\S*[\W]) = and at least a special character (non-word characters)
		$ = end of the string
		*/
		if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $password)) {
			throw new InvalidValueException (self::INVALID_PASSOWRD_MESSAGE);
		}
		return true;
	}
}