<?php
namespace ZMVC\Exceptions;

require_once(__DIR__ . '/../Core/CustomException.Class.php');

use \ZMVC\Core\CustomException as CustomException;

/*
 * 
 * AlreadyExistingException Class
 * 
 */
class AlreadyExistingException extends CustomException{
	
	// constructor
	
	public function __construct($paramName, $code = 0, Exception $previous = null){
		$message = $paramName." : Attribut Already Existing";	
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