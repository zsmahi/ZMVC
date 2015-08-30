<?php
namespace ZMVC\Core;

/*
*
* Class View - abstract view
* Base View
*
*/
abstract class View{

    // members

    protected $_variables = array();
    protected $_controller;
    protected $_action;
    protected $_model;

    // Methods

    public function GetVariables(){
        return $this->_variables;
    }

    public function SetVariables(array $variables){
        $this->_variables = $variables;
    }

    public function GetController(){
        return $this->_controller;
    }

    public function SetController($controller){
        $this->_controller = $controller;
    }

    public function GetAction(){
        return $this->_action;
    }

    public function SetAction($action){
        $this->_action = $action;
    }

    public function GetModel(){
        return $this->_model;
    }

    public function SetModel($model){
        $this->_model = $model;
    }

    // constructor

    public function __construct($controller, $action){
        $this->_controller = $controller;
        $this->_action = $action;
    }

    // destructor

    public function __destruct(){

    }
}
?>