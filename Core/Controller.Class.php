<?php
namespace ZMVC\Core;
/*
 *
 * Class Controller - abstract controller
 * Base Controller
 * 
 */
abstract class Controller{
	protected $_model;
	protected $_controller;
	protected $_action;
	protected $_template;
	
	public function __construct($model, $controller, $action){
		$this->_model = $model;
		$this->_controller = $controller;
		$this->_action = $action;
	}
}
?>