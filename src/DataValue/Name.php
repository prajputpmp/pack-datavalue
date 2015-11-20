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
use DataValue\NameString;
/**
 * NameString DataValue class (FirstName, LastName)
 */
class Name implements iDataValue {

	private $firstName;
	private $lastName;
	
	public function __construct(NameString $firstName, NameString $lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function value() {
		return $this->lastName.' '.firstName;
	}
}