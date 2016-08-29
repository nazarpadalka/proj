<?php
spl_autoload_register(function ($class)
{
	$classname = $class;
	$class = explode("_", $class);
	require_once 'application/' .$class[0] . '/' . $classname . '.php';
});
class controllers_controllerMain extends core_controller
{

	function __construct()
	{
		$this->view = new views_viewMain();
	}

	function actionIndex()
	{
		$this->view->generate(file_get_contents('application\template.html'), file_get_contents('application\main.html'), $data);
	}
}