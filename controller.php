<?php
require_once 'model.php';
require_once 'view.php';
/**
 * Doc-блок здесь
 */
class Controller {
	public $model;
	public $view;
	public $inputCheck;

	function __construct()
	{
		$this->view = new View();
	}

	function actionIndex()
	{
		// todo
	}
}