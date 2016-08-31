<?php
/**
 * Class core_Controller
 */
class core_Controller {
	public $model;
	public $view;
	public $validator;

	/**
	 * core_Controller constructor.
	 */
	function __construct()
	{
		$this->view = new core_view();
	}

	/**
	 *
	 */
	function actionIndex()
	{
		$this->view->generate(file_get_contents('application\front.phtml'), $data);
	}
}
