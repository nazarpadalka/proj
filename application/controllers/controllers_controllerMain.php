<?php
class controllers_controllerMain extends core_controller
{

	function __construct()
	{
		$this->view = new views_viewMain();
	}

	function actionIndex()
	{
		$this->view->generate('template.phtml', file_get_contents('application/main.html'), $data);
	}
}