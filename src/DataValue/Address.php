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
use DataValue\AddressString;
use DataValue\City;
use DataValue\State;
/**
 * NameString DataValue class (FirstName, LastName)
 */
class Address implements iDataValue {
	private $address;
	private $city;
	private $state;
	private $zip;
	
	public function __construct(AddressString $address,City $city, State $state,Zip $zip) {
		$this->address = $address;
		$this->city = $city;
		$this->state = $state;
		$this->zip = $zip;
	}

	public function value() {
		return $this->address->value().", ".$this->getCity().", ".$this->getState()." - ".$this->getZip();
	}
	public function getAddress() {
		return $this->address->value();
	}
	public function getCity() {
		return $this->city->value();
	}
	public function getState() {
		return $this->state->value();
	}
	public function getZip() {
		return $this->zip->value();
	}
}