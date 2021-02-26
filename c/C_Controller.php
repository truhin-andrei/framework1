<?php
//
// Base class of the controller
//
abstract class C_Controller
{
	// Generation of external template
	protected abstract function render();

	// Function acting before main method 
	protected abstract function before();

	public function Request($action)
	{
		$this->before(); // method invoking before forming data for template
		$this->$action();   //$this->action_index
		$this->render();
	}

	//
	// if request has been made by GET?
	//
	protected function IsGet()
	{
		return $_SERVER['REQUEST_METHOD'] == 'GET';
	}

	//
	//  if request has been made by POST?
	//
	protected function IsPost()
	{
		return $_SERVER['REQUEST_METHOD'] == 'POST';
	}

	//
	// Generation HTML template to string.
	//
	// protected function Template($fileName, $vars = array())
	// {
	// 	// Applying variables.
	// 	foreach ($vars as $k => $v) {
	// 		$$k = $v;
	// 	}

	// 	// Generation HTML to string.
	// 	ob_start();
	// 	include "$fileName";
	// 	return ob_get_clean();
	// }

	// If was called method that doesn`t exist - exit
	public function __call($name, $params)
	{
		die('Don`t write bullshit to url-address!!!');
	}
}
