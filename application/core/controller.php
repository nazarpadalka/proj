<?php
class Controller {
	public $model;
	public $view;
	public $validator;

	function __construct()
	{
		$this->view = new View();
	}
	
	function actionIndex()
	{
		$this->view->generate(file_get_contents('application\front.html'), $data, 1);
	}
}
