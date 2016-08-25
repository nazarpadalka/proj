<?php
class ControllerMain extends Controller
{

	function actionIndex()
	{
		$this->view->generate(file_get_contents('application\template.html'), file_get_contents('application\main.html'), $data);
	}
}
$mainController = new ControllerMain();
$mainController->actionIndex();