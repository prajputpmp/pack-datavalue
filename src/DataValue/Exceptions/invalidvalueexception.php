<?php

/**
 * An Invalid value exception class
 *
 * @package		datavalue
 * @version		1.0.0
 * @author		Prakash Rajput
 * @license		Proprietary
 * @copyright
 */

namespace PCH\Library\DataValue\Exceptions;

class InvalidValueException extends \Exception {

    public function __construct($message) {
        $this->message = $message;
    }
}

?>