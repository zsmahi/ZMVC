<?php
namespace ZMVC\Core;

require_once(__DIR__.'../Exceptions/AlreadyExistingException.Class.php');
require_once(__DIR__.'../Exceptions/NotExistingException.Class.php');
require_once(__DIR__.'../Exceptions/NullAttributException.Class.php');

use \ZMVC\Exceptions\AlreadyExistingException as AlreadyExistingException;
use \ZMVC\Exceptions\NotExistingException as NotExistingException;
use \ZMVC\Exceptions\NullAttributException as NullAttributException;

 /*
 * 
 * Class Model - abstract model
 * Base Model
 * 
 */
 
 abstract class Model{
 	
	 
	// Members	
 	
 	protected $_id;
	protected $_creationDate;
	protected $_modificationDate;
	protected $_description;
	protected $_attributs = array();
	
	// Constructor
	
	public function __construct($description = ""){
		$this->_creationDate = date('Y-m-d H:i:s');
		$this->_modificationDate = date('Y-m-d H:i:s');
		$this->_description = $description;
	}
	
	// Methods 
	
	// protected
	protected function __updateModel(){
		$this->_modificationDate = date('Y-m-d H:i:s');
	}
	
	// private 
	// here put private methods
	
	// public 
	
	// getters and setters
	
	public function SetID($id){
		$this->_id = $id;
		$this->__updateModel();		
	}
	
	public function GetID(){
		return $this->_id;
	}
	
	public function SetDescription($description){
		$this->_description = $description;
		$this->__updateModel();
	}
	
	public function GetDescription(){
		return $this->_description;
	}
	
	public function SetAttributs(array $attributs){
		$this->_attributs = $attributs;
		$this->__updateModel();
	}
	
	public function AddAttibut($attributName , $attributValue){
		if (array_key_exists($attributName, $this->_attributs)){
			throw new AlreadyExistingException($attributName, 1);			
		}
		else{
			$this->_attributs[$attributName] = $attributValue;
			$this->__updateModel();
		}
	}
	
	public function SetAttribut($attributName, $attributValue){
		$this->_attributs[$attributName] = $attributValue;
	}
	public function GetAttribut($attributName){
		if (!array_key_exists($attributName, $this->_attributs)){
			throw new NotExistingException($attributName, 1);			
		}
		if (!isset($this->_attributs[$attributName])){
			throw new NullAttributException($attributName, 1);			
		}
		return $this->_attributs[$attributName]; 
	}
	public function GetAllAttributs(){
		return $this->_attributs;
	}
	
	// Destructor
	public function __destruct(){
		
	}
 }
?>