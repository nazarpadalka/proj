<?php
class core_Controller {
	public $model;
	public $view;
	public $validator;

	function __construct()
	{
		$this->view = new core_view();
	}
	
	function actionIndex()
	{
		$this->view->generate(file_get_contents('application\front.html'), $data);
	}
}
