<?php
namespace ZMVC\Core;
/*
 * 
 * Exception Class - abstract exception
 * Base Exception
 * 
 */
 abstract class CustomException extends Exception{
 		
 	// constructor	
 	
 	public function __construct($message, $code = 0, Exception $previous = null) {
 		parent::__construct($message, $code, $previous);
 	}
	
	// methods
	
	public function __toString() {
    	return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
  	}
	
	// destructor
	
	public function __destruct(){
		parent::__destruct();
	}
 }
?>