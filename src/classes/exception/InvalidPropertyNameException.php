<?php
namespace iutnc\deefy\exception;
use Exception as Exception;

class InvalidPropertyNameException extends Exception {
		public function __construct($message, $code = 0, Throwable $prev = null){
			parent::__construct($message,$code,$prev);
		}

		public function __toString() {
		   return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
		}
	}

?>